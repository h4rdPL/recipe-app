<?php


function check_if_exists($value, $table, $column, $conn) {
    $query = "SELECT * FROM $table WHERE $column = '$value';";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0) {
        return true;
    }
}
