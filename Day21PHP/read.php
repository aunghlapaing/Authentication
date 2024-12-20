<?php 
require_once ('./dbConnection.php');

$sql_query = "select * from customer";
// $res = $pdo->prepare ($sql);

// fetch || fetchAll || FETCH_ASSOC (for array) || FETCH_OBJ (for object)
$data = $pdo->query($sql_query)->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r ($data);

// ['name'] for FETCH_ASSOC && -> for FETCH_OBJ
foreach ($data as $item){
    echo $item ['name'] . "<br>";
    echo $item ['address'] . "<br>";
}

?>