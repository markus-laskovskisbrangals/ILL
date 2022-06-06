<?php

$pdo = require 'database.php';

$postid = $_GET['postid'];

try{
    $sql = "SELECT post_title, post_content, author_id FROM posts WHERE post_id=:postid";
    $statement = $pdo->prepare($sql);
    $statement->execute(array(
        ':postid' => $postid
    ));
}catch(PDOException $e) {
    echo $e->getMessage();
    echo '<div class="alert alert-danger" role="alert">
    Datubāzes kļūda!
    </div>';
}
$post = $statement->fetchAll(PDO::FETCH_ASSOC);

$post_title = $post[0]['post_title'];
$post_content = $post[0]['post_content'];
$author_id = $post[0]['author_id'];

try{
    $sql = "SELECT id, username FROM user WHERE id=:userid";
    $statement = $pdo->prepare($sql);
    $statement->execute(array(
        ':userid' => $author_id
    ));
}catch(PDOException $e) {
    echo $e->getMessage();
    echo '<div class="alert alert-danger" role="alert">
    Datubāzes kļūda!
    </div>';
}
$user = $statement->fetchAll(PDO::FETCH_ASSOC);
$username = $user[0]['username'];
$profileid = $user[0]['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./stylesheets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $post_title ?></title>
</head>
<body>
<div class="banner"></div>
    <?php require './components/navigation.php'; ?>
    <div class="container">
        <div class="chat-widget" style="display: inline-block; margin: 35px;">
            <div class="widget-header">
                <p><?php echo $post_title ?></p>
            </div>
            <div class="widget-body">
                <div class="post-text">
                    <p><?php echo $post_content ?></p>
                </div>
                <div class="author-text">
                    <p>Pievienoja <a href="profile.php?profileid=<?php echo $profileid; ?>"><?php echo $username; ?></a></p>
                </div>
            </div>
        </div>
        <div class="chat-widget" style="display: inline-block; margin: 35px;">
            <div class="widget-header">
                <p>Komentāri</p>
            </div>
            <div class="widget-body">
                <div class="newpost">
                    <form action="" method="POST">
                        <label for="comment-text">Pievienot komentāru:</label>
                        <input type="text" name="comment-text" id="">
                        <button type="submit" id="submit-button">Pievienot komentāru</button>
                    </form>
                </div>
                <div class="comments">
                    <h2>Komentāri: 1</h2>
                    <div class="comment-block">
                        <div class="comment-author">
                            <img src="./assets/images/bomzis.png" alt="profile picture">
                            <a href="">xXdussydestroyerXx</a>
                        </div>
                        <div class="comment-content">
                            <p>Mans pirmais komentārs</p>
                        </div>
                    </div>
                    <div class="comment-block">
                        <div class="comment-author">
                            <img src="./assets/images/bomzis.png" alt="profile picture">
                            <a href="">xXdussydestroyerXx</a>
                        </div>
                        <div class="comment-content">
                            <p>Mans otrais komentārs</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>