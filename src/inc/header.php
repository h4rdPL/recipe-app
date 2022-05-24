<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>NapkinFoods</title>
</head>
<body>

<header>
    <nav class="nav">
        <div>
            <!-- svg logo -->
            <!-- <a href="index.php"><img src="img/logo.svg" alt="" class="nav__logo"></a>
            <a href="index.php"><h1>NapkinFoods</h1></a> -->
            <a href="index.php">
                <img width="100%" src="img/test.svg" alt="">
            </a>
        </div>

        <div class="menu-wrap">
            <input type="checkbox" class="toggler">
            <div class="hamburger">
                <div></div>
            </div>

            <div class="menu">
                <div>
                    <div>
                        <ul>
                            <li class="nav-item"><a class="nav-link" href="index.php">Strona główna</a></li>
                            <li class="nav-item"><a class="nav-link" href="allrecipes.php">Wszystkie przepisy</a></li>

                            <?php if(isset($_SESSION['username'])): ?>
                                <li class="nav-item"> <a class="nav-link" href="addrecipe.php">Dodaj przepis</a></li>
                                <li class="nav-item"> <a class="nav-link" href="logout.php">Wyloguj się</a></li>
                            <?php else : ?>
                                <li class="nav-item"> <a class="nav-link" href="register.php">Zarejestruj się</a></li>
                                <li class="nav-item"> <a class="nav-link" href="login.php">Zaloguj się</a></li>
                            <?php endif ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<main>
    <div class="container">
