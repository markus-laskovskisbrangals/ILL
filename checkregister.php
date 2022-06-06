<?php
if(isset($_POST['user-add'])){
    if(empty($_POST['username'] || empty($_POST['password']) || empty($_POST['re-password']))){
        echo '<div class="alert alert-danger" role="alert">
        Please fill out all fields!
        </div>';
        return;
    }
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['re-password'];

    if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['username']) || empty($_POST['email'])) {
        echo '<div class="alert alert-danger" role="alert">
        Visi ievades lauki nav aizpildīti!
        </div>';
        return;
    }

    if(strlen($username) > 32){
        echo '<div class="alert alert-danger" role="alert">
        Jūsu lietotājvārds ir pārāk garš!
        </div>';
        return;
    }

    if(!$email.includes("@")){
        echo '<div class="alert alert-danger" role="alert">
        E-pasts tika ievadīts nepareizi!
        </div>';
        return;
    }

    if(strlen($password) < 8){
        echo '<div class="alert alert-danger" role="alert">
        Jūsu parole ir pārāk īsa!
        </div>';
        return;
    }

    if($password != $repassword){
        echo '<div class="alert alert-danger" role="alert">
        Paroles nesakrīt!
        </div>';
        return;
    }

    try {
        $sql = "INSERT INTO user (firstname, lastname, username, email, password) 
                VALUES (:firstname, :lastname, :username, :email :password)";
        $statement = $pdo->prepare($sql);
        $statement->execute(array(
            ':username' => $username,
            ':password' => md5($password)
        ));
        echo '<div class="alert alert-success" role="alert">
        User has been added!
        </div>';
    } catch(PDOException $e) {
        echo $e->getMessage();
        echo '<div class="alert alert-danger" role="alert">
        Error occured when adding user. Please try again later!
        </div>';
    }
    
}
?>