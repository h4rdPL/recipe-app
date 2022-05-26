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
        <?php endif; ?>

        <h2>na co masz dzisiaj ochotę?</h2>
    </div>
    
    <form action="search.php" method="POST"> 
        <div class="search-bar">
            <input type="text" name="search-index" placeholder="Znajdź przepis...">
            <button type="submit" name="send" href="allrecipes.php" >
                <img src="img/search-icon.svg" alt="" srcset="">
            </button>
        </div>
    </form>
    <div class="carousel">
        <button class="carousel__button carousel__button--left is-hidden"><img src="img/arrow-left-solid.svg" alt=""></button>
        <div class="carousel__track-container">
            <ul class="carousel__track">


                <?php for ($i = 1; $i < 6; $i++):
                    $recipe_id = $all_recipes[$i]["recipe_id"];
                    $recipe_name = $all_recipes[$i]["name"];
                    $recipe_photo = $all_recipes[$i]["photo"];
                    $recipe_time = $all_recipes[$i]["time_description"]
                ?>
            
                    <li class="carousel__slide card current-slide">
                        <figure class="card__thumb carousel__image">
                            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($recipe_photo); ?>" alt="<?php echo $recipe_name ?>" class="card__image">
                            <figcaption class="card__caption">
                                <h2 class="card__title"><?php echo $recipe_name ?></h2>
                                <p class="card__snippet"><img src="img/time-icon.svg" class="card__icon"><?php echo  $recipe_time ?> min</p>
                                <a href="singlerecipe.php?id=<?php echo $recipe_id ?> " class="card__button">Czytaj więcej</a>
                            </figcaption>
                        </figure>
                    </li>

                <?php endfor; ?> 
            </ul>
        </div>
        <button class="carousel__button carousel__button--right"><img src="img/arrow-right-solid.svg" alt=""></button>
    </div>

    <div class="stats">
        <h1 class="stats__header">
            Statystyki przepisów:
        </h1>
        <div class="stats__max">
            <h2 class="stats__header__max">
                    Jaki przepis zajmuje najwięcej czasu?
            </h2>
            <span id="max_time" class="stats__max__result">
                50 minut
            </span>
        </div>
        <div class="stats__min">
            <h2 class="stats__header__max">
                Jaki przepis zajmuje najmniej czasu?
            </h2>
            <span id="min_time" class="stats__min__result">
                10 minut
            </span>
        </div>
        <div class="stats__avg">
            <h2 class="stats__header__avg">
                Średni czas wykonania wszystkich przepisów:
            </h2>
            <span id="avg_time" class="stats__avg__result">
                35 minut
            </span>
        </div>
    </div>

    <script src="./js/carousel.js"></script>

<?php include '../src/inc/footer.php';?>