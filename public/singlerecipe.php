<?php 
    include '../src/inc/header.php';
    require __DIR__ . '/../src/singlerecipe.php';

?>
<article>
    <div class="recipe-image__container">
        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($recipe_photo); ?>" alt="">
    </div>

    <div class="recipe-details">
    
        <div class="recipe-categories">
            <div class="recipe-categories__item">
                <img src="img/email-icon.svg" alt="">
                <p><?php echo $recipe_time ?> min</p>
            </div>
            <h1><?php echo $recipe_name ?></h1>
            <div class="recipe-categories__item">
                <img src="img/email-icon.svg" alt="">
                <p><?php echo $recipe_difficulty ?></p>
            </div>
        </div>

        <div class="recipe-ingredients">
            <h2 class="recipe-title">
                Składniki
            </h2>

            <ul class="ingredients__list">
                    <li class="ingredients__list__item">
                        Jajka 
                        <span>
                            2 szt
                        </span>
                    </li>
                    <li class="ingredients__list__item">
                        Mąka 
                        <span>
                            500 gram
                        </span>
                    </li>
                    <li class="ingredients__list__item">
                        Drożdże 
                        <span>
                            25 gram
                        </span>
                    </li>
                    <li class="ingredients__list__item">
                        Mleko 
                        <span>
                            400 ml
                        </span>
                    </li>
                </ul>
        </div>

        <div class="recipe-description">
            <h2 class="recipe-title">
                Sposób przygotowania
            </h2>
            <?php echo $recipe_description ?>
        </div>
    </div>
</article>

<?php include '../src/inc/footer.php';?>