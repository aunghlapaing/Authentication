<?php

require_once("./dbConnection.php");

$sql_query = "update customer set phone=?, name=? where id=?";

$updateData = $pdo->prepare ($sql_query);
$updateData->execute(['9093786386', 'Aung Hla Update',1]);

header("Location:read_prepare.php");



