<?php

$nome = "Gabriel";
$sobrenome = "Sousa";
$nomeCompleto = $nome . " " . $sobrenome;


echo $nomeCompleto ;

echo "</br>";

// Destruir variavel
unset($nome);


// isset saber se tem valor na variavel
if(isset($nome)){
    echo "ok";
}else{
    echo "nao";
}
?>