<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tax Calculator</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="/js/jquery-3.4.1.min.js" type="text/javascript"></script>
</head>
<body>
<div>
    <div class="container">
        <h3>Tax Calculator</h3>
        <div class="tax">
            <form class="form-group" id="myform">
                <p>
                    <input id="salary" required="required" class="form-group" name="income" type="number" placeholder="Household income amount">
                    <select>
                        <option value="1">Single</option>
                        <option value="2">Married</option>
                    </select>
                    <button>Calculate</button>
                </p>
            </form>

        </div>
        <div id="result">
            <table class="table-responsive table-bordered">
                <tr>
                <td>Salary</td>
                <td id="salary_output"</td>
                </tr>

                <tr>
                <td>Federal tax</td>
                <td id="federal_output"</td>
                </tr>

                <tr>
                <td>State tax</td>
                <td id="state_output"</td>
                </tr>

                <tr>
                <td>Local tax</td>
                <td id="local_output"</td>
                </tr>

                <tr>
                <td>Net Income</td>
                <td id="takehome_output"</td>
                </tr>

            </table>
        </div>
    </div>
</div>
<style>
 tr:last-child{
 background-color: #ff0000;
}

 #result td{
     padding-right: 200px;

 }

    #result{
        border-radius: 10px;
        background-color: #6ae4ea;
        padding: 5px;
        margin: 5px;

    }
    .tax{
        background-color: #e6e6e6;
        border-radius: 10px;
        padding: 5px;
        margin: 5px;
    }

</style>
<script>

    $("#myform").submit(function () {
        calculate();
        return false;

    });

    function calculate() {



        var salary = $("#salary").val();



        var federal = salary * 8.875 / 100;
        var state = salary * 7.02 / 100;
        var local = salary * 1.2 / 100;
        var income_after_tax = salary - federal - state - local;

        federal = Math.round(federal);
        state = Math.round(state);
        local = Math.round(local);
        income_after_tax = Math.round(income_after_tax);

        var output = "Salary: $"+salary; +"<hr>";
        output += "Federal: $"+federal +" <hr>";
        output += "State: $"+state +" <hr>";
        output += "local: $"+local +" <hr>";
        output += "Take home: $"+income_after_tax +" <hr>";


        $("#salary_output").html(" $  "+salary);
        $("#federal_output").html(" $  "+federal);
        $("#state_output").html(" $  "+state);
        $("#local_output").html(" $  "+local);
        $("#takehome_output").html(" $  "+income_after_tax);

    }


</script>









</body>
</html>
