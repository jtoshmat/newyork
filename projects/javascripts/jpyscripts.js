$ (document). ready(function () {
    $("#calculate").click(function () {
        var cur_type1 = $("#cur_type1").val();
        var cur_type2 = $("#cur_type2").val();
        var amount = $("#amount").val();

        if (cur_type1==cur_type2){
            alert("MUST CHOOSE 2 DIFFRENT CURRENCY");
            return false;
        }

        if (amount==''){
            alert("PLEASE ENTER AMOUNT");
            return false;
        }

        calculate (cur_type1, cur_type2, amount);
    });
    function calculate(cur_type1, cur_type2, amount){
        var jpyrate = 108.54;
        var output ="N/A";

        //usd to jpy
        if (cur_type1=='dollar' && cur_type2=='yen'){
           output = "the currency rate: ";
           var result =amount * jpyrate;
           output += '¥ ' + convert_format(result);
         }

        //jpy to usd
        if (cur_type1=='yen' && cur_type2=='dollar'){
            output = "the currency rate: ";
            var result =amount / jpyrate;
            output += '$ ' + convert_format(result);
        }
        $("#output").html(output);
    }
    function convert_format(result) {
        var num = result.toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
        return num;
    }


});