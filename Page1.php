<?php

$pod = require 'database.php';

$sql = "SELECT message FROM chat";
$statement = $pdo->prepare($sql);
$statement->execute();
$messages = $statement->fetchAll(PDO::FETCH_ASSOC);

if (sizeof($messages)) {
    for($i = 0;  $i < sizeof($messages); $i++) {
        echo "<p style='color: #fff;'>".$messages[$i]['message']. "</p>";
    }
} else {
    echo "No messages have been exchanged yet";
}
?>