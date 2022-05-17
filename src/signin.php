<?php
$errors = array();

if(isset($_REQUEST['login'])) {
    include '../src/libs/db_connect.php';

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(empty($email)) {
        array_push($errors, "Nie podano adresu email, spróbuj jeszcze raz");
    } else if (empty($password)) {
        array_push($errors, "Nie podano hasła, spróbuj jeszcze raz");
    }

    if(count($errors) == 0) {
        $password_encrypted = md5($password);
        $query = "SELECT * FROM users WHERE email='$email' AND password ='$password_encrypted';";
        $results = mysqli_query($conn, $query);
        if(mysqli_num_rows($results)) {
            header("location: index.php");
            session_start();
            $_SESSION['email'] = $email;
        } else {
            array_push($errors, "Zły login lub hasło, spróbuj ponownie");
        }
    }
}

?>