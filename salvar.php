<?php

include "conexao.php";

$nome = "Gilson Reis";
$email = "gilson@email.com";

$sql = "insert into contatos (nome, email) values (:nome, :email);";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":email", $email);

$stmt->execute();

echo $conn->lastInsertId();