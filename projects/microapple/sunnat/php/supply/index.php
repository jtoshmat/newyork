<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MY SUPPLY</title>
    <link rel="stylesheet" href="../../../../css/bootstrap.css">
    <link rel="stylesheet" href="../../../../../fontawesome/css/all.css">
    <link rel="stylesheet" href="supply.css">
</head>
<body>
<? include_once 'products.php' ?>
<div class="container-fluid">
    <div class="checkout">
        <i class="fas fa-shopping-cart">(0)</i>

    </div>
    <div class="mysupply">TASHEV'S PLUMBING SUPPLY</div>
    <div id="supply">
        <table class="table table-bordered mytable">
            <tr class="th_childs">
                <th>ID</th>
                <th>IMAGE</th>
                <th>PRODUCT NAME</th>
                <th>PRODUCT PRICE</th>
                <th>PRODUCT QTY</th>
                <th>ACTION</th>
            </tr>
            <? foreach ($products as $product): ?>
                <tr>
                    <td><?= $product['id'] ?></td>
                    <td><?= $product['image'] ?></td>
                    <td><?= $product['product_name'] ?></td>
                    <td><?= $product['price'] ?></td>
                    <td><?= $product['quantity'] ?></td>
                    <td><select>
                            <? for ($i = 1; $i <= 1000; $i++): ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <? endfor; ?>
                        </select>
                        <button type="button">
                            <i class="fas fa-plus"></i>
                        </button>
                    </td>
                </tr>
            <? endforeach; ?>
        </table>
    </div>

</div>

</body>
</html>
