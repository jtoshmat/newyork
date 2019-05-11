<?php
    namespace Flights;
    if ($_SERVER['REQUEST_METHOD'] != 'POST'){
        exit("This is an invalid request");
    }
    $parms = [];
    $parms['trip'] = $_POST['trip']??'round';
    $parms['quantity'] = $_POST['quantity']??1;
    $parms['class'] = $_POST['class']??'economy';
    $parms['from_city'] = $_POST['from_city']??'JFK';
    $parms['to_city'] = $_POST['to_city']??'SFB';
    $parms['partners'] = $_POST['partners']??[];
    $parms['fromdate'] = $_POST['fromdate']??date('Y-m-d');
    $parms['todate'] = $_POST['todate']??date('Y-m-d', strtotime('tomorrow'));


    if (!isset($parms['partners'][0])){
        $parms['partners'][0] = 'expedia';
    }


    include_once 'api.php';
    $api = new Api();
    $api->setPartner($parms['partners']);
    $flights = $api->search($parms);


    //echo "<pre>";
    //var_dump($flights);

    //exit;

?>



<form>
    <table>
        <tr>
            <td>From City</td>
            <td>To City</td>
            <td>Class</td>
            <td>Logo</td>
            <td>Fare</td>
            <td>Action</td>
        </tr>


        <?php


            echo "<pre>";

            foreach ($flights as $partner=>$flight) {


            foreach ($flight as $f) {


                ?>

                <tr>
                    <td><?= $f['from_city'] ?></td>
                    <td><?= $f['to_city'] ?></td>
                    <td><?= $f['class'] ?></td>
                    <td><img width="250px" height="100px" src="<?= $f['logo'] ?>"></td>
                    <td>$<?= $f['price'] ?></td>
                    <td><input type="checkbox"></td>
                </tr>


                <?php
                    }
                }
            ?>




        <tr>
            <td colspan="6"><input type="submit" value="DO WHATEVER"></td>
        </tr>

    </table>
</form>





<style>


    table{
        width: 300px;
        height: 250px;
        background-color: #005cbf;
    }


    table td{
        padding:10px;

        background-color: #fff;
    }


</style>










