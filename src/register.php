<?php
    require __DIR__ . '/libs/db_connect.php'; 
    // dodanie tablicy, która będzie obsługiwała błędy
    $errors = array();
    if(isset($_REQUEST['register'])) {
        include "../src/libs/db_connect.php";
        // ta funkcja zmienia znaki specjapne w kodzie, do użytku przez instrukcje SQL
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $password_repeat = mysqli_real_escape_string($conn, $_POST['password2']);

        // walidacja 
        if(empty($email)) {
            array_push($errors, "Nie podano adresu email");
        } else if(empty($password)) {
            array_push($errors, "Nie podano hasła");
        } else if(empty($password_repeat)) {
            array_push($errors, "Nie sprawdzono ponownie hasła");
        } else if($password !== $password_repeat) {
            array_push($errors, "Hasła nie są zgodne, spróbuj ponownie");
        }

        if(count($errors) == 0) {
           $password_encrypted = md5($password);
           $query = "INSERT INTO users (email, password) VALUES('$email','$password_encrypted');";  
           mysqli_query($conn, $query);
           header('location: signin.php');
        }
    }
    
?>