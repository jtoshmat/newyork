<?php
namespace Portfolio;
use Database\database;

include_once "../database.php";
class UzChat
{
    public $parms;
    private $db;
    public function __construct()
    {
        $this->parms = $_POST;
        $this->db = new database();
    }

    public function fetchChats(){
        $userid = (int) $this->parms['userid'];
        $sql = "SELECT * FROM users WHERE id = $userid";
        return $this->db->sql($sql);
    }
}
$obj = new UzChat();
$profiles = $obj->fetchChats();
echo "<pre>";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat texts</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>

<div>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Photo</th>
        </tr>
        <?php foreach ($profiles as $field=>$profile):?>
        <tr>
            <td><?=print_r($field)?></td>
            <td><?=$profile['name']?></td>
            <td><?=$profile['email']?></td>
            <td><img src="<?=$profile['avatar']?>"></td>
        </tr>
        <?php
            endforeach;
        ?>

    </table>
</div>

</body>
</html>

