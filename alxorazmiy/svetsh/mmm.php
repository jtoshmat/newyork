<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>


<?php
$bool = true;
if ($bool) {
    $hi = 'Hello to all people!';
}
echo $hi;
?>

It will print 'Hello to all people!'

On the other hand, this will have no output:

<?php
if (false) {
    $hi = 'Hello to all people!';
}
echo $hi;
?>




exit;
<? php
$city = $_GET ['city']??'Samarqand';
switch ($city){
case: 'Samarqand':
$img = 'http://reversehomesickness.com/wp-content/uploads/2014/02/palaces-uzbekistan.jpgg';
break;
case 'Khorezm':
$img = 'https://d17nhi816jf02p.cloudfront.net/wp-content/uploads/2016/11/2-ancient-khiva-silk-road-Uzbekistan.jpg';
break;
case 'Tashkent':
$img = 'https://i.ytimg.com/vi/SEeOPCGL8eA/maxresdefault.jpg';
break;
default:
$img = 'https://i.ytimg.com/vi/SEeOPCGL8eA/maxresdefault.jpg';
break;
?>
<h3>Welcome to the Ozbekistan</h3>


<nav>
    <a href="mmm.php?img=1">image 1</a>
    <a href="mmm.php?img=2">image 2</a>
    <a href="mmm.php?img=3">image 3</a>
</nav>


<img class="myimg" src="<?=$img?>">;

<style>

.myimg{
    width: 90%;
    height: 600px;
}

</style>
</div>

</body>
</html>
