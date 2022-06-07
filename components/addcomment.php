<?php

$pdo = require 'database.php';

if(!isset($_SESSION['is-logged-in'])){
    header('Location: login.php');
}

if(isset($_POST['add-comment'])){
    if(empty($_POST['comment-text'])){
        echo 'Nevar pievienot tukšu komentāru!';
    }

    $authorid = $_SESSION['user-id'];
    $postid = $_GET['postid'];
    $comment = $_POST['comment-text'];

    if(strlen($comment) > 255){
        echo 'Komentārs ir pārāk garš!';
        return;
    }

    try {
        $sql = "INSERT INTO comments (author_id, post_id, comment) 
                VALUES (:author_id, :post_id, :comment)";
        $statement = $pdo->prepare($sql);
        $statement->execute(array(
            ':author_id' => $authorid,
            ':post_id' => $postid,
            ':comment' => $comment
        ));
    } catch(PDOException $e) {
        echo $e->getMessage();
        echo '<div class="alert alert-danger" role="alert">
        Datubāzes kļūda!
        </div>';
    }
}

?>