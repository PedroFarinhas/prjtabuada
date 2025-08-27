<?php

$numero = filter_input(INPUT_GET, "numero", FILTER_VALIDATE_INT);

if ($numero == null || $numero == false) 
{
    echo "Digite um número correto. ";
} 
else 
{
    for ($tabuada = 1; $tabuada <= 10; $tabuada++) 
        {
        $resultado = $numero * $tabuada;
        echo "$numero x $tabuada = $resultado <br>";
        }
}
?>