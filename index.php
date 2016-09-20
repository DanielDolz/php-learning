<?php


require 'functions.php';

require 'Task.php';


$task = new Task("Aprendre PHP ",false);

var_dump($task);

$task->complete();
$task->description("Un altra cosa");
echo $task->completed();
var_dump($task);



//require 'index.template.php';

