<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
<div id="my_table_div">
    <h3>The world airports directory</h3>

    <div id="searchform">
        <form>
            <p>><label>Search:</label> <input placeholder="Your keyword" name="keyword" type="text">
            <button type="submit">Search</button>
            </p>
        </form>
    </div>


    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>City</th>
            <th>Country</th>
            <th>Address</th>
            <th>Code</th>
        </tr>


        <tr>
            <td>1111</td>
            <td>New York</td>
            <td>USA</td>
            <td>22222</td>
            <td>33333</td>
        </tr>


        <tr>
            <td>1111</td>
            <td>New York</td>
            <td>USA</td>
            <td>22222</td>
            <td>33333</td>
        </tr>


        <tr>
            <td>1111</td>
            <td>New York</td>
            <td>USA</td>
            <td>22222</td>
            <td>33333</td>
        </tr>


        <tr>
            <td>1111</td>
            <td>New York</td>
            <td>USA</td>
            <td>22222</td>
            <td>33333</td>
        </tr>


        <tr>
            <td>1111</td>
            <td>New York</td>
            <td>USA</td>
            <td>22222</td>
            <td>33333</td>
        </tr>


        <tr>
            <td>1111</td>
            <td>New York</td>
            <td>USA</td>
            <td>22222</td>
            <td>33333</td>
        </tr>

        <tr>
            <td>1111</td>
            <td>New York</td>
            <td>USA</td>
            <td>22222</td>
            <td>33333</td>
        </tr>


    </table>
</div>

<style>
    label {
        color: white;
        font-size: 150%;
    }

    #searchform input{
        width: 400px;
        height: 45px;
        border: 1px solid black;
        border-radius: 10px;
    }

    tr:hover td{
        background-color: #b2d390;
        cursor: pointer;
    }

    tr:nth-child(even){
        background-color: #defabc;
    }

    td{
        box-shadow: black 1px 1px 1px 1px;
    }

    tr:first-child{
        background-color: #1a2f69;
        color: #fac853;
    }


    table{
        background-color: #faf3d9;
    }

    #my_table_div{
        width: 90%;
        margin: 30px auto;
        text-align: center;
    }

    body{
        background-color: #4b0f1e;
    }
    #my_table_div h3{
       color: white;
    }
</style>

</body>
</html>