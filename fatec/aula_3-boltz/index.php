<?php

 echo"Teste";

 echo"<br>";

// Laços de repetição FOR / WHILE / FOREACH 

// FOR
// VARIÁVEL, CONDIÇÃO, INCREMENTADOR

// OBS ++ é o mesmo que $i = $i + 1
// OBS -- é o mesmo que $i = $i - 1

//for ($i=0; $i <10; $i++) {
//    echo $i . "<br>";
//}

 echo "<br>";

//$totallinhas = 100; 
//for($linha = 0; $linha = $totallinhas; $linha++) {
//   echo "Linha: $linha <br>";
//}

 echo "<br>";

//$totallinhas = 100;
//$totalcolunas = 30;
//for ($linha = 0; $linha <= $totallinhas; $linha++) {
//   
//    for ($coluna=0; $coluna <= $totalcolunas; $coluna++) {
//       echo"Linha: $linha - Coluna: $coluna <br>";
//    }
//}

 echo "<br>";

// WHILE

// Exemplo NÃO EXECUTAVEL
// 
//$conatdor=0;
//while($contador <= 10){
//     echo "contador = $contador";
//}

// Código sem um controle para o $contador, ao executar trava o servidor.

// O while é a estrutura de repetição mais simples do PHP. Com ele informamos que um bloco de código deve ser repetido enquanto a condição declarada for verdadeira.

// O loop do-while tem comportamento parecido com o while, diferenciando-se somente na validação do loop, que é feita no final de cada iteração.

// FOREACH

// ARRAY seria o msm que uma MATRIX ou VETOR, onde o 1º item obrigatoriamente tem o valor 0
$arrayCor = [
    "amarelo",
    "vermelho",
    "verde"
];

foreach($arrayCor as $cor){
    echo "Cor é $cor <br>";
}

// foreach atribúi valor para as chaves, o loop dura enquanto houver elementos na variável.

 echo "<br>";

// BREAK mata a execução do loop
// CONTINUE pula a excução e volta para o início do loop

//$totallinhas = 100;
//$totalcolunas = 30;
//for ($linha = 0; $linha <= $totallinhas; $linha++) {
   
//    if($linha == 10) {
        
        //break;
        
        //continue;

//    }

//    for ($coluna=0; $coluna <= $totalcolunas; $coluna++) {
//       echo"Linha: $linha - Coluna: $coluna <br>";
//    }
//
//}

//Exercícios
//FOR

//1 até 1000
//somente pares

$tabuada = 1;

for($contador=1; $contador <= 1000; $contador++){    
    
    if($conatdor % 2 == 0){
    for($multiplicador = 1; $multiplicador <= 10; $multiplicador++){
    echo $tabuada." x ".$valor." = ".($tabuada*$valor)."<br />";
    }
}
    echo"-----------------------------------------------------<br>";
}
