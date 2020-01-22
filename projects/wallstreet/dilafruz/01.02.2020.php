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
     <h1> Cafe bar</h1>

 </div>
 <script>

     var drinks = ['Cocacola','Fanta','Pepsi','Pepsi diet','Coffee','Hot water'];
     for(var i=0; i<drinks.length; i++){
         document.write(drinks[i]);
         document.write("<hr>");

     }

     function getPepsi {
         return document.getElementById("Pepsi my favorite drink").innerText;

     }

     </script>
</body>
</html>
