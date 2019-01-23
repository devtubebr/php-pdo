<?php

include "conexao.php";

$nome = "Tio Patinhas";
$email = "tio@patinhas.com";
$id = 21;

$sql = "update contatos set nome = :nome, email = :email where id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":email", $email);
$stmt->bindParam(":id", $id);

$stmt->execute();
