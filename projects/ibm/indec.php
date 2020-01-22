 <?php
//echo "Hello everyone!!!";

//print ("Hello my friend");
//$name = 'Nigora';
//$age = 8;
//$location = 'Brooklyn';
  //echo "My name is $name and I am $age years old and I live in $location";

$names = ['Jon', 'Rustam', 'Abdulbari', 'Umida', 'Asror'];
$ages = [23,34,55,25,23];
$location = ['New York', 'New Jersey', 'Moscow', 'Tashkent', 'Tokio'];

foreach ($names as $i=>$name) {
    echo "My name is <span>$name</span>span> and I am <span>$ages[$i]</span> years old and I live in <span>$location[$i]<br></span>> ";
    if ($ages[$i] > 45) {
        echo "< -- AARP member";
    }
    echo "<hr>";
}
?>

<style>


    span{
        background-color: #42c7ff;
        padding:5px;
        margin: 2px;
        border-radius: 10px;
    }

    body{
        background-color: #a51010;
        color: #fffe4e;
        font-size: 30px;
    }

</style>
