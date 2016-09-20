<?php

function hello($name, $sn1){
    echo "Hola " . $name . " " . $sn1 . "!";
}

function hellovtortosina($name, $sn1 = "Curto"){
    echo "Hola " . $name . " " . $sn1 . "!";
}

function printArgs($args) {
    foreach ($args as $arg) {
        echo $arg . ',';
    }
}

function sum() {

    return array_sum(func_get_args());
}

function connect()
{
    try {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=prova', 'debian-sys-maint', 'taKIgQGMVowkc2aP');
        return $pdo;
    } catch (PDOException $e) {
        die("Error durant la connexió. Motiu: " . $e->getMessage());
    }
    return $pdo;
}

function allTasks($pdo)
{
    $query = $pdo->prepare('SELECT * FROM todos');

    $query->execute();

    return $query->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Task::class);

}