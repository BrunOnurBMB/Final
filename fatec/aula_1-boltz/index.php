<?php

echo "teste";

//inteiro = int
$idade = 0;

//lógico = boolean
$idade = false;

//caracter = String
$idade = 'nome';

//real = Double/Real/Numeric/Decimal/Float
$idade = 1.0;

//vetores = Array/[]
$idade = [3, 4, 5, 6, 'idade', false];

//mod = %
$idade = (45 % 3);

//ou = or/  | |

// e = and - &&

// = ( 1 = é atribúição) , == ( 2 == compara valor e tipo) , === (3 === compara atribuição e valor)

//if (se) else (se não) elseif(se não se)
/*
$valor1 = 1;

$valor2 = '1';

//estrutura 1
if($valor1 == $valor2){
    echo 'IGUAL';
    
}else{
    echo 'DIFERENTE';
}

//estrutura 2
if($valor1 == $valor2):
    echo 'IGUAL';
else:
    echo "DIFERENTE";

endif;*/

// != (sinal de diferente) , !== (compara valor e tipo) 

// not = !



//atividade

$idadeA = 18;

$idadeB = 18;

/*
if($idadeA >= $idadeB){
    echo 'Toma uma Breja';
}

else{
    echo 'Bebe leite';
}*/

$a = 'Drag0n Ball';

$b = 'One Piec3';


if($a >= $b){
    echo 'O anime é Bom';
}
else{
    echo 'One Piece é melhor, Oda Gênio';
}

$a = 7;

$b = 5;

$c = 4;

$d = 0;

if($d >= $a){
    echo 'Aprovado';
}
elseif($d >= $b){
    echo 'Recuperação';
}
else($d <= $c){
    echo 'reprovado';
}
