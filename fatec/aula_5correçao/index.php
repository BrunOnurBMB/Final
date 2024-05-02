<?php


$candidatos = [];

$pessoa1 = [
    'nome' => 'Maria',
    'sexo' => 'F',
    'idade' => 23,
    'experiencia' => 4,
    'escolaridade' => [
        5 => 'ensino médio',
        10 => 'técnico',
    ]
];

$candidatos[] = $pessoa1;

$pessoa2 = [
    'nome' => 'JOÃO',
    'sexo' => 'M',
    'idade' => 30,
    'experiencia' => 1,
    'escolaridade' => [
        5 => 'ensino médio',
        15 => 'faculdade',
        20 => 'especialista',
    ]
];

$candidatos[] = $pessoa2;

$pessoa3 = [
    'nome' => 'JOANA',
    'sexo' => 'F',
    'idade' => 27,
    'experiencia' => 8,
    'escolaridade' => [
        5 => 'ensino médio',
    ]
];

$candidatos[] = $pessoa3;

//instrução ternaria

$qtdF = 0;
$qtdM = 0;
$pontos = 0;
$indice = 0;
$vencedores = [];

foreach ($candidatos as $candidato) {
    $qtdF += ($candidato['sexo']== 'F' ) ? 1 : 0;
    $qtdM += ($candidato['sexo']== 'M' ) ? 1 : 0;

    $pontos = ($candidato['experiencia'] * 5);
    foreach ($candidato['escolaridade'] as $key => $value) {
        $pontos += $key;
    }
    $candidatos[$indice]['pontos'] = $pontos;
    echo "<br>". $candidato['nome']. "<br>" . "pontos: $pontos<br>";
    $indice++;  
}

$pontosAnterior = 0;
$indeceF = -1;   // -1 serve para zerar o indice/matriz ele tira a possibilidade de cair no 0 da matriz.
$indice = 0;
$vencedores = [];

foreach ($candidatos as $candidato) {
    
    if ($candidato['pontos'] >= $pontosAnterior && $candidato['pontos'] >= 45){
        $vencedores[] = $candidato;
        $pontosAnterior = $candidato['pontos'];
    }

        if ($candidato['sexo']=='F') {
        $indiceF = $indice;
        
        }
    $indice++;

}

echo "$qtdF, $qtdM";


// echo "<br> VENCEDORES <br>";
// foreach ($vencedores as $vencedor) {
//     echo ' <br>- '. $vencedor['nome'] . ' ('. $vencedor['pontos'].')';
// }

// echo '<br> <br> <br>Contratado(a)<br>';
// if ($indeceF >= 0) {
//     echo"<br> - " . $vencedores[$indeceF]['nomes'];
// }else   
//     echo '<br> - '. $vencedores[0]['nome'];

// var_dump($vencedores);
// echo "<br> "." Total F $qtdF, Total M $qtdM";

// echo"<br>";

// var_dump($candidatos);