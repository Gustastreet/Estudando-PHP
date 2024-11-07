<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <form method="post">
        <label>Aqui é a página index</label><br>
        <input type="text" name="name">name</input><br>
        <input type="submit" name="submit"></input>
        <a href="login.php">Isso aqui vai para login</a>
    </form>
    
</body>
</html>
<?php
    if (isset($_POST['submit'])){
        $_SESSION['username'] = $_POST['name'];
  
    }
    
?>
