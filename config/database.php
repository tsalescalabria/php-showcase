<?php 

define("SERVER", "127.0.0.1");
define("USERNAME", "THIAGO");
define("PASSWORD", "");
define("DATABASE", "test");

try {
    $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
}catch (Exception $e) {
    echo $e;
}

// $sql = "SELECT * FROM tabela";

// $result = $connection->query($sql);

// print_r($result->fetch_assoc());