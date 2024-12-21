<?php

require_once ('./dbConnection.php');

$sql_query = "delete from customer where name=?";
$data = $pdo->prepare($sql_query);
$data->execute (['Ba Thein']);

header("Location:read_prepare.php");