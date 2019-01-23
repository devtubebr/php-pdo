<?php

include "conexao.php";

$id_max = 15;
$id_min = 10;
$sql = "select * from contatos where id > :id_min and id < :id_max";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":id_min", $id_min);
$stmt->bindParam(":id_max", $id_max);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);

var_dump($rows);