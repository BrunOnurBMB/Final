<?php

//Functions = funções
// -> recho de codigo REUTILIZAVEL
// -> com uma FUNCIONALIDADE ESPECIFICA
//1000.11 = 1.000,11(Mostrar para usuário)
// Dentro dos () trecebe-se parametros ou argumentos


function SomaDoisNumeros($numero1, $numeros2){
    return ($numero1+$numeros2);
}

echo SomaDoisNumeros(4, 7)*10;


function ExibeDataAtual(){
    echo date ('Y-m-d');
}

ExibeDataAtual();


function ConverteDolarParaReal($cotacaoDolar = 5.00, $valorEmDolar=0){
    return ($cotacaoDolar * $valorEmDolar);
}

echo ConverteDolarParaReal(5.02, 10.00);

