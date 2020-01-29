


app.controller('flightController', ['$rootScope', '$scope', '$http', function ($rootScope, $scope, $http) {

        $scope.toFlights = [];
        $scope.froFlights = [];
        $scope.toFroFlights = [];
        $scope.toFroFlightsFiltered = [];
        $scope.oneway = true;
        $scope.srcDest = '';
        $scope.notYetSearched = true;
        $scope.departDateStr = '';
        $scope.returnDateStr = '';
        $scope.error = '';
        $scope.passengerCount = [];


        $http.get('/assets/flightDb.json').success(function (responseData) {
            $scope.flightsList = responseData;
        }).error(function (responseData) {
            $scope.error = 'Error in accessing flight info data base.';
        });

        //On change of Price slider, function updates the flight summary
        function updateRange(vals) {
            $rootScope.priceRange = vals;
            $scope.$apply();
        }
        ;

        //Function converts time from ms to Time String
        //Millisecond input is the seconds from MIDNIGHT TODAY 
        //19800000 - +05:30 GMT - IST TIME Standard
        function timemstostring(timeinms) {
            var tDate = new Date(timeinms - 19800000);
            return  tDate.toLocaleTimeString();
        }
        ;


        //Maps to and fro flights based on avalability on the day
        function mapToAndFroFlightList() {

            var toFlightList = $scope.toFlights;
            var froFlightList = $scope.froFlights;
            var departDateObject = new Date($scope.departDate);
            var returnDateObject = new Date($scope.returnDate);
            var depDatems = departDateObject.getTime();
            var arrDatems = returnDateObject.getTime();


            if (toFlightList.length === 0 && froFlightList.length === 0)
            {
                return;
            }
            else if (toFlightList.length == 0)
            {
                angular.forEach(froFlightList, function (froFlightObject) {
                    var toFroFlightObject = {};
                    toFroFlightObject.to = '-';
                    toFroFlightObject.fro = froFlightObject;
                    toFroFlightObject.price = froFlightObject.price;
                    $scope.toFroFlights.push(toFroFlightObject);
                });
            }
            else if (froFlightList.length == 0)
            {
                angular.forEach(toFlightList, function (toFlightObject) {
                    var toFroFlightObject = {};
                    toFroFlightObject.fro = '-';
                    toFroFlightObject.to = toFlightObject;
                    toFroFlightObject.price = toFlightObject.price;
                    $scope.toFroFlights.push(toFroFlightObject);
                });
            }
            else
            {
                angular.forEach(toFlightList, function (toFlightObject) {
                    angular.forEach(froFlightList, function (froFlightObject) {
                        var toFroFlightObject = {};
                        toFroFlightObject.to = toFlightObject;
                        toFroFlightObject.fro = froFlightObject;
                        toFroFlightObject.price = toFlightObject.price + froFlightObject.price;
                        if (depDatems === arrDatems)
                        {
                            if (toFlightObject.arrTimeMs < froFlightObject.depTimeMs)
                            {
                                $scope.toFroFlights.push(toFroFlightObject);
                            }
                        }
                        else
                        {
                            $scope.toFroFlights.push(toFroFlightObject);
                        }
                    });
                });
            }
        }
        ;

        //Function changes the input form based on one way trip or return trip
        $scope.journeytype = function (type) {
            $scope.error = '';
            $scope.toFroFlights = [];
            $scope.notYetSearched = true;
            if (type === 0)
            {
                $scope.oneway = true;
            }
            else
            {
                $scope.oneway = false;
            }
        };


        //Function searches the flights from the data and diplays it. 
        $scope.search = function () {

            $scope.error = '';
            var currentDate = new Date();
            var departDateObject = new Date($scope.departDate);
            var returnDateObject = new Date($scope.returnDate);
            if (isNaN(departDateObject) || (!$scope.oneway && isNaN(returnDateObject)))
            {
                $scope.error = 'Invalid Date';
                return;
            }
            else if ($scope.src.toUpperCase() === $scope.dest.toUpperCase())
            {
                $scope.error = 'Source and Destination should be different.';
                return;
            }
            else if (currentDate.getTime() - departDateObject.getTime() > 86400000)
            {
                $scope.error = 'Departure date has been past, please select another date.';
                return;
            }
            else if (!$scope.oneway && (departDateObject.getTime() > returnDateObject.getTime()))
            {
                $scope.error = 'Invalid return date, time travelling is not possible as of now.';
                return;
            }

            $scope.notYetSearched = false;
            $scope.toFroFlights = [];



            $scope.departDateStr = departDateObject.toDateString();
            $scope.returnDateStr = returnDateObject.toDateString();


            $scope.toFlights = [];
            $scope.froFlights = [];


            //Forms 2 separate list for to and fro joutney 
            angular.forEach($scope.flightsList, function (flightObject) {
                if (flightObject.src.toUpperCase() === $scope.src.toUpperCase() && flightObject.dest.toUpperCase() === $scope.dest.toUpperCase() && flightObject.day.indexOf(departDateObject.getDay()) >= 0)
                {
                    flightObject.arrTime = timemstostring(flightObject.arrTimeMs);
                    flightObject.depTime = timemstostring(flightObject.depTimeMs);
                    $scope.toFlights.push(flightObject);
                }
                else if (!$scope.oneway && flightObject.dest.toUpperCase() === $scope.src.toUpperCase() && flightObject.src.toUpperCase() === $scope.dest.toUpperCase()
                        && flightObject.day.indexOf(returnDateObject.getDay()) >= 0)
                {

                    flightObject.arrTime = timemstostring(flightObject.arrTimeMs);
                    flightObject.depTime = timemstostring(flightObject.depTimeMs);
                    $scope.froFlights.push(flightObject);
                }
            });

            if ($scope.oneway)
            {
                $scope.srcDest = $scope.src + ' > ' + $scope.dest;
            }
            else
            {
                $scope.srcDest = $scope.src + ' > ' + $scope.dest + ' > ' + $scope.src;
            }

            mapToAndFroFlightList();
        };

        //passenger count list for search input
        for (var index = 0; index < 10; index++)
        {
            $scope.passengerCount.push(index);
        }


        //Slider handling
        $("#slider").slider({
            range: true,
            min: 0,
            max: 10000,
            step: 500,
            values: $rootScope.priceRange,
            slide: function (event, ui) {
                updateRange(ui.values);
            }
        });




    }])


//Price filter: based on the slider's price range it updates the list
app.filter('byPrice', function ($rootScope) {
    return function (toFroFlights, priceMin, priceMax) {
        $rootScope.flightCount = 0;
        var filtered = [];
        filtered = toFroFlights.filter(function (obj) {
            return (obj.price >= priceMin && obj.price <= priceMax)
        })
        $rootScope.flightCount = filtered.length;
        return filtered;
    };
});