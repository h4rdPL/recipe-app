<?php

    function get_all_recipes($conn) {

        $query = "SELECT * FROM recipes";
        $result = mysqli_query($conn, $query);

        $final_recipes = array();
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach ($rows as $row) {
            array_push($final_recipes, $row);
        }

        return $final_recipes;
    }

    function get_recipe_time($conn) {
        
    }

    function get_recipe_difficulty($conn) {
        
    }

?>