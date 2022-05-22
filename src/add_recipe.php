<?php
    require __DIR__ . '/libs/db_connect.php'; 
    require __DIR__ . '/libs/helpers.php'; 
    require __DIR__ . '/libs/validations.php'; 

    if(isset($_REQUEST["add-recipe"])) {
        $recipe_name = mysqli_real_escape_string($conn, $_POST['recipe-name']);
        $recipe_preptime = mysqli_real_escape_string($conn, $_POST['recipe-preptime']);
        $recipe_difficulty = mysqli_real_escape_string($conn, $_POST['recipe-difficulty']);
        $recipe_ingredients = mysqli_real_escape_string($conn, $_POST['recipe-ingredients']);
        $recipe_description = mysqli_real_escape_string($conn, $_POST['recipe-description']);
        $recipe_photo = mysqli_real_escape_string($conn, $_POST['recipe-photo']);
        
        if (!check_if_exists($recipe_difficulty, "difficulties", "difficulty_type", $conn)) {

            $difficulty_query = "INSERT INTO difficulties 
            VALUE (
                NULL, '$recipe_difficulty'
            );";
    
            mysqli_query($conn, $difficulty_query);
        };

        if (!check_if_exists($recipe_preptime, "times", "time_description", $conn)) {
            
            $time_query = "INSERT INTO times 
            VALUE (
                NULL, '$recipe_preptime'
            );";
            mysqli_query($conn, $time_query);

        };

        
        $recipe_query = "INSERT INTO recipes (name, description, time_id, difficulty_id) 
        VALUES (
            '$recipe_name', '$recipe_description', (SELECT time_id FROM times WHERE time_description='$recipe_preptime'), (SELECT difficulty_id FROM difficulties WHERE difficulty_type='$recipe_difficulty')
        );";

        mysqli_query($conn, $recipe_query);
    }
?>