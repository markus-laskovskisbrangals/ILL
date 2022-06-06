<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./stylesheets/style.css">
    <title>Outpost Forum</title>
</head>
<?php session_start(); ?>
<body>
    <div class="banner"></div>
    <?php require './components/navigation.php'; ?>
    <div class="container">
        <div class="namedays">
            <p>Vārda dienas šodien: Markus</p>
        </div>
        <div class="main-content">
            <div class="content-container">
                <div class="chat-widget">
                    <div class="widget-header">
                        <p>Čats</p>
                    </div>
                    <div class="widget-body">
                        <div class="message-input">
                            <form method="post" action="Page2.php">
                                <input type="textarea" name = "input"/>
                                <input type="submit" value="Send"/>
                            </form>
                            <iframe src="Page1.php" width="450" height="250" scrolling="yes">
                            </iframe>
                        </div>
                    </div>
                </div>
                <div class="chat-widget">
                    <div class="widget-header">
                        <p>Foruma ieraksti</p>
                    </div>
                    <div class="widget-body">
                        <div class="forum-post">
                            <div class="image"></div>
                            <div class="post-info">
                                <a href="post.php">Labdien visiem!</a>
                                <p>Pievienoja <a href="" id="user-link">Lucas2k</a></p>
                            </div>
                        </div>
                        <?php
                        
                        $pdo = require 'database.php';
                        try{
                            $sql = "SELECT post_id, post_title, author_id FROM posts";
                            $statement = $pdo->prepare($sql);
                            $statement->execute();
                        }catch(PDOException $e) {
                            echo $e->getMessage();
                            echo '<div class="alert alert-danger" role="alert">
                            Datubāzes kļūda!
                            </div>';
                        }
                        $posts = $statement->fetchAll(PDO::FETCH_ASSOC);

                        for($i = 0; $i < sizeof($posts); $i++){
                            echo '
                            
                            <div class="forum-post">
                            <div class="image"></div>
                                <div class="post-info">
                                    <a href="post.php?postid='.$posts[sizeof($posts) - $i - 1]['post_id'].'">'.$posts[sizeof($posts) - $i - 1]['post_title'].'</a>
                                    <p>Pievienoja <a href="" id="user-link">Lucas2k</a></p>
                                </div>
                            </div>

                            ';
                        }
                        
                        ?>
                    </div>
                </div>
            </div>
            <div class="side-container">
                <?php if (isset($_SESSION['is-logged-in'])): ?>
                <div class="new-thread">
                    <a href="newpost.php" class="thread-button">+ Pievienot jaunu ierakstu</a>
                </div>
                <?php endif; ?>
                <div class="side-widget">
                    <div class="widget-header">
                        <p>Jaunkākie ieraksti</p>
                    </div>
                    <div class="widget-body">
                        <div class="mini-post"><a href="">Labdien visiem!</a></div>
                        <div class="mini-post"><a href="">Kur nopirkt PSP bateriju?</a></div>
                        <div class="mini-post"><a href="">Vai ir vērts izmantot torrentu 2022 gadā?</a></div>
                    </div>
                </div>
                <div class="advertisment">
                    <h2>Vieta reklāmai</h2>
                </div>
            </div>
        </div>
    </div>
</body>
</html>