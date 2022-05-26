<?php
        if(isset($_GET['search'])) {
            $filter_value = $_GET['search'];
            
            $query = "SELECT * FROM recipes WHERE name LIKE '%$filter_value%'";
            $result = mysqli_query($conn, $query);
            $final_recipes = array();
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
            foreach ($rows as $row) {
                array_push($final_recipes, $row);
            }
        }
        return $final_recipes;

    
?>