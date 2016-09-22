<?php


//Configuració
$config = require 'config/database.php';
//Funcions
require 'functions.php';
//Classes
require 'Task.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';

$pdo = Connection::make($config); //Mètode estàtic.



$query = new QueryBuilder($pdo);
$tasks = $query->all('todos');

//Plantilla/Vista
require 'index.template.php';