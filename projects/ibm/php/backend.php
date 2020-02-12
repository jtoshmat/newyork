<?php
namespace IBM;
use Database\database;
include_once '../../../inc/database.php';
class Contactform{
    private $db;
    public $parms;
    public function __construct()
    {
        $this->db = new database();
        $this->parms = $_POST;
    }
    public function saveContactForm(){

        $first_name = $this->parms['first_name']??null;
        $last_name = $this->parms['last_name']??null;
        $age = $this->parms['age']??null;
        $email = $this->parms['email']??null;
        $member = $this->parms['member']??1;
        $message = $this->parms['message']??null;
        $sql = "INSERT INTO contacts (first_name, last_name, age, email, member, message) VALUES ('$first_name','$last_name',$age,'$email','$member','$message');";
        $execute = $this->db->sql($sql);
        return "Thank you for contacting us. We did receive your message.";
    }

    public function listContacts(){
        $sql = "SELECT * FROM contacts order by id desc";
        return $this->db->sql($sql);
    }

}
$form = new Contactform();
$form->saveContactForm();
$contacts = $form->listContacts();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
</head>
<body>
<div class="container-fluid">
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Email</th>
            <th>Memeber</th>
            <th>Message</th>
        </tr>

        <?php
            foreach ($contacts as $contact) {
                ?>
                <tr>
                    <td><?=$contact['id']?></td>
                    <td><?=$contact['first_name']?></td>
                    <td><?=$contact['last_name']?></td>
                    <td><?=$contact['age']?></td>
                    <td><?=$contact['email']?></td>
                    <td><?=$contact['member']?></td>
                    <td><?=$contact['message']?></td>
                </tr>
                <?php
            }
        ?>
    </table>
</div>

<div class="footer">
    <a class="btn btn-success" href="index.php">Back To Form</a>
</div>

<style>
    .footer{
        height: 100px;
        background-color: #4b0019;
        color: yellow;
        text-align: center;

        padding:20px;
        margin: 10px;

    }

    th {
        background-color: dodgerblue;
        color: #4b0019;
        font-weight: bolder;
    }
</style>

</body>
</html>


