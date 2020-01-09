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
        <h1>My Classmates</h1>
    </div>
    <script>


        var fri = ['Asror', 'Oybek', 'Muhammadjon', 'Dilafruz', 'Abdulbari', 'Parvina'];
        for(var i=0; i<fri.length; i++){

            if (fri[i] == 'Parvina'){
                document.write("<hr> WOHOO, MY THE BEST CLASMATE!!! <hr>");
            }
            document.write(fri[i]);
            document.write("<hr>");
        }
    </script>
</body>
</html>