<?php

echo "teste";

// Introdução ao FOREACH

// Para dar início ao FOREACH, obrigatóriamente temos que falar sobre ARRY

// ARRY sempre usará índice/posição


//$meuarray1 = array(); //forma antiga, mais ainda funciona.

echo "<br>";

//forma abreviada:

//$meuarray2 = [13, 5, 67, 34];

echo "<br>";

// O ARRAY não precisa necessárimente conter valores, ele pode ser iniciado vazio.

//$meuarray3 = [];

echo "<br>";

// É possivel usar valores e tipos diferentes no mesmo ARRAY:

//$meuarray4 = [44, "teste", true, 23.90];

echo $meuarray4[0];
 
// mensagens de erro PHP/ARRAY sempre terão KEY(chave) ou VALUE(valor)
// No FOR/ARRAY o índice começa no 0.

echo "<br>";

// $meuarray4 = [44, "teste", true, 23.90];

//for ($i = 2; $i < 4; $i++){
//    echo $meuarray4[$i];
//}

echo "<br>";

// COUNT conta quantos elementos tem no ARRAY lembrando que o índice começa do 0 e ele conta como elemento Ex:

///echo "qnt de elementos" . count ($meuarray4);

echo "<br>";

//$contador = 0;

//while( $contador < count ($meuarray4)){
//   echo $meuarray4[$contador];
//    $contador++;
//}

// adicionar ou mudar índice 

//$meuarray4[1] = "AZUL";
//$meuarray4[4] = "AZUL";

//echo "<pre>";
//var_dump($meuarray4);
//echo "<pre/>";

echo "<br>";

//echo "<pre>";
//print_r($meuarray4);
//echo "</pre>";

echo "<br>";

// ARRAY chaveado:
// possibilita criar um ou vários ARRAY dentro de outro ARRAY.

$pessoa = [
    "nome" => "JOÃO",
    "idade" => 35,
    "sexo" => "M",
    "conhecimentos" => [
        "linguagem1" => "PHP", 
        "linguagem2" => "JS", 
        "linguagem3" => "HTML"
    ],

    "documentos" => [
        "cpf" => "11122233345",
        "RG" => "1122233345",
        "titulo" => [
            "seção" => "1230",
            "zona" => "123",
            "sala" => "12"

        ]

    ]

];

echo "<br>";

echo "Nome do Cliente:";
echo "<br>";
echo $pessoa["nome"];
echo "<br>";
echo "Formação do cliente:";
echo "<br>";
echo $pessoa["conhecimentos"]["linguagem2"];
echo "<br>";
echo "CPF:";
echo "<br>";
echo $pessoa["documentos"]["cpf"];
echo "<br>";
echo "RG:";
echo "<br>";
echo $pessoa["documentos"]["RG"];
echo "<br>";
echo "Titulo de eleitor:";
echo "<br>";
echo $pessoa["documentos"]["titulo"]["seção"];
echo "<br>";
echo "<br>";

//  foreach da uma volta de cada vez, pegando key e value.
// foreach nã usa contadores, ele sabe quando as chaves do nivel 1 acabam.
// foerach é um giro contínuo limiitado pelo número de chaves.

foreach ($pessoa as $key => $value){
    
    echo "<br>";

    if (is_array($value)){
        foreach ($valor as $linguagem){
            echo "$linguagem<br>";
        }
    }else{
        echo "key $key - value $value";
    }

}
