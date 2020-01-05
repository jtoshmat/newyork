<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="container-fluid">
    <h1>Welcome to My Javascript Class!</h1>

</div>

<script>

   for (var i = 0; i<1000; i++){

       if (i%2==0){
           document.write("EVEN NUMBER ---> ");
       }else{
           document.write("ODD NUMBER ---> ");
       }


       document.write(i);
       document.write("<hr>");
   }

</script>

<style>
    .myalfa{
        background-color: darkblue;
        color: #ffde3e;
        border:1px solid black;
        padding:3px;
        margin:2px;
    }

    .myaudi{
        background-color: #ff2450;
        color: #ffdb49;
        border:1px solid black;
        padding:3px;
        margin:2px;
    }
</style>

</body>
</html>