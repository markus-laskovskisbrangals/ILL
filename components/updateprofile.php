<?php
if(isset($_POST['save-new-info'])){
    if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['username']) || empty($_POST['color'])){
        echo '<div class="alert alert-danger" role="alert">
        Visi ievades lauki nav aizpildīti!
        </div>';
        return;
    }

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $color = $_POST['color'];
    $userid = $_SESSION['user-id'];
    

    if(strlen($username) > 32){
        echo '<div class="alert alert-danger" role="alert">
        Jūsu lietotājvārds ir pārāk garš!
        </div>';
        return;
    }

    $pdo = require 'database.php';

    try {
        $sql = "UPDATE user SET firstname = :firstname, lastname = :lastname, username = :username, user_color = :color WHERE id = :id";
        $statement = $pdo->prepare($sql);
        $statement->execute(array(
            ':firstname' => $firstname,
            ':lastname' => $lastname,
            ':username' => $username,
            ':color' => $color,
            ':id' => $userid
        ));
        header('Location: profile.php?profileid='.$userid);
    } catch(PDOException $e) {
        echo $e->getMessage();
        echo '<div class="alert alert-danger" role="alert">
        Datubāzes kļūda!
        </div>';
    }
    
}
?>