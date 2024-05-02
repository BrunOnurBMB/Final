<?php

// echo 'teste';

//Javav script object notation - JSON
// {
// "endereço": {
//     "cep":"18147-000",
//     "city":"araçariguama",
//     "neighborhood": "vila real",
//     "service": "",
//     "state": "são paulo",
//     "street": "rua imperatriz dona amélia",
// }
// }

//encodar dados no fromato JSON (testo -> JSON)
//json_encode();

//desencodar json para objeto (JSON -> OBJETO)
//json_decode();
//tudo dentro das chaves é um objeto;
//internamente existem "chaves" entre os elementos;
//logo, se torna um ARRAY de OBJETOS.
//aceita 5 tipos de dados(string, inteiro, ), do lado esquerdo sempre uma chave e sempre entre áspas;
//do lado direito vai ler a informação da maneira que foi escrita.

// $dados =[
//     'nome' => 'douglas',
//     'idade' => '28',
//     'possui_faculdade' => false, 
//     'salario' => 1000.34,
//     'linguagens' => [
//         'PHP', 'JS'
//     ]
// ];

// echo json_encode($dados);

// $pessoas[] = $dados1;
// $pessoas[] = $dados2;

// echo json_encode($pessoas);

// $dado1 =[
//     'nome' => 'douglas',
//     'idade' => '28',
//     'possui_faculdade' => false, 
//     'salario' => 1000.34,
//     'linguagens' => [
//         'PHP', 'JS'
//     ]
// ];

// $dados2 =[
//     'nome' => 'douglas',
//     'idade' => '28',
//     'possui_faculdade' => false, 
//     'salario' => 1000.34,
//     'linguagens' => [
//         'PHP', 'JS'
//     ]
// ];

json_decode();
//array de objeto, com um parametro padrão.
$endereco = json_decode($json);
echo $endereco -> logradouro;

//ARRAy associativo, com mais de um parametro.
$endereco = json_decode($json, true);
echo $endereco['logradouro'];