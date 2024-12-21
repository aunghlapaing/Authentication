<?php 

#fcd23_db

$serverName = 'localhost';
$dbName = 'fcd23_db';
$userName = 'root';
$password = '';


try{
    $pdo = new PDO ("mysql:host=$serverName; dbname=$dbName;", $userName, $password);
    // echo "connection successful";

}catch(PDOException $error){
    echo "Connection error" . $error;
}

?>