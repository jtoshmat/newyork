<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>converter</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="/js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script>
        $(function () {

            $(".btn").click(function () {
                var select1 = $(".select1").val();
                var view1 = $(".textview1").val();
                var sel2 = $(".select2").val();
                var sel3 =$(".select3").val();



                if (select1 === 'Length' && sel2==='Mile'&& sel3 === 'Kilometer'){var view2 = view1 * 1.609;}
                $(".textview2").val(view2);
                if (select1 === 'Length' && sel2 === 'Kilometer' && sel3 === 'Mile'){var view2 = view1/1.609;}
                $(".textview2").val(view2);
                if (select1 === 'Length' && sel2 === 'Kilometer' && sel3 === 'Kilometer'){var view2 = view1;}
                $(".textview2").val(view2);
                if (select1 === 'Length' && sel2 === 'Mile' && sel3 === 'Mile'){var view2 = view1;}
                $(".textview2").val(view2);
                if (select1 === 'Temperature' && sel2==='Celcius'&& sel3 === 'Celcius'){var view2 = view1;}
                $(".textview2").val(view2);
                if (select1 === 'Temperature' && sel2==='Celcius'&& sel3 === 'Fahrenheit'){var view2 = (view1*9/5)+32;}
                $(".textview2").val(view2);
                if (select1 === 'Temperature' && sel2==='Fahrenheit'&& sel3 === 'Celcius'){var view2 = (view1-32)*5/9;}
                $(".textview2").val(view2);
                if (select1 === 'Temperature' && sel2==='Fahrenheit'&& sel3 === 'Fahrenheit'){var view2 = view1;}
                $(".textview2").val(view2);


        });
            $(".select1").change(function() {
                var op1 = $(".select1").val();

                if (op1 == 'Temperature'){ $(".mil").hide(); $(".km").hide();$(".cel").show(); $(".far").show();};
                if (op1 == 'Length'){$(".cel").hide(); $(".far").hide();$(".mil").show(); $(".km").show();};


            });

        });

    </script>
</head>
<body>
<div class="div">
    <select class="select1">
        <option> Select </option>
        <option id="temp">Temperature</option>
        <option id="leng">Length</option>
    </select>
    <input class="textview1" placeholder="Input Number" type="number">

    <select class="select2">
        <option> Select </option>
        <option class="mil">Mile</option>
        <option class="km">Kilometer</option>
        <option class="cel">Celcius</option>
        <option class="far">Fahrenheit</option>
    </select>
    <input class="textview2" placeholder="Result" >
    <select class="select3">
        <option> Select </option>
        <option class="mil">Mile</option>
        <option class="km">Kilometer</option>
        <option class="cel">Celcius</option>
        <option class="far">Fahrenheit</option>
    </select>
    <button class="btn">Execute</button>

</div>

</body>
<style>
    .div{
        background:linear-gradient(to right,green,blue,yellow,red);
        width: 300px;
        height:300px;
        margin-top:100px;
        margin-left:200px;
    }
    .select1{
        width:280px;
        height:50px;
        font-size:25px;
        margin:10px;

    }
    .textview1{
        width:130px;
        height:30px;
        margin:10px;
        font-size:18px;
    }
    .textview2{
        width:130px;
        height:30px;
        margin:10px;
        font-size:18px;
    }
    .select2{
        width:120px;
        height:30px;
        margin:10px;
        font-size:18px;
        margin-left:15px;
    }
    .select3{
        width:120px;
        height:30px;
        margin:10px;
        font-size:18px;
        margin-left:15px;
    }
    .btn{
        background-color:white;
        margin:10px;
        height:35px;

    }
</style>

</html>