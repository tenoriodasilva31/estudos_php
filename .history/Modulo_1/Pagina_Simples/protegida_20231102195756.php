<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de Login</title>
</head>
<body>
    <h1>Teste de Login</h1>
    <h2><a href="protegida.php">Protegida</a></h2>
    <hr/>
    <?php
        session_start();
        if(isset($_SESSION["usuario"])) {
            ?>
            <a href="logout.php">Logout</a>
            <?php
        }
        ?>
</body>
</html>