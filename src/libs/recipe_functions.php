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


?>