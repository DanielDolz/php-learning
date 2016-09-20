<?php

// POPO: Plain Old PHP Object | Contenedor de tasques | Model

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
    public function completed() {

        return $this->completed;
    }


}