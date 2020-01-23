$(function () {
    $("#myconverter_form").submit(function () {
        var user_input = $(".mygroup_inputs").val();
        var user_select = $(".myown_select").val();

        var result = user_input +'  '+ user_select + " is ";

        if (user_select == 'km'){
            result = user_input + ' km is ' + user_input * 0.62 + ' miles ';
        }
        else if (user_select == 'mile'){
            result = user_input + ' miles is ' + user_input * 1.6 + ' km ';
        }else{
            alert("Whatever");
        }
        $(".myresultbox").html(result).fadeIn('slow');
        return false;
    });

    $("#help_icon").click(function () {
       $(".instruction").toggle();
    });

});