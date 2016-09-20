<?php

class Task {

    protected $description;

    private $completed;

    public function __construct($description, $completed) {

        $this->description = $description;
        $this->completed = $completed;

    }

    public function complete() {

        $this->completed = true;
    }

    // Setter
    public function description($description) {

        $this->description = $description;
    }

    // Getter
    public function isComplete() {

        return $this->completed;
    }

    // Getter + Setter
    public function completed($completed=null) {

        if ($completed == null) {
            return $completed;
        }

        $this->completed = $completed;

    }


}