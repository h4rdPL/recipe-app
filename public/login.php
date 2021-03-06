<?php 
    require __DIR__ . '/../src/login.php';
    include '../src/inc/header.php';
?>
<form action="login.php" method="post" class="form login-form">
        <h1>Zaloguj się na swoje konto</h1>
       
        <div class="input-control">
            <label for="email-username">Adres email lub nazwa użytkownika</label>
            <div>
                <img src="img/email-icon.svg" alt="" srcset="">
                <input type="text" name="email-username" id="email-username">
            </div>
        </div>
        <div class="input-control">
            <label for="password">Hasło</label>
            <div>
                <img src="img/lock-icon.svg" alt="" srcset="">
                <input type="password" name="password" id="password">
            </div>  
        </div>
        <?php include "errors.php"?>

  
        <div class="btn-container">
            <button name="login" type="submit">Zaloguj się</button>
        </div>
        <footer>Nie masz konta? <a href="register.php">Zarejestruj się</a></footer>
</form>

<?php include '../src/inc/footer.php';?>