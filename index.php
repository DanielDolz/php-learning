<?php


require 'functions.php';

require 'Task.php';


$task = new Task("Aprendre PHP ",false);

var_dump($task);

$task->complete();
//$task->completed = true;   --> Menys segur

var_dump($task);



//require 'index.template.php';

