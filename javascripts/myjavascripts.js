$(document).ready(function () {



$(".form-control").submit(function () {
    var age = $(".age").val();

    var zhavob = '';


    if (age>1 && age<=15){
        doMyWork("Borib toshingi ter", "https://news.sanfordhealth.org/wp-content/uploads/2017/05/Children-blowing-bubbles.jpg", true,"f00");
    }

    else if(age>15 && age<=21){
          doMyWork("Oliftagarchilik, uyn kulgi va kayf safo - HAYOT DARSLARI", "https://childdevelopmentinfo.com/wp-content/uploads/2017/02/How-to-Raise-a-Happy-Teenager-mini.jpg", true,'3c86e3');
    }

    else if(age>21 && age<=45){
        doMyWork("Become a Developer or an IT consultant", "https://www.insidehighered.com/sites/default/server_files/media/iStock-520374378.jpg", true,"96979a");
    }

    else if(age>45 && age<=65){
        doMyWork("Become an IT manager", "https://cdn.vox-cdn.com/thumbor/CbLmVoRAMLKTcSsu20ugPpS2DXA=/0x0:4772x3181/1200x800/filters:focal(1383x1162:2145x1924)/cdn.vox-cdn.com/uploads/chorus_image/image/61511207/GettyImages_509147584.0.jpg", true,"f55","How satisfied are you with your purchase?");
    }

    else if(age>65 && age<=80){
        doMyWork("Enjoy your retirement!", "https://mpm.ph/wp-content/uploads/2013/09/senior-citizens.jpg", true,"fffc7f");
    }

    else if(age>80 && age<=90){
        doMyWork("How is your preparation going to travel to space?", "https://www.lifeline24.co.uk/wp-content/uploads/2018/04/Benefits-of-Meditation.jpg", true,"4b788c");
    }

    else if(age>90){
        doMyWork("See you on the other side", "http://www.kiplinger.com/kipimages/pages/18812.jpg", true,"e3a3a8");
    }

    else{
        zhavob = "Please enter only numbers between 1 and 90+";
        $(".myimg").hide();
    }

   return false;
});






function doMyWork(zhavob, img, show=true, color="fff", question='') {
    $(".myimg").attr('src',img);
    $(".myimg").show();
    $(".result").html(zhavob);
    $("body").css("background-color","#"+color);

    survey(zhavob, question);
}


function survey(zhavob, question) {

    if (question!='') {
        var ask = confirm(question);
        if (ask){
            $(".result").html(question + " VERY GOOOD");
        }else{
            $(".result").html(question + " DAMINGI OL, RETURN QILA OLMISAN");
        }
    }
}





});