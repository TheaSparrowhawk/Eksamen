<?php
session_start();
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Hei, <?php echo $_SESSION['brukernavn']; ?> </h1>
    <h1>Du logget inn!</h1>
</body>
</html>