<?php

/*echo 'teste';*/

/* Aula 2 - Estruturas Condicionais */

/* a condição se resume a uma ou várias perguntas */
/* no visual G usavasse "SE", agora no PHP usaremos "IF" */
/* no visual G usavasse "SE NÃO", agora no PHP usaremos "ELSE" */
/* para colocar mais de uma condição usamos "&&" */
/* usamos "==" como sinal de igualdade */
    echo "<br>";
if ( 20 == 20 && 19 >= 20 ) {
    echo "condição verdadeira";
}
else {
    echo "condição falsa";
}

    echo "<br>";

/* no visual G usavesse "SENÃOSE" para várias condições, agora no PHP usaremos "ELSEIF" */

$diadasemana = 4;
if($diadasemana == 1){
    echo "Domingo";
}elseif($diadasemana == 2){
    echo "Segunda";
}elseif($diadasemana == 3){
    echo "Terça";
}elseif($diadasemana == 4){
    echo "Quarta";
}elseif($diadasemana == 5){
    echo "Quinta";
}elseif($diadasemana == 6){
    echo "Sexta";
}elseif($diadasemana == 7){
    echo "Sábado";
}

    echo "<br>";

/* "SWITCH" usado para ler a variável e não continuar o código */

switch($diadasemana) {
    case 1:
        echo "Domingo";
        break;

    case 2:
        echo "Segunda";
        break;

    case 3:
        echo "Terça";
        break;
    
    default:
        echo "nenhuma das opçãoes";
}

    echo "<br>";


    /* Calcular IMC ( PESO / ALTURA** ) */

$peso = 150.0;
$altura = 1.50;
$IMC = $peso/$altura**$altura;
 echo $IMC;
if($IMC <= 18.5){
    echo "Abaixo do peso";
}
elseif($IMC >= 18.6 && $IMC <= 24.9){
    echo "Peso ideal";
}
elseif($IMC >= 25.0 && $IMC <= 29.9){
    echo "Levemente acima do peso";
}
elseif($IMC >= 30.0 && $IMC <= 34.9){
    echo "Obesidade grau 1";
}
elseif($IMC >= 35.0 && $IMC <= 39.9){
    echo "Obesidade grau 2";
}
elseif($IMC >= 40.0){
    echo "Obesidade grau 3";
}


/* Avaliação de média  */
/* 0-5 Reprovado / 5.1-6 avaliação / 6.1-10 Aprovado */