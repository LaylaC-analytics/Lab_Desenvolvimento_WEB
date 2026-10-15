<?php

$alunos = [

["Pedro",1.3,9.0,8.0,5.2],
["Joao",3.0,7.4,4.0,9.5],
["Carla",6.9,0.9,5.3,5.9],
["Ana",0.5,0.9,7.7,3.2],
["Layla",8,9,10,8],
["Lucas",7,8,7,8],
["Gabriel",8,7,8,9],
["Amanda",4,5,4,5],
["Julia",9,9,8,10],
["Marina",8,8,7,9]

];

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Exercicio 3</title>
</head>

<body>

<h1>Boletim</h1>

<table border="1" cellpadding="10">

<tr>
<th>Nome</th>
<th>Bim1</th>
<th>Bim2</th>
<th>Bim3</th>
<th>Bim4</th>
<th>Media</th>
<th>Conceito</th>
</tr>

<?php

foreach($alunos as $aluno){

$media = ($aluno[1]+$aluno[2]+$aluno[3]+$aluno[4])/4;

if($media >= 5){
    $conceito = "Aprovado";
    $cor = "lightgreen";
}else{
    $conceito = "Reprovado";
    $cor = "salmon";
}

echo "<tr>";

echo "<td>$aluno[0]</td>";
echo "<td>$aluno[1]</td>";
echo "<td>$aluno[2]</td>";
echo "<td>$aluno[3]</td>";
echo "<td>$aluno[4]</td>";
echo "<td>".number_format($media,1)."</td>";
echo "<td style='background:$cor'>$conceito</td>";

echo "</tr>";

}

?>

</table>

<br>

<a href="index.php">Voltar</a>

</body>
</html>