<?php

date_default_timezone_set("America/Sao_Paulo");

$cidade = "Maua";

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Exercicio 1</title>
</head>

<body>

<h1>Data Atual</h1>

<p>
<?php
echo $cidade . " - " . date("d/m/Y");
?>
</p>

<a href="index.php">Voltar</a>

</body>
</html>