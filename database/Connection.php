<?php


class Connection
{

    //El fem estàtic per no haver de fer un new
    public static function make($config,$message) {
        try {
            //PDO: PHP Data Objects.
            //$pdo = new PDO('mysql:host=127.0.0.1;dbname=prova', 'root', '');
            $pdo = new PDO(
                $config['dbtype'] . ':host=' .
                $config['dbhost'] . ';dbname=' .
                $config['dbname'],
                $config['username'],
                $config['password']
            );

            return $pdo;
        } catch (Exception $e) {
            die($message['DatabaseErrorConnection'] . $e->getMessage());
        }
    }

}