<?php
include_once '../inc/database.php';

$db = new \Database\database();

$country_code = $_GET['country']??'UZ';
$keyw = $_GET['keyword']??null;

if ($keyw){
 $airports = $db->sql("select * from airports where country like '%$keyw%' order by country asc");
}else {
    $airports = $db->sql("select * from airports where country_abbr='" . $country_code . "'");
}
?>

<style>
    #countries{
        margin: auto;
        width:60%;
    }
    #countries table{
        width:100%;
        border:1px solid #000;
        background-color: #fffdf5;
    }

    #countries tr:first-child{
        background-color: #005cbf;
        color:#fff;
    }

    #countries td{
        border:1px solid #d7d7d7;
        marging:3px;
        padding:2px;
    }

</style>




<div id="countries">

    <h4>Search airports</h4>
    <form method="get">
        <p>
            Search: <input name="keyword" value="" placeholder="Your Keyword">
            <input type="submit" value="Search">
        </p>
    </form>

    <hr>

    <a href="/dilya/myphp.php?country=UZ">Uzbekistan</a> |
    <a href="/dilya/myphp.php?country=US">USA</a> |
    <a href="/dilya/myphp.php?country=RU">Russia</a>

    <hr>

    <table>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>City</td>
            <td>Country</td>
        </tr>

        <?php
            foreach ($airports as $num=>$airport) {
                ?>
                <tr>
                    <td><?=$airport['id']?></td>
                    <td><?=$airport['name']?></td>
                    <td><?=$airport['city']?></td>
                    <td><?=$airport['country']?></td>
                </tr>

                <?php
            }
        ?>

    </table>
</div>



