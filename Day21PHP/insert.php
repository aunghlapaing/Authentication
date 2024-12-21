<?php
require_once('./dbConnection.php');

$insert_query = "insert into customer (name, address, phone) values (?,?,?)";

$insertData = $pdo->prepare ($insert_query);
$insertData->execute(['Ba Thein', 'Mandalay', '097561234']);

echo "Insert Data successful";