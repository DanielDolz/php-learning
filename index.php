<?php


require 'functions.php';

class Task {

    public $description;

    public $completed;

    public function __construct($description, $completed) {

        $this->description = $description;
        $this->completed = $completed;

    }

}

$task = new Task("Aprendre PHP ",false);

var_dump($task->description);
var_dump($task->completed);
//require 'index.template.php';

