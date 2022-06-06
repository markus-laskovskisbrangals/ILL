<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./stylesheets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izveidot jaunu foruma ierakstu</title>
</head>
<body>
    <div class="banner"></div>
    <?php require './components/navigation.php'; ?>
    <div class="container">
        <div class="chat-widget" style="display: inline-block; margin: 35px;">
            <div class="widget-header">
                <p>Pievienot jaunu foruma ierakstu</p>
            </div>
            <div class="widget-body">
                <div class="newpost">
                    <form action="" method="POST">
                        <label for="post-name">Virsraksts:</label>
                        <input type="text" name="post-name" id="post-name" required="true">
                        <label for="post-content">Ieraksta teksts:</label>
                        <textarea name="post-content" id="" cols="30" rows="10" resize="false" required="true"></textarea>
                        <button type="submit" id="submit-button">Pievienot ierakstu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>