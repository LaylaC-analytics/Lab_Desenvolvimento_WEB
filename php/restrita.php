<?php

session_start();

if(!isset($_SESSION["logado"])){

    header("Location: login.php");
    exit;

}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Area Restrita</title>
</head>

<body>

<h1>Area Restrita</h1>

<p>Usuario autenticado com sucesso.</p>

<a href="logout.php">Sair</a>

</body>
</html>