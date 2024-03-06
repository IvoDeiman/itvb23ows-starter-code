<?php
use mysqli;

class Database {
    private mysqli $database;
    private string $dbServerName = "localhost";
    private string $dbUsername = "root";
    private string $dbPassword = "";
    private string $dbName = "hive";

    private function __constructor() {
        $this->database = new mysqli($this->dbServerName,$this->dbUsername,$this->dbPassword,$this->dbName);
    }

    function setState($state) {
        list($a, $b, $c) = unserialize($state);
        $_SESSION['hand'] = $a;
        $_SESSION['board'] = $b;
        $_SESSION['player'] = $c;
    }

    function getState(): string {
        return serialize([$_SESSION['hand'], $_SESSION['board'], $_SESSION['player']]);
    }
}
?>