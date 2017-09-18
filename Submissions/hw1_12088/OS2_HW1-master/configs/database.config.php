<?php

class Database
{
    private $serverName = 'localhost';
    private $username = 'OS2';
    private $password = '12345678';
    private $databaseName = 'inventory';

    function connect()
    {
        $pdo = new PDO('mysql:host=' . $this->serverName . ';dbname=' . $this->databaseName, $this->username, $this->password);
        $pdo->exec("set names utf8");

        return $pdo;
    }
}
?>