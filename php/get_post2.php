<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIZZAS</title>
</head>
<body>
    <form action="get_post2.php" method="post">
        <label>Quantidade:</label><br>
        <label>valor: 7.50</label><br>
        <input type="number" name="number"><br>
        <input type="submit" value="Total">
    </form>
</body>
</html>
<?php
    $Quantidade = $_POST["number"];
    $total = $Quantidade * 7.50;
    echo "O total a pagar é $Quantidade x 7.50 <br>";
    echo "total = $total";


?>