<?php 
    session_start(); 
    include '../src/inc/header.php';
    require __DIR__ . '/../src/showrecipes.php';
?>

    <div class="welcome-message">
        <?php if(isset($_SESSION['username'])): ?>

        <h2>
             <?php echo 'Cześć, '. $_SESSION['username']; ?> 
        </h2>

        <?php else: ?>
            <h2>
                Cześć,
            </h2>
            <?php endif ?>
        <h2>na co masz dzisiaj ochotę?</h2>
    </div>

    <div class="search-bar">
        <input type="text" placeholder="Znajdź przepis...">
        <a href="allrecipes.php">
            <img src="img/search-icon.svg" alt="" srcset="">
        </a>
    </div>

    <div class="carousel">
        <button class="carousel__button carousel__button--left is-hidden"><img src="img/arrow-left-solid.svg" alt=""></button>
        <div class="carousel__track-container">
            <ul class="carousel__track">


            <?php foreach ($recipes as $recipe): 
                $recipe_id = $recipe['recipe_id'];   
                $recipe_name = $recipe["name"];
                $recipe_time = $recipe["time_description"];
                $recipe_photo = $recipe["photo"];
            ?>
                <li class="carousel__slide card current-slide">
                    <figure class="card__thumb carousel__image">
                        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($recipe_photo); ?>" alt="<?php echo $recipe_name ?>" class="card__image">
                        <figcaption class="card__caption">
                            <h2 class="card__title"><?php echo $recipe_name ?></h2>
                            <p class="card__snippet"><img src="img/time-icon.svg" class="card__icon"><?php echo $recipe_time ?> min</p>
                            <a href="singlerecipe.php?id=<?php echo $recipe_id ?> " class="card__button">Czytaj więcej</a>
                        </figcaption>
                    </figure>
                </li>
            <?php endforeach; ?>

            </ul>
        </div>
        <button class="carousel__button carousel__button--right"><img src="img/arrow-right-solid.svg" alt=""></button>
    </div>

    <script src="./js/carousel.js"></script>

<?php include '../src/inc/footer.php';?>