<?php



// formulário com action vazio, remete a informação para a msm página;
// method GET limite de 250 caracters, envia a informações de parametros na URL;
// method POST não tem limites, não mostra informações na URL


// var_dump($_POST);

$nome= $_POST['Nome'];
$fone1= $_POST['Telefone1'];
$fone2= $_POST['Telefone2'];
$documento= $_POST['Documento'];


// if( strlen($documento) != 11 && strlen($documento) != 14) {
//    echo 'Você não merece usar o meu código!';

// }else{
//     echo 'VC é o cara';
// }
function FormatoDataToIng ($data){
    $temp = explode('/', $data);
    $data_ing = $temp[2] . '-' . $temp[1] . '-' . $temp[0];
    return $data_ing;
}

 echo '<br>';

function FormatoDateToBr($data){
    $temp = explode('-', $data);
    $data_br = $temp[2] . '/' . $temp[1] . '/' . $temp[0];
    return $data_br;
}

$data_cadastro= $_POST['data_cadastro'];

echo FormatoDateToBr($data_cadastro);

// $variavel = str_replace; serve para checar toda a string limpa os pontos, traças, barras e substituir por nada. 
//Ex:. $documento= str_replace(['.', '-', '/']'', $documento);



