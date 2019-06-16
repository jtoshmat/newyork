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
        var output = "N/A";

        //USD to UZS
        if (cur_type1 == 'dollar' && cur_type2 == 'som'){
            output = "The currency rate:  ";
            var result = amount * usrate;
            output += 'UZS '+convert_format(result);
        }

        //UZS to USD

        if (cur_type1 == 'som' && cur_type2 == 'dollar'){
            output = 'The currency rate:  ';
            var result = amount / usrate;
            output += '$ '+convert_format(result);
        }

        $("#output").html(output);
    }
/*    $("#amount").change(function () {
       var amount = $(this).val();
       var num = convert_format(amount);
       console.log('num:' + num);
    });*/

    function convert_format(result) {
        var num = result.toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
        return num;
    }


});



