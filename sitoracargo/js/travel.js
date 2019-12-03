$(function () {
    $(".flags").click(function () {
        var country = $(this).data('flag');
        var function_name = "images_"+country;
        window[function_name]();
    })

    $(".leftimgs").click(function () {
        var img_src = $(this).attr('src');
        change_image_source(false, img_src);
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
    if (!img_id){
        $(".rightimgs").attr('src',img_src);
        return false;
    }
    if (img_id==0){
        $(".rightimgs").attr('src',img_src);
    }
   $(".leftimgs").eq(img_id).attr('src',img_src);

}