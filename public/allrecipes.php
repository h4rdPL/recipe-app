<?php 
session_start();
include '../src/inc/header.php';

;?>

<h1>Wszystkie przepisy</h1>

<div class="search-bar">
        <input type="text" placeholder="Znajdź przepis...">
        <a href="allrecipes.php">
            <img src="img/search-icon.svg" alt="" srcset="">
        </a>
</div>

<div class="recipes-list">
    <ul>
        <li class="card">
            <figure class="card__thumb">
                <img src="img/pexels-abhilash-sahoo-3896066.jpg" alt="pomidorowa" class="card__image">
                <figcaption class="card__caption">
                    <h2 class="card__title">Nazwa</h2>
                    <p class="card__snippet"><img src="img/time-icon.svg" class="card__icon"> 30 min</p>
                    <a href="singlerecipe.php" class="card__button">Czytaj więcej</a>
                </figcaption>
            </figure>
        </li>
        <li class="card">
            <figure class="card__thumb">
                <img src="img/pexels-abhilash-sahoo-3896066.jpg" alt="pomidorowa" class="card__image">
                <figcaption class="card__caption">
                    <h2 class="card__title">Nazwa</h2>
                    <p class="card__snippet"><img src="img/time-icon.svg" class="card__icon"> 30 min</p>
                    <a href="singlerecipe.php" class="card__button">Czytaj więcej</a>
                </figcaption>
            </figure>
        </li>
        <li class="card">
            <figure class="card__thumb">
                <img src="img/pexels-abhilash-sahoo-3896066.jpg" alt="pomidorowa" class="card__image">
                <figcaption class="card__caption">
                    <h2 class="card__title">Nazwa</h2>
                    <p class="card__snippet"><img src="img/time-icon.svg" class="card__icon"> 30 min</p>
                    <a href="singlerecipe.php" class="card__button">Czytaj więcej</a>
                </figcaption>
            </figure>
        </li>
    </ul>
</div>

<?php include '../src/inc/footer.php';?>