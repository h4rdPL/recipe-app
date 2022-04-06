<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'database_project';
    $conn = mysqli_connect($host, $user, $password, $db);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

    //   $sql = "CREATE TABLE MyGuests (
    //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     firstname VARCHAR(30) NOT NULL,
    //     lastname VARCHAR(30) NOT NULL,
    //     email VARCHAR(50),
    //     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    //     )";
    //     if (mysqli_query($conn, $sql)) {
    //       echo "Table MyGuests created successfully";
    //     } else {
    //       echo "Error creating table: " . mysqli_error($conn);
    //     }
        
    //     mysqli_close($conn);  

?>