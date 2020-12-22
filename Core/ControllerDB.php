<?php

require __DIR__ . "/mysql.php";

class ControllerDB {
    protected $connection;

    public function __construct() {
        $mysql = new mysql();
        $this->connection = $mysql->connection;
    }
}
?>