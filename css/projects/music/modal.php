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
        $this->db = new database();
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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="songs">
                    <table class="table table-bordered songstable">
                        <tr>
                            <td>ID</td>
                            <td>Song Name</td>
                            <td>Lyrics</td>
                        </tr>

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

                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
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