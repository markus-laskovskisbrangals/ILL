<?php
session_start();

$pdo = require 'database.php';

$id = $_GET['profileid'];
$sql = 'SELECT * FROM user WHERE id = :id;';

$statement = $pdo->prepare($sql);
$statement->execute(array(
    ':id' => $id,
));
$users = $statement->fetchAll(PDO::FETCH_ASSOC);

$username = $users[0]['username'];
$firstname = $users[0]['firstname'];
$lastname = $users[0]['lastname'];
$email = $users[0]['email'];

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
    <div class="container">
        <div class="profileinfo">
            <div class="chat-widget" style="display: inline-block; margin: 35px;">
                <div class="widget-header">
                    <p><?php echo $username; ?> profils</p>
                </div>
                <div class="profilepicture">
                    <p>profile picture</p>
                </div>
                <div class="edit-profile">
                    <a href="editprofile.php" class="thread-button">Labot informāciju</a>
                </div>
                <div class="edit-password">
                    <a href="editprofile.php" class="thread-button">Mainīt paroli</a>
                </div>
                <div class="profileinfotext">
                    <div class="widget-body">
                        <br><p>Vārds: <?php echo $firstname; ?></p><br>
                        <p>Uzvārds: <?php echo $lastname; ?></p><br>
                        <p>Lietotājvārds: <?php echo $username; ?></p><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>