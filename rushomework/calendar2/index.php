<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calendar</title>
    <style>
        body
        {
            background: grey;
        }
        .container
        {
            max-width: 800px;
            margin: auto;
            font-family: sans-serif;
        }
        .month
        {
            text-align: center;
            background: #7abaff;
            font-size: 2.5em;
            letter-spacing: 1px;
            color: white;
            padding: 25px;
            border: 1px solid deepskyblue;
        }
        table, th, td
        {
            width: 100%;
            table-layout: fixed;
            text-align: center;
            font-size: 17px;
            border-collapse: collapse;
            border: 1px solid deepskyblue;
        }
        tr, th, td
        {
            padding: 15px;
        }
        th
        {
            background:#4c6d96;
            color: red;
        }
        td
        {
            background: lightgray;
        }
        td:hover
        {
            background: #fff3cd;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="month">
        <strong> November</strong>
        <br>
        <strong> 2019</strong>
    </div>
    <table>
        <tr>
            <th> Sun</th>
            <th> Mon</th>
            <th> Tue</th>
            <th> Wed</th>
            <th> Thu</th>
            <th> Fri</th>
            <th> Sat</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>1</td>
            <td>2</td>
        </tr>

        <tr>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
        </tr>

        <tr>
            <td>10</td>
            <td>11</td>
            <td>12</td>
            <td>13</td>
            <td>14</td>
            <td>15</td>
            <td>16</td>
        </tr>

        <tr>
            <td>17</td>
            <td>18</td>
            <td>19</td>
            <td>20</td>
            <td>21</td>
            <td>22</td>
            <td>23</td>
        </tr>

        <tr>
            <td>24</td>
            <td>25</td>
            <td>26</td>
            <td>27</td>
            <td>28</td>
            <td>29</td>
            <td>30</td>
        </tr>
    </table>
</div>
</body>
</html>