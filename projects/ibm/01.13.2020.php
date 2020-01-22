<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>jQuery Calculator</title>
        <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">

        </script>
    </head>
<body>
   <div class="calculator">
       <form class="form">
         <table>
           <tr><td class="myform"><input class="calc-display"></td></tr>
         </table>
       </form>
       <div class="mytable">


       <table>
           <tr>
               <td><input class="lightgrey" type="button" value="C"></td>
               <td><input class="lightgrey" type="button" value="/"></td>
               <td><input class="lightgrey" type="button" value="<"></td>
               <td><input class="orange" type="button" value="X"></td>

           </tr>
           <tr>
               <td><input type="button" value="7"></td>
               <td><input type="button" value="8"></td>
               <td><input type="button" value="9"></td>
               <td><input class="orange" type="button" value="-"></td>

           </tr>
           <tr>
               <td><input type="button" value="4"></td>
               <td><input type="button" value="5"></td>
               <td><input type="button" value="6"></td>
               <td><input class="orange" type="button" value="+"></td>

           </tr>
           <tr>
               <td><input type="button" value="1" onclick="insrt(1)"></td>
               <td><input type="button" value="2"></td>
               <td><input type="button" value="3"></td>
               <td><input class="orange" type="button" value="="></td>

           </tr>
           <tr>

               <td><input colspan="2" type="button" value="0"></td>
               <td><input type="button" value="."></td>

           </tr>
       </table>
     </div>
   </div>
 <script type="text/javascript" src="js.new.js"></script>
<style media="screen">
  .calculator{
    border: 1px solid black;
    width: 14%;
    text-align: center;
    background-color: yellow;
  }
  .mytable{
    margin-left: 11px;
  }
  .myform{
   width: 7%;
  }
   input{
    padding: 16px;
  }
  .lightgrey{
   background-color: lightgrey;
  }
  .orange{
    background-color: orange;
  }
</style>
</body>
</html>
