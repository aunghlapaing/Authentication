<?php
require_once ("./dbConnection.php");


$sql_query = "select * from customer where id=? ";

$data = $pdo->prepare($sql_query);
$data->execute([1]);

$res = $data->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r ($res);
