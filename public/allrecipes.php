<?php 
    session_start();
    require __DIR__ . '/../src/inc/header.php';
    require __DIR__ . '/../src/showrecipes.php';
    require __DIR__ . '/../src/libs/db_connect.php';
?>


<h1>Wszystkie przepisy</h1>

<div class="search-bar">
        <input type="text" placeholder="Znajdź przepis...">
        <a href="allrecipes.php">
            <img src="img/search-icon.svg" alt="" srcset="">
        </a>
</div>

<div class="recipes-list">
    <ul>
    <?php foreach ($limited_recipes as $recipe): 
        $recipe_id = $recipe['recipe_id'];   
        $recipe_name = $recipe["name"];
        $recipe_time = $recipe["time_description"];
        $recipe_photo = $recipe["photo"];
    ?>

        <li class="card">
            <figure class="card__thumb">
                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($recipe_photo); ?>" alt="pomidorowa" class="card__image">
                <figcaption class="card__caption">
                    <h2 class="card__title"><?php echo $recipe_name ?></h2>
                    <p class="card__snippet"><img src="img/time-icon.svg" class="card__icon"><?php echo $recipe_time ?> min</p>
                    <a href="singlerecipe.php?id=<?php echo $recipe_id ?> " class="card__button">Czytaj więcej</a>
                </figcaption>
            </figure>
        </li> 
    <?php endforeach; ?>

    </ul>
    
    <ul class="pagination" style="justify-content:center;">

        <?php for($page = 1; $page <= $number_of_pages; $page++): 
            
            $active = ($current_page == $page) ? "pagination__link-active" : " ";
        ?>  
                <a class="pagination__link__item" href="allrecipes.php?page=<?php echo $page; ?>">
                    <li class="pagination__link <?php echo $active; ?>">
                        <?php echo $page ?>
                    </li>  
                </a>
        <?php endfor; ?>
    </ul>
    
</div>

<?php include '../src/inc/footer.php';?>