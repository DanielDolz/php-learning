<?php

class Task {

    public $description;

    protected $completed;

    public function __construct($description, $completed) {

        $this->description = $description;
        $this->completed = $completed;

    }

    public function complete() {
        $this->completed = true;
    }

}