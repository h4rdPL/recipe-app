<?php
    // REGISTER SECTION 
    // errors handler array
    $errors = array();

    if(isset($_REQUEST['register_user'])) {
        $db = mysqli_connect('localhost', 'root', '', 'database_project');
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
        if(empty($email)) {
            array_push($errors, "Nie podanu adresu email, spróbuj ponownie");
        } else if(empty($username)) {
            array_push($errors, "Nie podano nazwy użytkownika ");
        } else if(empty($password)) {
            array_push($errors, "Nie podano hasła, spróbuj ponownie");
        } 
        if(count($errors) == 0) {
           $password_encrypted = md5($password);
            $query = "INSERT INTO users (email,username, password) VALUES('$email', '$username', '$password_encrypted');";  
            echo $query;
            mysqli_query($db, $query);
            session_start();
            $_SESSION['username'] = $username;
            // $_SESSION['success'] = 'Hello'." ".$email." ".'You are registered now! now you can loging';
            header('location: signIn.php');
        }

    }

    // LOGIN SECTION


    if(isset($_REQUEST['login_user'])) {
        $db = mysqli_connect('localhost', 'root', '', 'database_project');
        // $username = mysqli_query($db, "SELECT * FROM users WHERE ")
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if(empty($email)) {
            array_push($errors, "Nie podano emailu, zaloguj się jeszcze raz!"); 
        } else if(empty($password)) {
            array_push($errors, "Nie podano hasła, zaloguj się jeszcze raz!");
        } 

        if(count($errors) == 0) {
        // database connection variables for sql query
        $password_encrypted = md5($password);
        $query = "SELECT * FROM users WHERE email='$email' AND password ='$password_encrypted';";
        $results = mysqli_query($db, $query);
        // echo $results;
        if(mysqli_num_rows($results)==1) {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "Hello"." ".$email." You are now logged in";
            header('location: index.php');
        } else {
            array_push($errors, "Zły login lub hasło, spróbuj ponownie");
        }
 
        }
    }



?> 