<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/html/myformstyle.css" rel="stylesheet">
    <script src="/js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="myscripts.js" type="text/javascript"></script>
</head>
<body>
<?php
$parms = $_POST;
foreach($parms as $field=>$parm){
    echo $field.' = '.$parm."<hr>";
}
?>
<div class="container joncontainer">
<div id="formdiv">
 <form id="myform" method="post">
     <fieldset>

         <legend>Registration Details</legend>
         <div class="myrow">
             <div class="leftcol">
                 University: </div>
             <div class="rightcol">
                 <input data-row="1" required="required" class="input-group myinputs inp1" name="university" type="email" placeholder="Your University">
             </div>
         </div>
         <div class="myrow">
             <div class="leftcol">Institute: </div>
             <div class="rightcol">
                 <input id="jon" data-row="2" required="required" class="input-group myinputs inp2" name="institute" type="text" placeholder="Your Institute">
             </div>
         </div>
         <div class="myrow">
             <div class="leftcol">Branch: </div>
             <div class="rightcol">
                 <select data-row="3" name="branch" class="input-group-sm inp3">
                     <option value=""> -- Select --</option>
                     <option value="Tashkent"> Tashkent </option>
                     <option value="Moscow"> Moscow </option>
                 </select>
             </div>
         </div>
         <div class="clearfix"></div>
         <div class="myrow">
             <div class="leftcol">Degree: </div>
             <div class="rightcol">
                 <select data-row="4" name="degree" class="input-group-sm inp4">
                     <option value=""> -- Select --</option>
                     <option value="Tashkent"> AA </option>
                     <option value="Tashkent"> BA </option>
                     <option value="Moscow"> MA </option>
                     <option value="Moscow"> PhD </option>
                     <option value="Moscow"> CERT </option>
                 </select>
                 <div class="rightcolinside">

                     <div class="groupleft">
                         <input type="radio" value="p" name="status"><label>Pursuing</label>
                     </div>

                     <div class="groupright">
                        <input type="radio" value="c" name="status"><label>Completed</label>
                     </div>


                 </div>
             </div>
         </div>
         <div class="myrow">
             <div class="leftcol">Average CPI: </div>
             <div class="rightcol">
                 <select data-row="5" name="average" class="input-group-sm inp5">
                     <option value=""></option>
                     <option value="Tashkent"> Tashkent </option>
                     <option value="Moscow"> Moscow </option>
                 </select>
                 Upto
                 <select data-row="6" name="average2" class="input-group-sm inp6">
                     <option value=""></option>
                     <option value="Tashkent"> Tashkent </option>
                     <option value="Moscow"> Moscow </option>
                 </select>
                 Th Semester
             </div>
         </div>
         <div class="myrow mybuttons">
                 <input class="btn btn-light" value="Reset" type="reset">
                 <input class="btn btn-primary" value="Submit" type="submit">
         </div>
     </fieldset>
 </form>
</div>
</div>

</body>
</html>