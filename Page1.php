<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="main">
        <?php

        $pod = require 'database.php';

        $sql = "SELECT message FROM chat";
        $statement = $pdo->prepare($sql);
        $statement->execute();
        $messages = $statement->fetchAll(PDO::FETCH_ASSOC);

        if (sizeof($messages)) {
            for($i = 0;  $i < sizeof($messages); $i++) {
                echo "<p style='color: #fff;'>".$messages[$i]['message']. "</p>";
            }
        } else {
            echo "No messages have been exchanged yet";
        }
        ?>
    </div>
</body>
<script>
    $(document).ready(function() {
        setTimeout(function() {
            ("#main").load(location.href + " #main");
        }, 500);
    });
</script>
</html>