<?php
    require __DIR__ . '/libs/db_connect.php'; 
    require __DIR__ . '/../src/libs/recipe_functions.php';

   $recipes_per_page = 6;
   $all_recipes = get_all_recipes($conn);

   
   $number_of_recipes = count($all_recipes);

   $number_of_pages = ceil ($number_of_recipes / $recipes_per_page);

    if( !isset($_GET['page']) ) {
        $current_page = 1;
    } else {
        $current_page = $_GET['page'];
    }   

    $first_recipe_on_page = ($current_page - 1) * $recipes_per_page;
    $limit = $first_recipe_on_page . ',' . $recipes_per_page;
    $limited_recipes = get_limited_recipes($conn, $limit);

    $limited_recipes_count = count($limited_recipes);
    

?>