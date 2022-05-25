<?php
    require __DIR__ . '/libs/db_connect.php'; 


    $id = $_GET['id'];
    $recipe_query = "SELECT * FROM recipes 
    INNER JOIN times ON recipes.time_id = times.time_id
    INNER JOIN difficulties ON recipes.difficulty_id = difficulties.difficulty_id 
    WHERE recipe_id = '$id'";
    $recipes_result = mysqli_query($conn, $recipe_query);

    if (mysqli_num_rows($recipes_result) > 0) {
        while($recipes = mysqli_fetch_assoc($recipes_result)) {
            $recipe_id = $recipes['recipe_id'];
            $recipe_name = $recipes['name'];
            $recipe_description = $recipes['description'];
            $recipe_time = $recipes['time_description'];
            $recipe_difficulty = $recipes['difficulty_type'];
            $recipe_photo = $recipes['photo'];
        }

    } 
?>