<?php
    
    function get_all_recipes($conn) {
        $query = "SELECT * FROM recipes 
        INNER JOIN times ON recipes.time_id = times.time_id
        INNER JOIN difficulties ON recipes.difficulty_id = difficulties.difficulty_id";
        $result = mysqli_query($conn, $query);

        $final_recipes = array();
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

        foreach ($rows as $row) {
            array_push($final_recipes, $row);
        }

        return $final_recipes;
    }

    function get_limited_recipes($conn, $limit) {

        $query = "SELECT * FROM recipes 
        INNER JOIN times ON recipes.time_id = times.time_id
        INNER JOIN difficulties ON recipes.difficulty_id = difficulties.difficulty_id
        LIMIT $limit";
        $result = mysqli_query($conn, $query);

        $final_recipes = array();
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

        foreach ($rows as $row) {
            array_push($final_recipes, $row);
        }

        return $final_recipes;
    }

    function get_filtered_recipes($conn, $filter_value) {

        $query = "SELECT * FROM recipes 
        INNER JOIN times ON recipes.time_id = times.time_id
        INNER JOIN difficulties ON recipes.difficulty_id = difficulties.difficulty_id
        WHERE name LIKE '%$filter_value%'";
        $result = mysqli_query($conn, $query);
        $final_recipes = array();
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

        foreach ($rows as $row) {
            array_push($final_recipes, $row);
        }
        return $final_recipes;
    }
   

    // function get_recipe_details($conn, $recipe_id) {
    //     $recipes = get_all_recipes($conn);

        

    //     foreach ($recipes as $recipe) {
    //         $recipe_id = $recipe['recipe_id'];   
    //         $recipe_name = $recipe["name"];
    //         $recipe_time = $recipe["time_description"];
    //         $recipe_photo = $recipe["photo"];
    //     }
    // }
?>