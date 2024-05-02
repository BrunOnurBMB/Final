<?php

//mensagem para caso o campo estiver vazio

if (empty($_POST['nome'])) {
    echo 'Informe seu nome.';
    exit;
}

if (empty($_POST['cpf'])) {
    echo 'Informe seu CPF.';
    exit;
}

if (empty($_POST['data_nascimento'])) {
    echo 'Informe sua Data de Nascimento.';
    exit;
}

if (empty($_POST['endereco'])) {
    echo 'Informe seu Endereço.';
    exit;
}

if (empty($_POST['sexo'])) {
    echo 'Informe seu sexo.';
    exit;
}

if (empty($_POST['telefone'])) {
    echo 'Informe seu Telefone.';
    exit;
}

if (empty($_POST['peso'])) {
    echo 'Informe seu peso.';
    exit;
}

if (empty($_POST['altura'])) {
    echo 'Informe sua Altura.';
    exit;
}


$peso = $_POST['peso'];
$peso = str_replace(["(",")",],[""],$peso);

if ($peso > 2.500  && $peso <= 179.999 ) {
    echo ("Valor cadastrada com sucesso.");
}   elseif ($peso >= 0.800 && $peso <= 2.500) {
    echo ("Atenção, recem nascido em risco");
}   elseif($peso >= 180.000 && $peso <= 600.000){
    echo ("Atenção, obesidade de risco");
}      else{
    echo("Valor invalido, insira novamente");
}


