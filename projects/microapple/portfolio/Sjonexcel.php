<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Excel project</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="../css/jonexcel.css">
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="../js/Sjonexcel.js"></script>
</head>
<body>

<div id="excel">

    <table class="table table-bordered">
        <tr>
            <td>fx</td>
            <td colspan="8" contenteditable="true"></td>
        </tr>
        <tr>
            <td class="highlight_cell" contenteditable="false">&nbsp;</td>
            <td class="header_cell" contenteditable="false">A</td>
            <td class="header_cell" contenteditable="false">B</td>
            <td class="header_cell" contenteditable="false">C</td>
            <td class="header_cell" contenteditable="false">D</td>
            <td class="header_cell" contenteditable="false">E</td>
            <td class="header_cell" contenteditable="false">F</td>
            <td class="header_cell" contenteditable="false">G</td>
        </tr>
        <?php
            $cells = range(1, 10);
            foreach ($cells as $num=>$cell) {
                ?>
                <tr class="mytr">
                    <td contenteditable="true" class="cells mytd0"><?=$cell?></td>
                    <td contenteditable="true"  class="cells mytd1"></td>
                    <td contenteditable="true"  class="cells mytd2"></td>
                    <td contenteditable="true"  class="cells mytd3"></td>
                    <td contenteditable="true"  class="cells mytd4"></td>
                    <td contenteditable="true"  class="cells mytd5"></td>
                    <td contenteditable="true"  class="cells mytd6"></td>
                    <td contenteditable="true"  class="cells mytd7"></td>
                </tr>
                <?php
            }
        ?>
    </table>

</div>

</body>
</html>