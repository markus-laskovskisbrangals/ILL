<?php
if(isset($_POST['register'])){
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
    $password = $_POST['password'];
    $repassword = $_POST['repeat-password'];

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

    if(strlen($password) < 8){
        echo '<div class="alert alert-danger" role="alert">
        Jūsu parole ir pārāk īsa! Tai ir jābūt vismaz <strong>8</strong> simbolus garai!
        </div>';
        return;
    }

    if($password != $repassword){
        echo '<div class="alert alert-danger" role="alert">
        Paroles nesakrīt!
        </div>';
        return;
    }

    $pdo = require 'database.php';

    try {
        $sql = "INSERT INTO user (firstname, lastname, username, email, password) 
                VALUES (:firstname, :lastname, :username, :email, :password)";
        $statement = $pdo->prepare($sql);
        $statement->execute(array(
            ':firstname' => $firstname,
            ':lastname' => $lastname,
            ':username' => $username,
            ':email' => $email,
            ':password' => md5($password)
        ));
        header('Location: login.php');
    } catch(PDOException $e) {
        echo $e->getMessage();
        echo '<div class="alert alert-danger" role="alert">
        Datubāzes kļūda!
        </div>';
    }
    
}
?>