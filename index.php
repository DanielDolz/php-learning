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
    'sn1' => 'Tur',
    'sn2' => 'Badenas',
    'age' => 38,
    'married' => true
];

//die('Xivato!');
//echo "NO S'EXECUTA MAI!";
//dd();
//
////echo $names;
//var_dump($names);
//print_r($names);

//echo $names[0];
//echo $person['sn1'];
//echo $person['married'];

require 'index.template.php';

