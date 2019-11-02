<?php
/*$cars = [["Volvo",22,18],["BMW",15,13],["Saab",5,2],["Land Rover",17,15]];

   for($row=0;$row<4;$row++){
       echo "<p><b>Row number $row</b></p>";
           echo "<ul>";
           for($col=0;$col<3;$col++){
               echo "<li>".$cars[$row][$col]."</li>";}
           echo "</ul>";}
*/
?>
<input id="age" value="18">
<input id="dem" type="text" name='textview'>
<p id="demo"></p>
<button type="button" onclick="demo()">Show</button>
<button type="button" onclick='document.getElementById("demo").innerHTML=""'>Hide</button>
<script>
    function myFunction() {


var age,variable;
    age = Number(document.getElementById("age").value);
if(isNaN(age)){ variable = "Input is not a number";
    document.getElementById("dem").value=variable;}
else{ variable = (age<18) ? "to yong": "old enough";
    document.getElementById("dem").value=variable;}
 }
    car="Hello"



function demo(){document.getElementById("demo").innerHTML=car;}

</script>
