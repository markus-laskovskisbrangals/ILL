<?php

$pdo = require 'database.php';

if(isset($_POST['add-post'])){
    if(empty($_POST['post-name']) || empty($_POST['post-content'])){
        echo 'Aizpildi visus laukus!';
    }

    $title = $_POST['post-name'];
    $post_content = $_POST['post-content'];
    $author_id = $_SESSION['user-id'];

    if(strlen($title) > 255){
        echo 'Virsraksts ir pārāk garš!';
    }

    try {
        $sql = "INSERT INTO posts (post_title, post_content, author_id) 
                VALUES (:post_title, :post_content, :author_id)";
        $statement = $pdo->prepare($sql);
        $statement->execute(array(
            ':post_title' => $title,
            ':post_content' => $post_content,
            ':author_id' => $author_id
        ));
        header('Location: post.php?postid='.$pdo->lastInsertId());
    } catch(PDOException $e) {
        echo $e->getMessage();
        echo '<div class="alert alert-danger" role="alert">
        Datubāzes kļūda!
        </div>';
    }
}

?>