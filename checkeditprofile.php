<?php
if(isset($_POST['editprofile'])){
    if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['repeat-password'])){
        echo '<div class="alert alert-danger" role="alert">
        Visi ievades lauki nav aizpildīti!
        </div>';
        return;
    }
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    if(strlen($username) > 32){
        echo '<div class="alert alert-danger" role="alert">
        Jūsu lietotājvārds ir pārāk garš!
        </div>';
        return;
    }

    if (strpos($email, '@') == false) {
        echo '<div class="alert alert-danger" role="alert">
        Lūdzu, ievadiet derīgu E-pasta adresi!
        </div>';
        return;
    }

    $pdo = require 'database.php';

    try {
        $sql = "UPDATE TABLE user SET firstname=:firstname, lastname=:lastname, username=:username, email=:email,
        WHERE id=:id";
        $statement = $pdo->prepare($sql);
        $statement->execute(array(
            ':firstname' => $firstname,
            ':lastname' => $lastname,
            ':username' => $username,
            ':email' => $email,
        ));
        header('Location: profile.php');
    } catch(PDOException $e) {
        echo $e->getMessage();
        echo '<div class="alert alert-danger" role="alert">
        Datubāzes kļūda!
        </div>';
    }
    
}
?>