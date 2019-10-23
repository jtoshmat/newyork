<?php
namespace Music;

use Database\database;

include_once '../inc/database.php';

class Artists
{
    private $db;
    public $results;
    public $parms;
<<<<<<< HEAD
=======
    public $albumids;
    public $songs;
>>>>>>> 43d504fb141c9bb0874367dd0c89d5d89793aa0e

    public function __construct()
    {
        $this->db = new database('songs');
        $this->parms = $_GET;

    }

    public function getArtists()
    {
        $keyword = $this->parms['keyword']??null;
        $artists = $this->db->sql("SELECT * FROM artists where artist_name like '%".$keyword."%'");
        return $artists;
    }

    public function getAlbums()
    {
        $albums = $this->db->sql("SELECT * FROM albums order by AlbumId desc");
        $myalbums = [];
<<<<<<< HEAD
        $album_ids = [];
        foreach ($albums as $num=>$album) {
            $album_ids[] = $album['AlbumId'];
=======
        foreach ($albums as $num=>$album) {
            $this->albumids[] = $album['AlbumId'];
>>>>>>> 43d504fb141c9bb0874367dd0c89d5d89793aa0e
            $myalbums[$album['ArtistId']][] = [
                'id' => $album['AlbumId'],
                'album' => $album['album_name'],
            ];
        }
<<<<<<< HEAD

        return $this->db->sql("SELECT * FROM song where albumId in (103,105)");

        return $myalbums;
    }

    public function getSongs($albumid)
    {
        return $this->db->sql("SELECT * FROM songs where albumId=".$albumid);
=======
        return $myalbums;
    }

    public function getSongs()
    {
        $ids = array_values($this->albumids);
        $ids = implode(',',$ids);
        $songs = $this->db->sql("select * from songs where albumId in ($ids);");
        foreach ($songs as $id=>$song){
            $this->songs[$song['albumId']][] = $song;
        }
>>>>>>> 43d504fb141c9bb0874367dd0c89d5d89793aa0e
    }

}

$obj = new Artists();
$artists = $obj->getArtists();
$albums = $obj->getAlbums();
<<<<<<< HEAD
echo "<pre>";
var_dump($albums);
exit;

=======
$obj->getSongs();
>>>>>>> 43d504fb141c9bb0874367dd0c89d5d89793aa0e
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Top Songs Artists</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>

<<<<<<< HEAD
<div id="mymodal"></div>
=======
<div id="mymodal">
    <?php
    if (isset($_GET['albumid'])) {
        $albumid = (int)$_GET['albumid'] ?? null;
        include_once 'modal.php';
    }
    ?>
</div>
>>>>>>> 43d504fb141c9bb0874367dd0c89d5d89793aa0e

<div class="container-fluid">
    <h3 style="text-align: center">Songs Artists</h3>


    <div class="mysearch">
        <form>
            <p>Search: <input value="<?=$obj->parms['keyword']??NULL?>" name="keyword" type="text">
                By: <select name="searchBY">
                    <option value="artist">Artist Name</option>
                    <option value="album">Album Name</option>
                </select>
            <button>Search</button>
            </p>
        </form>
    </div>
    <table class="table table-bordered mytable1">
        <tr>
            <td>ID</td>
            <td>Artist Name</td>
        </tr>

        <?php
        foreach ($artists as $id => $artist) {
            ?>
            <tr class="myrows" data-num="<?= $id ?>">
                <td class="my_left_td">
                    <div class="rowid"><?= $artist['ArtistId'] ?></div>
                </td>
                <td><?= $artist['artist_name'] ?></td>
            </tr>
            <div>
                <tr class="myrows2" id="myrows2_<?= $id ?>">
                    <td colspan="2">
                        <table class="table table-bordered mytable2">
                            <tr>
                                <td>ID</td>
                                <td>Album Name</td>
                            </tr>
                            <?php
                            $albomlarim = $albums[$artist['ArtistId']];

                            foreach ($albomlarim as $myalbums) {

                                    ?>
                                    <tr>
                                        <td><?=$myalbums['id'];?></td>
                                        <td>
                                            <!-- Button trigger modal -->
<<<<<<< HEAD
                                            <a data-target="<?=$myalbums['id']?>" data-albumid="<?=$myalbums['id']?>" data-toggle="modal" data-target="#exampleModalLong"><?=$myalbums['album'];?></a>
=======
                                            <a href="/music/?albumid=<?=$myalbums['id']?>"><?=$myalbums['album'];?></a>
>>>>>>> 43d504fb141c9bb0874367dd0c89d5d89793aa0e
                                        </td>
                                    </tr>
                                    <?php
                            }
                            ?>

                        </table>
            </div>
            </tr>
            <?php
        }
        ?>


    </table>

</div>

<style>
    .mytable1 tr:first-child {
        background-color: #12103e;
        color: #ffd04e;
    }

    .myrows2 {
        display: none;
    }

    tr:nth-child(even) td {
        background-color: #e4edff;
        color: #41060b;
    }

    tr:hover {
        cursor: pointer;
    }

    .rowid {
        background-color: black;
        color: white;
        border-radius: 10px;
        padding: 5px;
        margin: 5px;
        width: 50px;
        text-align: center;
    }

    .my_left_td {
        width: 100px;
    }

    .mysearch{
        text-align: center;
    }


</style>

<script>
    $(function () {
        $(".myrows").click(function () {
            var id = $(this).attr('data-num');
            $("#myrows2_" + id).toggle();

        });

            $('[data-albumid]').click(function(){
                var albumid = $(this).data('albumid');
                alert("ALbum ID: "+albumid);
            });
    })
</script>

</body>
</html>


