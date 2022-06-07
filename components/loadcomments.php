<?php

$pdo = require 'database.php';

$postid = $_GET['postid'];

try{
    $sql = "SELECT comments.comment, comments.author_id, user.username, user.user_color FROM comments INNER JOIN user ON comments.author_id = user.id WHERE comments.post_id = :postid";
    $statement = $pdo->prepare($sql);
    $statement->execute(array(
        ':postid' => $postid
    ));
    $comments = $statement->fetchAll(PDO::FETCH_ASSOC);

    echo '<h2>Komentāri: '.sizeof($comments).'</h2>';

    for($i = 0; $i < sizeof($comments); $i++){
        echo '
        
        <div class="comment-block">
            <div class="comment-author">
                <a href="profile.php?profileid='.$comments[sizeof($comments) - $i - 1]['author_id'].'" style="color: '.$comments[sizeof($comments) - $i - 1]['user_color'].'">'.$comments[sizeof($comments) - $i - 1]['username'].'</a>
            </div>
            <div class="comment-content">
                <p>'.$comments[sizeof($comments) - $i - 1]['comment'].'</p>
            </div>
        </div>
        
        ';
    }
}catch(PDOException $e) {
    echo $e->getMessage();
    echo '<div class="alert alert-danger" role="alert">
    Datubāzes kļūda!
    </div>';
}

?>