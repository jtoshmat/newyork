<?php
namespace Edu;

class Meeting{
    public $parms;
    public function __construct()
    {
        $this->parms = $_POST;
    }


    public function __destruct()
    {
        foreach ($this->parms as $fiel=>$parm){
            echo "<pre>";
            print_r($this->parms[$fiel]);
            echo "<hr>";
        }

    }
}

$party = new Meeting();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meeting guests</title>
    <link rel="stylesheet" href="../../../../css/bootstrap.css">
</head>
<body>
<div>
    <h1>Meeting guests</h1>
</div>
<div>
    <form class="form-group" method="post" action="guests.php">
        <p>Meeting Guests:
            <select class="option" multiple="multiple" name="meeting_guests[]" id="">
                <optgroup label="Law enforcement agencies">
                    <option value="prosecutor">Prosecutor</option>
                    <option value="police">Police chief</option>
                    <option value="security">Head of Security department</option>
                    <option value="lawyer">Lawyer</option>
                </optgroup>

                <optgroup label="Head of organizations">
                    <option value="irs">IRS</option>
                    <option value="finance">Finance</option>
                    <option value="culture">Culture</option>
                    <option value="public_edu">Public education</option>
                    <option value="youth_union">Youth union</option>
                </optgroup>

                <optgroup label="Mayor's office">
                    <option value="mayor">Mayor</option>
                    <option value="per_dep">Personnel department</option>
                    <option value="accountant">Accountant</option>
                </optgroup>
            </select>
        </p>
        <p>Guests reports:
            <select name="reports" id="">
                <option value="">Select</option>
                <option value="reports">Report</option>
                <option value="with_rep">Without report</option>
            </select>
        </p>

        <p>
            Arrival time:<br>
            <input type="radio" name="arr_time" value="10">04:00 PM<br>
            <input type="radio" name="arr_time" value="10">04:10 PM<br>
            <input type="radio" name="arr_time" value="10">04:20 PM<br>
            <input type="radio" name="arr_time" value="10">04:30 PM<br>
        </p>


        <p>
            <button class="btn btn-success" type="submit">Submit</button>
        </p>
    </form>


    <style>
        h1{
            text-align: center;
        }
        .option {
            font-family: initial;
            color: #8a101b;
            background-color: #00ffdb5c;
            height: 324px;
            width: 249px;
        }

    </style>
</div>
</body>
</html>