<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REGEX</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container-fluid">

    <?php
        $ssn = null;
        $error = null;

        if (isset($_POST['ssn'])){
            $ssn = $_POST['ssn'];

            //123-34-5678
            //123-3455
            $found = preg_match("#[0-9]{3}-[0-9]{4}#", $ssn);

            if (!$found){
                $error = "Your SSN does not match";
            }
        }

        if ($error){
            echo $error;
        }


    ?>


    <form method="post">
        <p><h1>Regex Validation</h1></p>
        <p>SSN: <input name="ssn" value="<?=$ssn?>" type="text" placeholder="123-34-5678"></p>
        <p><button>Submit</button></p>
    </form>
</div>
</body>
</html>