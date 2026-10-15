<?php

$nomes = [
"Pedro",
"Joao",
"Ana",
"Carla",
"Layla",
"Lucas",
"Gabriel",
"Amanda",
"Julia",
"Marina",
"Carlos",
"Bruno",
"Patricia",
"Rafaela",
"Fernanda"
];

$sorteado = $nomes[array_rand($nomes)];

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Exercicio 2</title>
</head>

<body>

<h1>Sorteio de Nomes</h1>

<h2>Lista</h2>

<?php

foreach($nomes as $nome){
    echo $nome . "<br>";
}

?>

<br>

<h2>Nome Sorteado</h2>

<p>
<?php echo $sorteado; ?>
</p>

<a href="index.php">Voltar</a>

</body>
</html>