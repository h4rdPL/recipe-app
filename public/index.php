<?php session_start(); ?>
<?php 
if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header('location: index.php');

}
?>
<?php include '../src/inc/header.php';?>

    <div class="welcome-message">
        <?php if(isset($_SESSION['email'])) : ?>

        <h2>
            <?php echo 'Cześć, '. $_SESSION['email']; ?>
        </h2>
        <a href="index.php?logout='1'">
        Wyloguj się
        </a>
        <?php else : ?>
            <h2>
                Cześć,
            </h2>
            <?php endif ?>
        <h2>na co masz dzisiaj ochotę?</h2>
    </div>

    <div class="search-bar">
        <input type="text" placeholder="Znajdź przepis...">
        <img src="img/search-icon.svg" alt="" srcset="">
        
    </div>

    <div class="carousel">
        <button class="carousel__button carousel__button--left is-hidden"><img src="img/arrow-left-solid.svg" alt=""></button>
        <div class="carousel__track-container">
            <ul class="carousel__track">
                <li class="carousel__slide card current-slide">
                    <figure class="card__thumb carousel__image">
                        <img src="img/pexels-abhilash-sahoo-3896066.jpg" alt="pomidorowa" class="card__image">
                        <figcaption class="card__caption">
                            <h2 class="card__title">Nazwa</h2>
                            <p class="card__snippet"><img src="img/time-icon.svg" class="card__icon"> 30 min</p>
                            <a href="" class="card__button">Czytaj więcej</a>
                        </figcaption>
                    </figure>
                </li>
                <li class="carousel__slide card">
                    <figure class="card__thumb carousel__image">
                        <img src="img/pexels-daria-shevtsova-1333746.jpg" alt="pomidorowa" class="card__image">
                        <figcaption class="card__caption">
                            <h2 class="card__title">Nazwa</h2>
                            <p class="card__snippet"><img src="img/time-icon.svg" class="card__icon"> 30 min</p>
                            <a href="" class="card__button">Czytaj więcej</a>
                        </figcaption>
                    </figure>
                </li>
                <li class="carousel__slide card">
                    <figure class="card__thumb carousel__image">
                        <img src="img/pexels-ella-olsson-1640772.jpg" alt="pomidorowa" class="card__image">
                        <figcaption class="card__caption">
                            <h2 class="card__title">Nazwa</h2>
                            <p class="card__snippet"><img src="img/time-icon.svg" class="card__icon"> 30 min</p>
                            <a href="" class="card__button">Czytaj więcej</a>
                        </figcaption>
                    </figure>
                </li>
            </ul>
        </div>
        <button class="carousel__button carousel__button--right"><img src="img/arrow-right-solid.svg" alt=""></button>
    </div>

    <script src="./js/carousel.js"></script>

<?php include '../src/inc/footer.php';?>