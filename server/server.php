<?php
    // REGISTER SECTION 
    // errors handler array
    $errors = array();

    if(isset($_REQUEST['register_user'])) {
        $db = mysqli_connect('localhost', 'root', '', 'database_project');
    
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if(empty($email)) {
            array_push($errors, "Nie podanu adresu email, spróbuj ponownie");
        } else if(empty($password)) {
            array_push($errors, "Nie podano hasła, spróbuj ponownie");

        } 
        
        
        if(count($errors) == 0) {
           $password_encrypted = md5($password);
            $query = "INSERT INTO users (email, password) VALUES('$email', '$password_encrypted');";  
            echo $query;
            mysqli_query($db, $query);
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['success'] = 'Hello'." ".$email." ".'You are registered now!';
            header('location: index.php');
        }

    }

    // LOGIN SECTION




?> 