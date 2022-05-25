<?php 
    require __DIR__ . '/libs/db_connect.php'; 
    require __DIR__ . '/../src/libs/recipe_functions.php';

    $recipes = get_all_recipes($conn); 

    $recipes_amount = count($recipes);

    echo $recipes_amount;
    foreach ($recipes as $recipe) {
        printf($recipe["name"]);
    }

?>