<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Calendar</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="container-fluid jon">
    <div class="calendar">
        <table class="table table-bordered">
            <tr>
                <td class="calendartitle" colspan="7">NOVEMBER</td>
            </tr>
            <tr>
                <td>S</td>
                <td>M</td>
                <td>T</td>
                <td>W</td>
                <td>T</td>
                <td>F</td>
                <td>S</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
            </tr>
            <tr>
                <td>8</td>
                <td>9</td>
                <td>10</td>
                <td>11</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
            </tr>
            <tr>
                <td>15</td>
                <td>16</td>
                <td>17</td>
                <td>18</td>
                <td>19</td>
                <td>20</td>
                <td>21</td>
            </tr>
            <tr>
                <td>22</td>
                <td>23</td>
                <td>24</td>
                <td>25</td>
                <td>26</td>
                <td>27</td>
                <td>28</td>
            </tr>
            <tr>
                <td>29</td>
                <td>30</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        </table>

    </div>
</div>

<style>

    tr:nth-child(3) td:nth-child(1){
        color: red;
        font-weight: bolder;
    }
    tr:nth-child(4) td:nth-child(1){
        color: red;
        font-weight: bolder;
    }
    tr:nth-child(5) td:nth-child(1){
        color: red;
        font-weight: bolder;
    }
    tr:nth-child(6) td:nth-child(1){
        color: red;
        font-weight: bolder;
    }
    tr:nth-child(7) td:nth-child(1){
        color: red;
        font-weight: bolder;
    }

    td{
        text-align: center;
    }
    .calendartitle{
        text-align: center;
        font-size: 30px;
        font-weight: bold;
    }

    table tr:first-child{
        background-color: #254c1e;
        color: #ffccb7;
        font-weight: bolder;
    }

    table tr:nth-child(2){
        background-color: #000049;
        color: #ffe533;
    }
    .jon{
        width:500px;
        margin: auto;
    }
    .calendar{
        background-color: #00a2f9;
        width: 100%;
    }
</style>
</body>
</html>