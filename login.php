<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./stylesheets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
    <div class="form-container">
        <h2>Log In</h2>
        <?php include 'checklogin.php'; ?>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Lietotājvārds">
            <input type="password" name="password" placeholder="Parole">
            <input type="submit" name="login" value="Ienākt" id="submit-button">
        </form>
        <p>Not a user? <a href="register.php">Sign up!</a></p>
    </div>
</body>
</html>