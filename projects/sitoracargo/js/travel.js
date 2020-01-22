var country = 'usa';
var desc = [];
var img_pos = '';
$(function () {
    $(".flags").click(function () {
        country = $(this).data('flag');
        var function_name = "images_"+country;
        window[function_name]();
    })

    $(".leftimgs").click(function () {
        var img_src = $(this).attr('src');
        img_pos = $(this).data('id');
        change_image_source2(img_src);
    });
    $(document).on("click",".btnid",function() {
        var id = $(this).data('btnid');
        alert(id);
    });
});
function images_usa(){
    change_image_source(0, 'img/us.jpg');
    change_image_source(1, 'img/us1.jpg');
    change_image_source(2, 'img/us2.jpg');
}
function images_turkey(){
    change_image_source(0, 'img/turkey.jpg');
    change_image_source(1, 'img/turkey1.jpg');
    change_image_source(2, 'img/turkey2.jpg');
}
function images_australia(){
    change_image_source(0, 'img/aus.jpg');
    change_image_source(1, 'img/aus1.jpg');
    change_image_source(2, 'img/aus2.jpg');
}
function images_japan(){
    change_image_source(0, 'img/japan4.jpg');
    change_image_source(1, 'img/japan1.jpg');
    change_image_source(2, 'img/japan2.jpg');
}

function change_image_source(img_id, img_src) {
    if (img_id==0){
        change_image_source2(img_src);
    }
   $(".leftimgs").eq(img_id).attr('src',img_src);
}
function change_image_source2(img_src) {
    $(".rightwindow").css('background-image',"url("+img_src+")");
    $(".destination_desc").fadeIn('slow');
    var description = dest_desc();
   $(".destination_desc").html(description);
}

function dest_desc() {
    var mydesc = [];
    if (country=='usa'){
        mydesc = {
            'desc1':"sdfsdfsdfsdfsd <hr><img class='mediamimgs' src='https://thenypost.files.wordpress.com/2019/03/190309-nyc-bankrupt.jpg?quality=90&strip=all&w=618&h=410&crop=1'><hr>fsdfsdfsdfsdfsdfsdfsdf",
            'desc2':"rem Ipsum  is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t",
            'desc3':"usa -333wedwedwedwedwedwed: adfsadfsdfsdf aerfwefarem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t<br><button class='btnid' data-btnid='usa3'>Share this image</button>",
        };
        return returnDesc(mydesc);
    }
    if (country=='turkey'){
        mydesc = {
            'desc1':"Turkie jumhiriyatiga hush geldingiz?\n" +
                "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to",
            'desc2':"usa -222wedwedwedwedwedwed : rem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t",
            'desc3':"usa -333wedwedwedwedwedwed: adfsadfsdfsdf aerfwefarem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t",
        };
        return returnDesc(mydesc);
    }
    if (country=='australia'){
        mydesc = {
            'desc1':"Welcome to Ausie Land!\n" +
                "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to",
            'desc2':"usa -222wedwedwedwedwedwed : rem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t",
            'desc3':"usa -333wedwedwedwedwedwed: adfsadfsdfsdf aerfwefarem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t <br><button class='btnid' data-btnid='australia3'>Share this image</button>",
        };
        return returnDesc(mydesc);
    }
    if (country=='japan'){
        mydesc = {
            'desc1':"This is Japan\n" +
                "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to",
            'desc2':"328765jhdiwdbaksdasd -222wedwedwedwedwedwed : rem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t",
            'desc3':"jsdbnksdbfksfjb  ikasdhbfsf -333wedwedwedwedwedwed: adfsadfsdfsdf aerfwefarem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been t",
        };
        return returnDesc(mydesc);
    }

}

function returnDesc(desc) {
    switch (img_pos) {
        case 1:
            return desc.desc1;
            break;
        case 2:
            return desc.desc2;
            break;
        case 3:
            return desc.desc3;
            break;
        default:
            return desc.desc1;
            break;
    }
}
