<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chess board</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="css/chessboard.css">
</head>
<body>
<div class="container-fluid">
    <div style="height: 50px;"></div>
    <div class="chessboard">

        <table class="table table-bordered">
            <?php
            for($row=1;$row<=8;$row++)
            {
                echo "<tr>";
                for($columns=1;$columns<=8;$columns++)
                {
                    $total=$row+$columns;
                    if($total%2==0)
                    {
                        echo "<td class='cells even'>$row:$columns</td>";
                    }
                    else
                    {
                        echo "<td class='cells'>";

                        if ($row==4) {
                            echo "<img class='figure1' draggable='true'  src=\"https://www.iconninja.com/files/254/976/1002/checkmate-battle-chess-game-rook-figure-icon.png\">";
                        }
                        echo "Empty";
                    echo "</td>";
                    }
                }
                echo "</tr>";
            }
            ?>
        </table>

    </div>
</div>

</body>
</html>