<?php
    require __DIR__ . '/../src/libs/db_connect.php'; 
    require __DIR__ . '/../src/libs/helpers.php'; 

    

    $recipe_ingredient = $_POST["recipe_ingredient"];
    $recipe_quantity = $_POST["recipe_quantity"];
    $recipe_unit = $_POST["recipe_unit"];

    if (!check_if_exists($recipe_ingredient, "ingredients", "ingredients_name", $conn)) {

        $ingredients_query = "INSERT INTO ingredients 
        VALUE (
            NULL, '$recipe_ingredient'
        );";

        mysqli_query($conn, $ingredients_query);
    };

    if (!check_if_exists($recipe_quantity, "measurement_qty", "qty_amount", $conn)) {

        $ingredients_query = "INSERT INTO measurement_qty 
        VALUE (
            NULL, '$recipe_quantity'
        );";

        mysqli_query($conn, $ingredients_query);
    };

    if (!check_if_exists($recipe_unit, "measurement_units", "measurement_name", $conn)) {

        $ingredients_query = "INSERT INTO measurement_units 
        VALUE (
            NULL, '$recipe_unit'
        );";

        mysqli_query($conn, $ingredients_query);
    };

    echo "<span class='ingredient-data'><span name='ingredient-name'>$recipe_ingredient</span> <span name='ingredient-quantity'>$recipe_quantity</span> <span name='ingredient-unit'>$recipe_unit</span></span>";
?>