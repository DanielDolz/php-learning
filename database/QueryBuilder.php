<?php

// Collaborators - Dependencies

    // ***COL·LABORADORS***

class Contract {

    public $arquitecte;
    public $paleta;
    public $lampista;

    /**
     * Contract constructor.
     * @param $arquitecte
     * @param $paleta
     * @param $lampista
     */

    public function __construct($arquitecte, $paleta, $lampista)
    {
        $this->arquitecte = $arquitecte;
        $this->paleta = $paleta;
        $this->lampista = $lampista;
    }

    public function buildHome($arquitecte, $paleta, $lampista){
        $this->arquitecte->dissenyar();
        $this->paleta->construir();
        $this->lampista->work();
    }

}



class QueryBuilder {

    public $pdo;

    /**
     * DEPENDENCY INJECTION
     * QueryBuilder constructor.
     * @param $pdo
     */

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }



    // ***Dependency injection***

    /**
     * @param $pdo
     *
     * Type hinting
     */

    function all($table)
    {
        $query = $this->pdo->prepare("SELECT * FROM {$table}");

        $query->execute();

        return $query->fetchAll(
            PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,
            Task::class);
    }

//    function quasiAll();
//
//    function deleteAll();
//
//    function deleteOne();

}