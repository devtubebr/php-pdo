<?php

include "conexao.php";
$id = 21;

$sql = "delete from contatos where id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":id", $id);

$stmt->execute();
