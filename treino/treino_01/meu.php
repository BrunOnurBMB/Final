<?php 
$numero1 = $_POST['numero1'];

$numero2 = $_POST['numero2'];

var_dump($_POST);

while ($numero1 != $numero2) :
    
    if ($numero1 > $numero2) {
        print("Crescente");
    }else {
        print("Decrescente");
    }
    header("location: index.html");
    
    
endwhile;

print("nuemros iguais");


?>