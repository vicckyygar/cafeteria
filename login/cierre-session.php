<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1> FIN DE SESSIÓN </h1>
<?php
session_start();

session_unset();

session_destroy();
echo "Has cerrado Sesión correctamente.";
?>
    
</body>
</html>