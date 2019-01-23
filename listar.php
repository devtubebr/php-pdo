<?php

include "conexao.php";

$sql = "select * from contatos";
$query = $conn->query($sql);

// $rows = $query->fetchAll(PDO::FETCH_ASSOC);
$rows = $query->fetchAll(PDO::FETCH_OBJ);

// var_dump($rows);exit;

foreach($rows as $row) {
    // echo $row[0] . PHP_EOL; 
    // echo $row['id'] . PHP_EOL;
    // echo $row[1] . PHP_EOL; 
    // echo $row['nome'] . PHP_EOL;
    // echo $row[2] . PHP_EOL; 
    // echo $row['email'] . PHP_EOL;

    echo $row->id . PHP_EOL;
    echo $row->nome . PHP_EOL;
    echo $row->email . PHP_EOL;

    echo "--------" . PHP_EOL . PHP_EOL;
}