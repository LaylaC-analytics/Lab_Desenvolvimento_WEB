<?php

$alunos = [

[
"nome"=>"Pedro",
"bim1"=>1.3,
"bim2"=>9.0,
"bim3"=>8.0,
"bim4"=>5.2
],

[
"nome"=>"Joao",
"bim1"=>3.0,
"bim2"=>7.4,
"bim3"=>4.0,
"bim4"=>9.5
]

];

header("Content-Type: application/json");

echo json_encode(
    $alunos,
    JSON_PRETTY_PRINT
);