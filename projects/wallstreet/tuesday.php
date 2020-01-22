<?php
namespace Wallstreet;
use Database\database;

include_once "../inc/database.php";
class WorldNews{
    protected $db;
    public function __construct()
    {
        $this->db = new database();
    }

    public function displayWordlNews(){
        $newsitems = [];
        $sql = "SELECT source_name FROM world_news group by source_name order by source_name asc";
        $sources = $this->db->sql($sql);

        $sql = "SELECT * FROM world_news  order by id desc";
        $sourcesnews = $this->db->sql($sql);

        foreach ($sourcesnews as $sourcesnew){
            $newsitems[$sourcesnew['source_name']][] = $sourcesnew['title'];
        }

        return  $newsitems;
    }

}

$obj = new WorldNews();
$channels = $obj->displayWordlNews();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>World News</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="container-fluid">
<div class="news">

    <?php
    foreach ($channels as $id=>$channel) {
        ?>
        <div class="newschannel">
            <?=$id?> <span class="totalcount">(<?=count($channel)?>)</span>
        </div>
        <?php
    }
    ?>


</div>
</div>

<style>
    .totalcount{
        background-color: red;
        color:yellow;
        padding:5px;
    }
    .newschannel{
        width:100px;
        height:100px;
        background-color: #217eff;
        border:1px solid black;
        float: left;
        margin: 20px;
        color: #ffcb3c;
    }
</style>

</body>
</html>