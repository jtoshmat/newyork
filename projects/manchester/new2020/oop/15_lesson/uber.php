<?php
namespace UberLLC;
class Uber
{
    public function accept_job()
    {
        echo "1-step: You accepted new request";
        echo "<hr>";
        $status = $this->pickup_client();

        if ($status['error']) {
            return [
                'error' => false,
                'code' => 200,
                'msg' => $status['msg']
            ];
        } else {
            return [
                'error' => true,
                'code' => 500,
                'msg' => $status['msg']
            ];
        }
    }
    public function pickup_client()
    {
        echo "2-step: Pick up passenger";
        echo "<hr>";
        $status = $this->drive_safe();
        if ($status['error']) {
            return [
                'error' => false,
                'code' => 200,
                'msg' => $status['msg']
            ];
        } else {
            return [
                'error' => true,
                'code' => 500,
                'msg' => $status['msg']
            ];
        }
    }
    public function drive_safe()
    {
        echo "3-step: Drive safety";
        echo "<hr>";
        $status = $this->drop_off_client();
        if ($status['error']) {
            return [
                'error' => false,
                'code' => 200,
                'msg' => $status['msg']
            ];
        } else {
            return [
                'error' => true,
                'code' => 500,
                'msg' => $status['msg']
            ];
        }
    }
    public function drop_off_client()
    {
        echo "4-step: Drop off passenger";
        echo "<hr>";
        $status = $this->rating_client();
        if ($status['error']) {
            return [
                'error' => false,
                'code' => 200,
                'msg' => $status['msg']
            ];
        } else {
            return [
                'error' => true,
                'code' => 500,
                'msg' => $status['msg']
            ];
        }
    }
    public function rating_client()
    {
        echo "5-step: Rate the passenger";
        echo "<hr>";
        $status = $this->earn_money();
        if ($status['error']) {
            return [
                'error' => false,
                'code' => 200,
                'msg' => $status['msg']
            ];
        } else {
            return [
                'error' => true,
                'code' => 500,
                'msg' => $status['msg']
            ];
        }
    }
    public function earn_money()
    {
        echo "6-step: How much earn you after this trip";
        echo "<hr>";
        $status = $this->go_home();
        if ($status['error']) {
            return [
                'error' => false,
                'code' => 200,
                'msg' => $status['msg']
            ];
        } else {
            return [
                'error' => true,
                'code' => 500,
                'msg' => $status['msg']
            ];
        }
    }
    public function go_home()
    {
        echo "7-step: After finish last trip go to home";
        echo "<hr>";
        return [
            'error' => true,
            'code' => 500,
            //'msg' => 'REPORT: Today your rating is poor'
            'msg' => 'GOOD JOB: Congratulation. Good luck.'
        ];
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../../../css/bootstrap.css">
</head>
<body>

<?php
$result = new \UberLLC\Uber();
$status = $result->accept_job();

if (!$status['error']) {
    echo "<div class='alert alert-danger'>".$status['msg']."</div>";
} else {
    echo "<div class='alert alert-success'>".$status['msg']."</div>";
}
?>
</body>
</html>





