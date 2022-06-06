<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./stylesheets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labdien visiem!</title>
</head>
<body>
<div class="banner"></div>
    <?php require './components/navigation.php'; ?>
    <div class="container">
        <div class="chat-widget" style="display: inline-block; margin: 35px;">
            <div class="widget-header">
                <p>Labdien visiem!</p>
            </div>
            <div class="widget-body">
                <div class="post-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipiscing elit duis tristique. A erat nam at lectus urna duis convallis convallis. Enim lobortis scelerisque fermentum dui faucibus in ornare quam. Aliquam etiam erat velit scelerisque in dictum. Commodo ullamcorper a lacus vestibulum sed arcu non odio. Adipiscing tristique risus nec feugiat in fermentum posuere urna. Pellentesque diam volutpat commodo sed egestas egestas fringilla. Cursus vitae congue mauris rhoncus aenean. Adipiscing elit ut aliquam purus sit amet. Euismod elementum nisi quis eleifend quam adipiscing vitae. A lacus vestibulum sed arcu non. Volutpat commodo sed egestas egestas fringilla phasellus. Semper risus in hendrerit gravida rutrum quisque non tellus orci.

                    Magna sit amet purus gravida quis blandit turpis. Sagittis id consectetur purus ut faucibus. Amet venenatis urna cursus eget nunc scelerisque viverra. Duis ut diam quam nulla porttitor massa id. Adipiscing elit ut aliquam purus sit amet luctus venenatis. Enim blandit volutpat maecenas volutpat blandit aliquam etiam erat. Purus sit amet volutpat consequat. Enim nulla aliquet porttitor lacus luctus accumsan tortor posuere ac. Eget nulla facilisi etiam dignissim. Orci eu lobortis elementum nibh. Dignissim convallis aenean et tortor at risus viverra. Laoreet sit amet cursus sit amet dictum. Maecenas sed enim ut sem viverra aliquet eget sit amet.</p>
                </div>
                <div class="author-text">
                    <p>Pievienoja <a href="">xXdussydestroyerXx</a></p>
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