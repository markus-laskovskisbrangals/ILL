<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./stylesheets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reģistrēties</title>
</head>
<body>
    <div class="form-container">
        <h2>Reģistrēties</h2>
        <?php include 'checkregister.php'; ?>
        <form action="" method="POST">
            <input type="text" name="firstname" id="" placeholder="Vārds">
            <input type="text" name="lastname" id="" placeholder="Uzvārds">
            <input type="text" name="username" id="" placeholder="Lietotājvārds">
            <input type="email" name="email" id="" placeholder="E-pasts">
            <input type="password" name="password" id="" placeholder="Parole">
            <input type="password" name="repeat-password" id="" placeholder="Parole atkārtoti">
            <input type="submit" name="register" value="Reģistrēties" id="submit-button">
        </form>
        <p>Esi jau reģistrējies? <a href="login.php">Ienākt</a></p>
    </div>
</body>
</html>