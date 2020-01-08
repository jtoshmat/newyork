<?php
/*$name2 = $name = "pneumonoultramicroscopicsilicovolcanoconiosis";
for($i = 0; $i<strlen($name); $i++) {

    if (($i%5)==4){
        $name[$i] = '*';
    }
    if(($i%5)==0 && $i!=0){
        $name[$i] = '#';
    }

}
echo $name2. " : ".$name;
*/

/*$texts = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.';

$mytexts = explode(' ', $texts);

foreach ($mytexts as $line=>$mytext){

    if ($line%9==0 && $line=!0) {
        echo "<span>" . $mytext . "</span>";
    }else{
        echo $mytext;
    }
    echo "<hr>";
}
?>

<style>
   span{
       background-color: darkred;
       color: yellow;
       margin: 2px;
   }



</style>
*/
$texts = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.';
$mytexts = explode(" ", $texts);

foreach ($mytexts as $line => $mytext) {
    echo '<br>';
    echo $line . ":";
    /*$pattern = "/[0-9]{1,10}/";*/
    $pattern = "/^th/";
    $numbers = preg_match($pattern, $mytext, $isnumber);

    if ($numbers) {
        echo "<span class='numbers'>" . $mytext . "</span>";
    } else {
        if ($line % 9 == 0 && $line != 0) {
            echo "<span>" . $mytext . "</span>";
        } else {
            echo $mytext;
        }
    }
    echo "<hr>";
}
    ?>


<div class="box2">
    <div class="mybadge2">
        <img class="myimg" src="logo.png">
        <ul class="mylist ul">
            <li>HTML</li>
            <li>CSS</li>
            <li>Bootstrap</li>
            <li>JavaScript</li>
            <li>JQuery</li>
            <li>Wordpress</li>

        </ul>
        <ul class="mylist2 ul">
            <li>PHP</li>
            <li>SQL</li>
            <li>AWS</li>
            <li>Linux</li>
            <li>Laravel</li>
            <li>API</li>
        </ul>
        <div class="footer">
            <div style="height: 275px"></div>
            <table class="table mytable">
                <tr>
                    <td>
                        <img class="icon" src="wbw.png">
                    </td>
                    <td>
                        my-it-education.us
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="icon" src="email.png">
                    </td>
                    <td>
                        umida@my-it-education.us
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="icon" src="home.png">
                    </td>
                    <td>
                        1868 Burnett Street, Brooklyn, NY 11229
                    </td>
                </tr>
            </table>
        </div>

    </div>
</div>

<style>
    td{
        color: #c3811f;
        font-family: "Times New Roman";
        font-style: inherit;
    }

    td:first-child{
        width:31px;
        padding-right: 8px;
    }

    .mytable td{
        text-align: left;
    }

    .mytable{
        width:100%;
        margin: auto;
    }

    .icon{
        width:30px;
        height: 24px;
        margin-left: 20px;
    }



    .mylist{
        width: 90px;
        float: left;
        margin-left: 100px;
    }
    .mylist2{
        float: left;
    }
    .ul{
        color: #0f2e41;
        size: 40px;
        margin-top: 30px;
    }

    .mybadge2{
        width: 350px;
        height: 500px;
        text-align: center;
        border: 4px solid #c7841f;
        margin-top: 30px;
        margin-left: 200px;
        background-image: url("back1.jpg");
        background-size: 100% 100%;

    }

    .title1{
        font-size: 21px !important;
        color: #003b57 !important;
    }


    .titles{
        font-family: "Times New Roman";
        color: #6e451a;
        text-shadow: 1px 1px #989898;
        width: 100%;
        text-align: center;
        margin: auto;
        position: relative;
        left: 20px;
        font-size: 17px;

    }

    .umi{
        margin-bottom: 10px;
        width: 40%;
        height: 140px;
        border-radius: 120px;
        border: 5px solid #004669;
        box-shadow: 3px 3px 3px 3px #c8821e;
        margin: auto;
        position: relative;
        left: 20px;
    }
    .myimg{
        width: 70%;
        margin-top: 1px;
    }

    .mybadge{
        background-image: url("save2.jpg");
        background-color: #70a5ff;
        background-size: 100% 100%;
        width: 350px;
        height: 500px;
        text-align: center;
        border: 4px solid #c7841f;
    }
    .box{
        margin-left: 30%;
        margin-top: 10%;
    }





</style>

<style>
    span{
        background-color: #c82333;
        color: #e0a800;
        padding: 2px;
        margin: 1px;
    }

    .numbers{
        background-color: #0b2e13;
        color: #f5c6cb;
        padding: 2px;
        margin: 1px;
        border-radius: 90%;
    }




</style>
