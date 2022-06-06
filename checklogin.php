<?php
session_start();

//Pārbauda, vai lietotājs jau nav ielogojies
if(isset($_SESSION["is-logged-in"])){
    header("Location: index.php");
}

$pdo = require 'database.php';

if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = 'SELECT id, username, password FROM user WHERE username = :username AND password = :password;';

    //Iegūst lietotājvārd un paroli no datubāzes
    $statement = $pdo->prepare($sql);
    $statement->execute(array(
        ':username' => $username,
        ':password' => md5($password)
    ));
    $users = $statement->fetchAll(PDO::FETCH_ASSOC);

    if($users){
        //Ja lietotāja dati ir pareizi, lietotājs ir ielogojies un tiek pārvirzīts
        $_SESSION["user-id"] = $users[0]['id'];
        $_SESSION["username"] = $users[0]['username'];
        $_SESSION["is-logged-in"] = true;
        header("Location: index.php");
    }else{
        echo '<div class="alert alert-danger" role="alert">
        Nepareizs lietotājvārds un/vai parole!
        </div>';
    }
}

?>