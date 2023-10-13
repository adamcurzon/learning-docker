<?php

namespace App\Services;

class Database {
    private $dbh;

    public function __construct(){
        try {
            $this->dbh = new \PDO("mysql:host={$_ENV['DB_HOST']};port={$_ENV['DB_PORT']};dbname={$_ENV['DB_NAME']}", $_ENV['DB_USER'], $_ENV['DB_PASS']);
            $this->dbh->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function query(){
        $sth = $this->dbh->query('SELECT * FROM test');
        $sth->execute();
        return($sth->fetchAll(\PDO::FETCH_ASSOC));
    }
}