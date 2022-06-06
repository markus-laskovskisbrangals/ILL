<?php
session_start();

//Pārbauda, vai lietotājs jau nav ielogojies
if(isset($_SESSION["is-logged-in"])){
    //header("Location: index.php");
}

$pdo = require 'database.php';

if(isset($_POST["login"])){
    $id = $_SESSION['user-id'];
    $sql = 'SELECT * FROM user WHERE id = :id;';

    //Iegūst lietotājvārd un paroli no datubāzes
    $statement = $pdo->prepare($sql);
    $statement->execute(array(
        ':id' => $id,
    ));
    $users = $statement->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./stylesheets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profils</title>
</head>
<body>
    <div class="banner"></div>
    <?php require './components/navigation.php'; ?>

    <ul class="user-option">
            <?php echo $_SESSION['firstname']; ?>
            <?php echo $_SESSION['lastname']; ?>
            <?php echo $_SESSION['username']; ?>

        </ul>
</body>
</html>