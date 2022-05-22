<?php
$errors = array();

if(isset($_REQUEST['login'])) {
    include '../src/libs/db_connect.php';

    $email_or_username = mysqli_real_escape_string($conn, $_POST['email-username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(empty($email_or_username)) {
        array_push($errors, "Nie podano adresu email, spróbuj jeszcze raz");
    } else if (empty($password)) {
        array_push($errors, "Nie podano hasła, spróbuj jeszcze raz");
    }

    if(count($errors) == 0) {
        $password_encrypted = md5($password);
        $query = "SELECT * FROM users WHERE (email='$email_or_username' OR username='$email_or_username') AND password ='$password_encrypted';";
        $results = mysqli_query($conn, $query);

        $username_query = "SELECT username FROM users WHERE (email='$email_or_username' OR username='$email_or_username') AND password ='$password_encrypted';";

        $result = mysqli_query($conn, $username_query);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              $username = $row["username"];
            }
        } else {
            echo "0 results";
        }


        if(mysqli_num_rows($results)) {
            header("location: index.php");
            session_start();
            $_SESSION['username'] = $username;
        } else {
            array_push($errors, "Zły login lub hasło, spróbuj ponownie");
        }
    }
}

?>