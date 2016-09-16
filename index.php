<?php

// $greeting = "Hola " . $_GET['name'] . "!";
// require 'index.template.php';

//ARRAYS o vectors
//--Estructura de dades--

//$names = array('Sergi', 'Xavi', 'Romeu');

$names = [
    'Sergi',
    'Xavi',
    'Romeu'
] ;

foreach ($names as $name) {
    echo "$name</br>";
}

