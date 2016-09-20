<?php


require 'functions.php';

require 'Task.php';

//class Task{};

// PDO: Php Data Objects

//die ("Hola");

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=prova','debian-sys-maint','taKIgQGMVowkc2aP');
// No deuriem posar el pwd -> Tinc problemes x accedir com a root, quan ho resolgue a casa
//                            ho canviaré
}
catch (PDOExceptionException $e) {

    die("Error durant la connexió. Motiu: " . $e->getMessage());

}

$query = $pdo->prepare('SELECT * FROM todos');

$query->execute();

//var_dump($query->fetchAll(PDO::FETCH_OBJ));
//var_dump($query->fetchAll(PDO::FETCH_OBJ)[0]->description);
// **** No fem servir la nostra classe task *****

//var_dump($query->fetchAll(PDO::FETCH_CLASS,'Task'));
// **** Com Task és un simple text, no podrem accedir a la classe *****

$results = $query->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,Task::class);
$task1 = $results[0];
var_dump($task1->id);
var_dump($task1->description);
var_dump($task1->completed);

//require 'index.template.php';

