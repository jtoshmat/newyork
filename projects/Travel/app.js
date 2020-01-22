'use strict';
var app = angular.module('FlightApp', ['720kb.datepicker', 'ngRoute'])
        .config(['$routeProvider', function ($routeProvider) {
                $routeProvider
                        // Home
                        .when("/", {controller: "flightController"
                        })
                        .otherwise({redirectTo: '/'})
            }])

app.run(function ($rootScope) {
    $rootScope.priceRange = [0, 10000];

});