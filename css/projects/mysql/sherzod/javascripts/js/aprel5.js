$(function () {
   );​
    function changeImage(count){
        let random_num = Math.floor((Math.random() * 36) + 1);
        $(".photo"+random_num+" span").text(random_num + count);
        $(".photo"+random_num+" img").attr('src',imgs[random_img_num]);
        $(".photo"+random_img_num+" img").toggle();
        let num1 = Math.floor((Math.random() * 36) + 1);
        let num2 = Math.floor((Math.random() * 36) + 1);
        let num3 = Math.floor((Math.random() * 36) + 1);
        let num4 = Math.floor((Math.random() * 36) + 1);
        let num5 = Math.floor((Math.random() * 36) + 1);
        let num6 = Math.floor((Math.random() * 36) + 1);
        console.log(num1+' '+num2+' '+num3+' '+num4+' '+num5+' '+num6 );

        let winning_number = [66,37,29,91,41,24];
        //Prizes: all numbers $100   5 numbers $800  4 numbers $600 3 numbers $300 2 number $10   1 number $1
    }

    let count = 0;
    setInterval(function(){
        if (stop){
            return false;
        }
        count++;
        changeImage(count);
    }, 1000);
});