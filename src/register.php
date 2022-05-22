<?php
    require __DIR__ . '/libs/db_connect.php'; 
    // dodanie tablicy, która będzie obsługiwała błędy
    $errors = array();
    if(isset($_REQUEST['register'])) {
        include "../src/libs/db_connect.php";
        // ta funkcja zmienia znaki specjalne w kodzie, do użytku przez instrukcje SQL
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $password_repeat = mysqli_real_escape_string($conn, $_POST['password2']);

        // walidacja 
        if(empty($username)) {
            array_push($errors, "Nie podano nazwy użytkownika");
        } else if (empty($email)) {
            array_push($errors, "Nie podano adresu email");
        } else if (empty($password)) {
            array_push($errors, "Nie podano hasła");
        } else if (empty($password_repeat)) {
            array_push($errors, "Nie wprowadzono hasła ponownie");
        } else if ($password !== $password_repeat) {
            array_push($errors, "Hasło zostało wprowadzono niepoprawnie, spróbuj ponownie");
        }

        if(count($errors) == 0) {
           $password_encrypted = md5($password);
           $query = "INSERT INTO users (username, email, password) VALUES('$username', '$email', '$password_encrypted');";  
           mysqli_query($conn, $query);
           header('location: login.php');
        }
    }
    
?>