<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <form action="get_post.php" method="post">
        <label>username:</label><br>
        <input type="text" name="username"><br>
        <label>password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log in" name="submit">
    </form>
</body>
</html>
<?php
    if (isset($_POST['submit'])){
        echo $_POST["username"] . "<br>";
        echo $_POST["password"];
    }//aqui ele verifica se o botao submit foi apertado para fazer isso, para que nao de o erro de variavel nao existente no incio
    //post é quando é algo confidencial e get é pra quando não é confidencial
?> 