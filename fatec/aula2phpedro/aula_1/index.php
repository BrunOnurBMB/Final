<!-- comando inicial do php--> <?php

echo 'teste';
echo "<br>";
// teste usado inicialmente, no navegador digitar localhost/nome da pasta, no caso dessa: "localhost/aula2phpedro/aula_1

// para utilizar o html no mesmo código, fechar a tag do php e abrir a do html FORA da tag php. caso nao for utilizado, não é necessário fechar a tag <?php>.

// o arquivo index.php é configurado para ser buscado com prioridade nos servidores apache, porém se o arquivo tiver outro nome, digitar lo na url apos a pasta EX: "localhost/aula2phpedro/aula_1/contato.php"
// ou int $idade = 0; para outras linguagens. o php analisa a informação inserida na variavel e define qual é o seu tipo.
// inteiro = int
$idade = 0;
// logico = boolean  
$idade = false;
// caracter = String
$idade = 'nome';
// real = Double/Real/Numeric/Decimal/Float
$idade = '1.0';
// Vetores = array/[]
$idades = [3,4,5,6, 'nome',false];
// mod = %
$idade = (45 % 3);
// OPERADORES LOGICOS: OU = OR ou || ; E = AND ou &&; SE e Senão/ então = {}; senão = elseif; se = if
// = se torna == ou === exemplo:
$valor1 = 1;

$valor2 = "1";
if ($valor1 == $valor2){
// se verdadeiro, as condições dentro do if são executadas
   echo "igual";

}else{
// se falso, criar um else e determinar as codições
   echo "diferente";
};
// para criar novas condições usar elseif
// = atribuição; == compara os valores crus sem considerar o tipo ; === compara os valores e o tipo
// =! valor cru diferente; !== valores e tipos diferentes
// NOT = !
$contavencida = true;

 if (!$contavencida){
    echo "vencida";
  } else{
    echo 'não esta vencida';
 }
echo "<br>";

$nota1= 5;

if ($nota1 >= 6){
   echo "aluno aprovado";
  }else {
   echo"aluno reprovado";
}
// else não precisa declarar condição, elseif sim

echo "<br>";

$eladança = false;


if ($eladança==true){
   echo "eu danço";
}
  else{
   echo "eu num danço naum :(";
  }

   echo "<br>";

// tipos de divisão = int div, /, e %

$nota1 = 7;
$nota2 = 5;
$soma = $nota1 + $nota2;
$media = $soma/2;

if ($media>=6){
   
   echo "aluno aprovado , sua nota é $media";
   
}
   elseif ($media<6){
      echo "aluno reprovado , sua nota é $media";
   } 

