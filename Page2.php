<?php

$pdo = require 'database.php';

if(isset($_POST['send-message'])){
    $input = $_POST['chat-input'];

    try{
        $sql = "INSERT INTO chat (message) VALUES (:input)";
        $statement = $pdo->prepare($sql);
        $statement->execute(array(
            ':input' => $input
        ));
        header('Location: index.php');
    }catch(PDOException $e) {
        echo $e->getMessage();
        echo '<div class="alert alert-danger" role="alert">
        Datubāzes kļūda!
        </div>';
    }
    
}


?>