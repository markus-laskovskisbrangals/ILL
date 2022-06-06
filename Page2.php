<?php

session_start();

$pdo = require 'database.php';

if(isset($_POST['send-message'])){
    $input = $_POST['chat-input'];
    $user = $_SESSION['user-id'];

    try{
        $sql = "INSERT INTO chat (message, user_id) VALUES (:input, :user_id)";
        $statement = $pdo->prepare($sql);
        $statement->execute(array(
            ':input' => $input,
            ':user_id' => $user
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