<?php

session_start();

if( isset($_SESSION['user_id']) ){
	//header("location: index.php");
}

require 'database.php';

$message = '';

if(!empty($_POST['username']) && !empty($_POST['password'])):
	
	$sql = "INSERT INTO user (firstname, lastname, username, email, password) VALUES (:firstname, :lastname, :username, :email, :password)";
	$stmt = $conn->prepare($sql);

    $stmt->bindParam(':firstname', $_POST['firstname']);
    $stmt->bindParam(':lastname', $_POST['lastname']);
	$stmt->bindParam(':username', $_POST['username']);
    $stmt->bindParam(':email', $_POST['email']);
	$stmt->bindParam(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));

	if( $stmt->execute() ):
		$message = 'You just signed up, congratulations!';
	else:
		$message = 'You made a mistake, try again!';
	endif;

endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./stylesheets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reģistrēties</title>
</head>
<body>
    <div class="form-container">
        <h2>Reģistrēties</h2>
        <form action="" method="POST">
            <input type="text" name="firstname" id="" placeholder="Vārds">
            <input type="text" name="lastname" id="" placeholder="Uzvārds">
            <input type="text" name="username" id="" placeholder="Lietotājvārds">
            <input type="email" name="email" id="" placeholder="E-pasts">
            <input type="password" name="password" id="" placeholder="Parole">
            <input type="password" name="repeat-password" id="" placeholder="Parole atkārtoti">
            <input type="submit" value="Reģistrēties" id="submit-button">
        </form>
        <p>Esi jau reģistrējies? <a href="login.php">Ienākt</a></p>
    </div>

    <script defer>
            function validateForm() {
                boolval isGood = false;
                const s = document.getElementById('submit')
                const name = document.getElementById('name').value
                const surname = document.getElementById('surname').value
                const username = document.getElementById('username').value
                const email = document.getElementById('email').value
                const age = document.getElementById('age').value

                event.preventDefault(); 

                if (name == "" || surname == "" || username == "" || email == "" || age == "") {
                    alert('Fill the empty fields!')
                    return
                }
                if (username.length < 5) {
                    alert('Username is required to be more than 5 characters!')
                    return
                }
                if (!email.includes("@")) {
                    alert('Wrong email format!')
                    return
                }
                if (age < 18 || age > 110) {
                    alert('Only age of 18 to 110 is allowed!')
                    return
                }
                isGood = true;
            }
        </script>
</body>
</html>