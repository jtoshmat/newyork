<<<<<<< HEAD
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title: <?=$myalbums['id']?></h5>
=======
<?php
namespace Music;

use Database\database;

include_once '../inc/database.php';

class Songs
{
    private $db;
    public $parms;


    public function __construct()
    {
        $this->db = new database('songs');
        $this->parms = $_GET;

    }


    public function getSongs()
    {
        $albumid = (int) $this->parms['albumid'];
       return $this->db->sql("select * from songs where albumId = $albumid;");

    }

}

$obj = new Songs();
$songs = $obj->getSongs();
?>
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title: <?=$albumid?></h5>
>>>>>>> 43d504fb141c9bb0874367dd0c89d5d89793aa0e
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="songs">
<<<<<<< HEAD
                    <table class="table table-bordered">
                        <tr>
                            <td>ID</td>
                            <td>Song Name</td>
                            <td>Lyrics</td>
                        </tr>

=======
                    <table class="table table-bordered songstable">
>>>>>>> 43d504fb141c9bb0874367dd0c89d5d89793aa0e
                        <tr>
                            <td>ID</td>
                            <td>Song Name</td>
                            <td>Lyrics</td>
                        </tr>

<<<<<<< HEAD
                        <tr>
                            <td>ID</td>
                            <td>Song Name</td>
                            <td>Lyrics</td>
                        </tr>

                        <tr>
                            <td>ID</td>
                            <td>Song Name</td>
                            <td>Lyrics</td>
                        </tr>
=======
                        <?php
                        foreach ($songs as $song) {
                            ?>
                            <tr>
                                <td><?=$song['songId']?></td>
                                <td><?=$song['name']?></td>
                                <td>
                                    <textarea class="lyricstd"><?=$song['lyrics']?></textarea>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>

>>>>>>> 43d504fb141c9bb0874367dd0c89d5d89793aa0e
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
<<<<<<< HEAD
</div>
=======
</div>
<style>
    .lyricstd{
        width:250px;
        height:150px;
    }
</style>

<script>
    $("#exampleModalLong").modal("show");
</script>
>>>>>>> 43d504fb141c9bb0874367dd0c89d5d89793aa0e
