<?php

// POPO: Plain Old PHP Object | Contenedor de tasques | Model

class Task {
    public $description;
    public $completed;

    /**
     * Task constructor.
     * @param $description
     * @param $completed
     */
    public function __construct($description, $completed)
    {
        $this->description = $description;
        $this->completed = $completed;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getCompleted()
    {
        return $this->completed;
    }

    /**
     * @param mixed $completed
     */
    public function setCompleted($completed)
    {
        $this->completed = $completed;
    }



}
