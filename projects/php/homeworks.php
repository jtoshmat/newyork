<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP exercises</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="container">

    <?php
    if (isset($_SESSION['newyork']['error'])) {
        ?>
        <hr>
        <div class="alert alert-<?=$_SESSION['newyork']['errortype']?>"><?=$_SESSION['newyork']['error']?></div>
        <hr>
        <?php
    }
    ?>


    <form method="post" action="submit_my_homeworks.php">
        <div id="loginform">
            <table>

                <tr>
                    <td colspan="2"><h4>Members Login Form</h4></td>
                </tr>

                <tr>
                    <td>Username: </td>
                    <td><input value="jon@jon.com" name="email" type="email" placeholder="Your email address"></td>
                </tr>

                <tr>
                    <td>Password: </td>
                    <td><input name="password" type="password" placeholder="Your Password"></td>
                </tr>


                <tr>
                    <td colspan="2">
                        <button type="reset">Start Over</button>
                        <button type="submit">Login</button>
                    </td>
                </tr>

            </table>
        </div>
    </form>

    <style>

        #loginform{
            width:100%;
            margin: auto;
            background-color: #6f000a;
        }

        table{
            width:100%;
            height: 300px;
            border-radius: 15px;
            box-shadow: #0f6674 5px 5px 5px 5px;
        }

        tr:first-child td{
            text-align: center;
        }
        tr:last-child td{
            text-align: center;
        }

        td:first-child{
            text-align: right;
            padding-right: 10px;
        }
        td{
            color: #ffe14a;
        }
    </style>

</div>

<?php
unset($_SESSION['newyork']);
?>

</body>
</html>