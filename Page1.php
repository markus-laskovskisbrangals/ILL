<?php

$host = 'localhost';
$db = 'ttkd';
$user = 'root';
$pass = '';

$connection = 'mysql:host='.$host.';dbname='.$db.';charset=UTF8;';

try{
    //Jauna PDO objekta izveida
    $pdo = new PDO($connection, $user, $pass);
    return $pdo;

} catch(PDOException $e){
    echo 'Pieslēgums datubāzei neizdevās: '.$e;
}

$sql = "SELECT 'message' FROM chat";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "".$row("message"). "<br><br>";
    }
} else {
    echo "No messages have been exchanged yet";
}
$connection->close();
?>