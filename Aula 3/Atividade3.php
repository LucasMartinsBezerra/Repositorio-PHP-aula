<?php
//array com chave => valor
$listaAlunoIdade = array(
    "Joel" => 31,
    "Gabriela" => 27,
    "Bianca" => 07
);

//array apenas com valor
$listaCores = array(
    "Vermelho",
    "Amarelo",
    "Verde",
    "Laranja"
);

//acesso ao item do array $listaAlunoIdade [CHAVE]
echo $listaAlunoIdade["Joel"];

echo "</br>";

echo $listaCores[2];

echo "</br>";

//exibir em tela todo o conteúdo (chave e valor) de um array var_dump(array;)
var_dump($listaAlunoIdade);

echo "</br>";

var_dump($listaCores);
?>
