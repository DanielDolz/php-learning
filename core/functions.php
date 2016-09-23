<?php

function hello($nom, $cognom = "-"){
    echo "Hola " . $nom . " " . $cognom . "!";
}

//Una funció en la que no sabem quants paràmetres ens entraràn
function printArgs($args) {
    foreach ($args as $arg) {
        echo $arg . ',';
    }
}

//Una funció per a sumar i no sabem quants nombres s'afegiràn
function sum() {
    $numeros = func_get_args();

    return array_sum($numeros);
}

/**
 * @return PDO
 * Tractar errors
 */
function connect()
{
    try {
        //PDO: PHP Data Objects.
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=prova', 'root', '');
        return $pdo;
    } catch (Exception $e) {
        die("Hi ha hagut un error durant la connexió. Info: " . $e->getMessage());
    }
    return $pdo;
}
