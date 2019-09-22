<?php
//All Data Types:
//Strings - WIP
//Integers
//Booleans
//Constants
//Arrays
//NULL
//Objects
//Resources

$largetext = "Rackham. Lorem @ Ipsum
\"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\"
\"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\"
What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


Where does it come from?
Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.";

$mytext = "<div>My txt blah blah</div>";

//$newtext = str_ireplace('Lorem Ipsum','<span>Samarkand</span>', $largetext); always
//echo substr($largetext,200, 255); always
//echo strtolower($largetext); always
//echo strtoupper($largetext); - always
//echo str_word_count($largetext); - always
//echo strrev($largetext); - not often
//echo wordwrap($largetext, 30, "<br>");
//echo trim($largetext,'Rackham.');
/*
$mytext = trim($mytext,'<div>');
$mytext = trim($mytext,'</div>');
echo $mytext;*/
//$email = $_GET['email']??null;
//$email = $_POST['email']??null;
//$email = explode('@', 'jontoshmatov@yahoo.com');
//echo $email[0]; //username
//echo $email[1]; //domain
/*$cars = ['BMW','Mercedes','Acura','Lexus'];
$newcars = implode(', ', $cars);
echo $newcars;*/
//$email = 'jontoshmatov';
//echo chunk_split($email,6);

/*$email = 'jontoshmatov"@"yahoo.com';
echo htmlspecialchars($email,ENT_QUOTES);
echo "\n";
echo $email;*/
$text = "<div>alert('HOWDY, I am javascript!');</div>";
$text = strip_tags($text);
echo $text;
?>

<br>

<form method="post">
    <p>
        Email: <input name="email" type="email">
    </p>
    <p><button type="submit">Submit</button></p>

</form>


<style>

    .mybreak{
        background-color: #8adc2c;
        color: #ffe53d;
        margin:3px;
        padding:3px;
        border:1px solid #dde7ee;
        border-radius: 10px;
        box-shadow: #f2f2f2 2px 2px 2px 2px;
    }

</style>

