myFT.on("instantads", function (e) {
    textConstructor();
});

var checker = true,
    images,
    loadedImage = 0;

function fontConstructor(e) {
    if (e.length > 0) {
        var yourFontURL = e;
        var yourFontName = e;
        var newStyle = document.createElement('style');
        newStyle.appendChild(document.createTextNode("\
@font-face{\
    \n\tfont-family: " + yourFontName + ";\
    \n\tsrc: url('https://cdn.flashtalking.com/89884/assets/" + yourFontURL + ".woff') format('woff');\
\n}"));
        return document.head.appendChild(newStyle);
    } else {
        console.log('empty font');
    }
}

function textConstructor() {
    console.log(myFT.instantAds);
    console.log(myFT.instantAdsLoaded);
    
    var fontArray = [
        myFT.instantAds.headline_fontStyle,
        myFT.instantAds.subHeadline_fontStyle,
        myFT.instantAds.frame3_line1_copy_fontStyle,
        myFT.instantAds.frame3_line2_copy_fontStyle,
        myFT.instantAds.frame3_legal_copy_fontStyle
    ];
    
    function normalizeArray(array){
        var prims = {"boolean":{}, "number":{}, "string":{}}, objs = [];
        
        return array.filter(function(item){
            var type = typeof item;
            
            if(type in prims){
                return prims[type].hasOwnProperty(item) ? false : (prims[type][item] = true);
            }else{
                return objs.indexOf(item) >= 0 ? false : objs.push(item);
            }
        });
    }
    
    var uniqueFonts = normalizeArray(fontArray);
    
    for(var ctr = 0; ctr < uniqueFonts.length; ctr++){
        fontConstructor(uniqueFonts[ctr]);
    }
    
    console.log(uniqueFonts);
    
    //fontConstructor(myFT.instantAds.headline_fontStyle);
    //fontConstructor(myFT.instantAds.subHeadline_fontStyle);
    //fontConstructor(myFT.instantAds.frame3_line1_copy_fontStyle);
    //fontConstructor(myFT.instantAds.frame3_line2_copy_fontStyle);
    //fontConstructor(myFT.instantAds.frame3_legal_copy_fontStyle);

    ctaText.innerHTML = myFT.instantAds.cta_txt;
    cta.style.cssText = "background-color: " + myFT.instantAds.cta_bg_color + ";top: " + myFT.instantAds.cta_XY.split(',')[1] + "px;left: " + myFT.instantAds.cta_XY.split(',')[0] + "px; color: " + myFT.instantAds.cta_color + ";";

    if (myFT.instantAds.cta_txt.length > 8) {
        cta.style.fontSize = "13px";
    }

    console.log(myFT.instantAds.cta_txt.length);
    headline1Txt.innerHTML = myFT.instantAds.frame1_headline_txt;
    headline1_sub.innerHTML = myFT.instantAds.frame1_subHeadline_txt;
    headline2Txt.innerHTML = myFT.instantAds.frame2_headline_txt;
    headline2_sub.innerHTML = myFT.instantAds.frame2_subHeadline_txt;
    headline3.innerHTML = myFT.instantAds.frame3_headline_txt;
    headline3_sub.innerHTML = myFT.instantAds.frame3_subHeadline_txt;
    headline3_legal.innerHTML = myFT.instantAds.frame3_legal_txt;

    var headEle = document.getElementsByClassName('headlines');
    var subEle = document.getElementsByClassName('subHeadlines');

    if (myFT.instantAds.frame1_subHeadline_txt.length > 0) {
        headline1.classList.add('withSubHeadline');
    } else {
        headline1.classList.add('flexDiv');
    }

    if (myFT.instantAds.frame2_subHeadline_txt.length > 0) {
        headline2.classList.add('withSubHeadline2');
    } else {
        headline2.classList.add('flexDiv');
    }

    for (var i = 0; i < headEle.length; i++) {
        headEle[i].style.color = myFT.instantAds.headline_copy_color;
        headEle[i].style.fontFamily = myFT.instantAds.headline_fontStyle;
    }

    for (var i = 0; i < subEle.length; i++) {
        subEle[i].style.color = myFT.instantAds.subHeadline_copy_color;
        subEle[i].style.fontFamily = myFT.instantAds.subHeadline_fontStyle;
    }

    headline3.style.fontFamily = myFT.instantAds.frame3_line1_copy_fontStyle;

    headline3_sub.style.fontFamily = myFT.instantAds.frame3_line2_copy_fontStyle;

    headline3_legal.style.fontFamily = myFT.instantAds.frame3_legal_copy_fontStyle;

    headline3.style.color = myFT.instantAds.frame3_line1_copy_color;
    headline3_sub.style.color = myFT.instantAds.frame3_line2_copy_color;
    headline3_legal.style.color = myFT.instantAds.frame3_legal_color;
    brandColor.style.backgroundColor = myFT.instantAds.brandColorBar_bg_color;
    finalBrandColor.style.backgroundColor = myFT.instantAds.brandColorBar_bg_color;


    console.log(myFT);
    preload();
}

function preload() {
    images = new Array(
        myFT.instantAds.background_img,
        myFT.instantAds.logoLeft_img,
        myFT.instantAds.logoRight_img
    );

    for (var i = 0; i < images.length; i++) {
        imageObj = new Image();
        imageObj.src = images[i];
        imageObj.addEventListener("load", iLoad, false)
    }
}

function iLoad() {
    loadedImage++;
    if (images.length == loadedImage) {
        bgImage.src = images[0];
        logoImage1.src = images[1];
        logoImage2.src = images[2];
        setTimeout(init, 1000);
        console.log('imageconstructor');
    }
}

function init() {
    main.style.visibility = "visible";
    events();
    intro();
}

function intro() {
    brandColor.style.opacity = 1;
    setTimeout(anim1, 500);
}

function anim1(e) {
    headline1.classList.add('moveIn');
    headline1_sub.classList.add('moveIn');
    if (myFT.instantAds.frame2_toggle == "false") {
        setTimeout(anim4, 2000);
    } else {
        setTimeout(anim2, 3000);
    }
}

function anim2() {
    headline1_sub.classList.add('moveOut');
    headline1.classList.add('moveOut');
    setTimeout(anim3, 700);
}

function anim3() {
//    headline1_sub.classList.add('moveOut');
//    setTimeout(anim4, 200);
    headline2.classList.add('moveIn');
    headline2_sub.classList.add('moveIn');
    setTimeout(anim4, 3000);
}

function anim4() {
//    headline1.classList.add('moveOut');
//    setTimeout(anim5, 500);
    finalBrandColor.classList.add('scaleDown');
    setTimeout(anim5, 500);
}

function anim5() {
//    headline2.classList.add('moveIn');
//    setTimeout(anim6, 1200);
    headline3_sub.classList.add('moveIn');
    headline3.classList.add('moveIn');
    setTimeout(anim6, 700);
}

function anim6() {
//    headline2_sub.classList.add('moveIn');
//    setTimeout(anim7, 2000);
    headline3_legal.style.opacity = 1;
}

function anim7() {
//    finalBrandColor.classList.add('scaleDown');
//    setTimeout(anim8, 500);
}

function anim8() {
//    headline3_sub.classList.add('moveIn');
//    headline3.classList.add('moveIn');
//    setTimeout(anim9, 700);
}

function anim9() {
//    headline3_legal.style.opacity = 1;
}

function events() {
    var exit = FT.$('#exit');
    var dynamicUrl = myFT.instantAds.clickTag;
    myFT.applyClickTag(exit, 1, dynamicUrl);
}
