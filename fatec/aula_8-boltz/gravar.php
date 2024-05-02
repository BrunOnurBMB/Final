<?php

// var_dump($_POST);

// if (isset($_POST['linguagem'])){
//     echo 'Informe pelo menos uma linguagem.';
//     exit;
// };

foreach($_POST['linguagem'] as $linguagem){
    echo "LINGUAGEM: $linguagem <br>";
};

echo 'GRAU DE CONHECIMENTO: ' . $_POST['conhecimento'];
echo '<br>';
echo 'ESCOLARIDADE: ' . $_POST['Escolaridade'];