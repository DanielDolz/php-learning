<?php

// $greeting = "Hola " . $_GET['name'] . "!";
// require 'index.template.php';

//*****ARRAYS o vectors*****

//--ESTRUCTURA de dades--

//$names = array('Sergi', 'Xavi', 'Romeu');

$names = [
    'Sergi',
    'Xavi',
    'Romeu',
    45,
    true
] ;

//--Arrays ASSOCIATIUS--

$person = [
    'name' => 'Sergi',
    'sni1' => 'Tur',
    'sn2' => 'Badenas',
    'age' => 38,
    'married' => yes
];

die('Xivato!');
echo "NO S'EXECUTA MAI!";
dd();

//echo $names;
var_dump($names);
print_r($names);

//require 'index.template.php';

