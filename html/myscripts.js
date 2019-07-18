

    $(document).on('submit', '#myform', function () {
            var inst = $("input[name='university']").val();

            var rownum = $("input[name='university']").attr('data-row');
            $(".inp"+rownum).addClass('errorinput');
        var rownum = $("input[name='institute']").attr('data-row');
        $(".inp"+rownum).addClass('errorinput');
        $("#jon").css("background-color",'#f00');
         return false;


        alert("Good");
        return false;


    });





