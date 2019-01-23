<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=devtube_phppdo", 
        'developer',
        'dev123'
        // [
        //     PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        // ]
    );
    $conn->exec("SET NAMES utf8");
} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
}