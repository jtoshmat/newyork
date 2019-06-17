$( document ).ready(function() {
    $("#calc_btn").click(function () {
        var cur_type1 = $("#cur_type1").val();
        var cur_type2 = $("#cur_type2").val();
        var amount = $("#amount").val();
        if (cur_type1 == cur_type2){
            alert("Sorry, you must select one of the types different");
            return false;
        }

        if (amount==''){
            alert("Please enter the amount");
            return false;
        }

        calculate(cur_type1, cur_type2, amount);
    });
    function calculate(cur_type1, cur_type2, amount){
        var usrate = 8500.45;
        var mexrate = 19.10
        var output = "N/A";

        //USD to UZS
        if (cur_type1 == 'dollar' && cur_type2 == 'som'){
            output = "The currency rate:  ";
            var result = amount * usrate;
            output += 'UZS '+convert_format(result);
        }

        //UZS to USD

<<<<<<< HEAD
        if (cur_type1 == 'peso' && cur_type2 == 'dollar'){
            output = "The currency rate:  ";
            var result = amount / mexrate;
=======
        if (cur_type1 == 'som' && cur_type2 == 'dollar'){
            output = 'The currency rate:  ';
            var result = amount / usrate;
>>>>>>> e8d91888c5f31586762371266b6995000ac39ebe
            output += '$ '+convert_format(result);
        }

        //USD to MXN
        if (cur_type1 == 'dollar' && cur_type2 == 'peso'){
            output = "The currency rate:  ";
            var result = amount * mexrate;
            output += 'MXN'+convert_format(result);
        }


        if (cur_type1 == 'mexican peso' && cur_type2 == 'dollar'){
            output = "The currency rate:  ";
            var result = amount / mexrate;
            output += '$ '+convert_format(result);
        }


        $("#output").html(output);
    }
<<<<<<< HEAD

=======
>>>>>>> e8d91888c5f31586762371266b6995000ac39ebe
    function convert_format(result) {
        var num = result.toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
        return num;
    }
});



