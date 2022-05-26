<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/style.css">
    <title>NapkinFoods</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>

<header>
<nav class="menu">
        <a href="index.php">
            <img class="menu__logo" src="img/test.svg" alt="logo">
        </a>

        <div id="hamburger" class="hamburger">
        <input type="checkbox" class="toggler">

            <div class="hamburger__inner"></div>
        </div>
        <ul id="menu__list" class="menu__list">
            <li class="menu__list__item">
                <a href="index.php" class="menu__list__item-link">
                    Strona główna
                </a>
            </li>
            <li class="menu__list__item">
                <a href="allrecipes.php" class="menu__list__item-link">
                    Wszystkie przepisy
                </a>
            </li>

            <?php if(isset($_SESSION['username'])): ?>

                <li class="menu__list__item">
                    <a href="addrecipe.php" class="menu__list__item-link">
                        Dodaj przepis
                    </a>
                </li>
                <li class="menu__list__item">
                    <a href="userpage.php" class="menu__list__item-link">
                        Ustawienia konta
                    </a>
                </li>
                <li class="menu__list__item">
                    <a href="logout.php" class="menu__list__item-link">
                        Wyloguj się
                    </a>
                </li>
            <?php else : ?>
                <li class="menu__list__item">
                    <a href="register.php" class="menu__list__item-link">
                        Zarejestruj się 
                    </a>
                </li>
                <li class="menu__list__item">
                    <a href="login.php" class="menu__list__item-link">
                        Zaloguj się 
                    </a>
                </li>
            <?php endif ?>
        </ul>
    </nav>
</header>
<main>
    <div class="container">


<script src="./js/menu.js"></script>