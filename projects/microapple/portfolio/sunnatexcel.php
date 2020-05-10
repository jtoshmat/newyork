<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Excel project</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="../css/sunnatexcel.css">
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="../js/sunnatexcel.js"></script>
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
            <td contenteditable="false">A</td>
            <td contenteditable="false">B</td>
            <td contenteditable="false">C</td>
            <td contenteditable="false">D</td>
            <td contenteditable="false">E</td>
            <td contenteditable="false">F</td>
            <td contenteditable="false">G</td>
        </tr>
        <?php
            $cells = range(1, 10);
            foreach ($cells as $num=>$cell) {
                ?>
                <tr>
                    <td contenteditable="true" class="cells"></td>
                    <td contenteditable="true"  class="cells"></td>
                    <td contenteditable="true"  class="cells"></td>
                    <td contenteditable="true"  class="cells"></td>
                    <td contenteditable="true"  class="cells"></td>
                    <td contenteditable="true"  class="cells"></td>
                    <td contenteditable="true"  class="cells"></td>
                    <td contenteditable="true"  class="cells"></td>
                </tr>
                <?php
            }
        ?>
    </table>

</div>

</body>
</html>