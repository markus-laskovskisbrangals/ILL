<?php
if(isset($_POST['update-password'])){
    if(empty($_POST['password'])){
        echo '<div class="alert alert-danger" role="alert">
        Visi ievades lauki nav aizpildīti!
        </div>';
        return;
    }

    $password = $_POST['password'];    

    if(strlen($password) < 8){
        echo '<div class="alert alert-danger" role="alert">
        Jūsu parole ir pārāk īsa!
        </div>';
        return;
    }

    $pdo = require 'database.php';

    try {
        $sql = "UPDATE user SET password = :password WHERE id = :id";
        $statement = $pdo->prepare($sql);
        $statement->execute(array(
            ':password' => $password,

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