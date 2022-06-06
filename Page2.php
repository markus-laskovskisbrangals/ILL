<?php

$host = 'localhost';
$db = 'ttkd';
$user = 'root';
$pass = '';
$input = $_POST['input'];

$connection = 'mysql:host='.$host.';dbname='.$db.';charset=UTF8;';

try{
    //Jauna PDO objekta izveida
    $pdo = new PDO($connection, $user, $pass);
    return $pdo;

} catch(PDOException $e){
    echo 'Pieslēgums datubāzei neizdevās: '.$e;
}

$sql = "INSERT INTO chat (message) VALUES ($input)";

if ($connection->query($sql) === TRUE) {
    header("location: index.php")
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();
?>