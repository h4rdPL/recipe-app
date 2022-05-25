<?php 
    include '../src/inc/header.php';
    require __DIR__ . '/../src/singlerecipe.php';

?>
<article>
    <div class="recipe-image__container">
        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($recipe_photo); ?>" alt="">
    </div>
    <div class="recipe-details">
        <h1><?php echo $recipe_name ?></h1>
        
        <div class="recipe-categories">
            <div class="recipe-categories__item">
                <img src="img/email-icon.svg" alt="">
                <p><?php echo $recipe_time ?> min</p>
            </div>
            <div class="recipe-categories__item">
                <img src="img/email-icon.svg" alt="">
                <p><?php echo $recipe_difficulty ?></p>
            </div>
            
        </div>

        <div class="recipe-description">
            <?php echo $recipe_description ?>
        </div>
    </div>
</article>

<?php include '../src/inc/footer.php';?>