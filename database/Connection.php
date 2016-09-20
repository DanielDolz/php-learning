<?php


class Connection
{

    public static function make() {
        try {
            $pdo = new PDO('mysql:host=127.0.0.1;dbname=prova', 'debian-sys-maint', 'taKIgQGMVowkc2aP');
            return $pdo;
        } catch (PDOException $e) {
            die("Error durant la connexió. Motiu: " . $e->getMessage());
        }
    }

}