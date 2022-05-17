<?php include '../src/inc/header.php';?>

<form action="login.php" method="post" class="form signin-form">
        <h1>Zaloguj się na swoje konto</h1>
       
        <div class="input-control">
            <label for="email">Adres email</label>
            <div>
                <img src="img/email-icon.svg" alt="" srcset="">
                <input type="email" name="email" id="email">
            </div>
        </div>
        <div class="input-control">
            <label for="password">Hasło</label>
            <div>
                <img src="img/lock-icon.svg" alt="" srcset="">
                <input type="password" name="password" id="password">
            </div>
        </div>
  
        <div class="btn-container">
            <button type="submit">Zaloguj się</button>
        </div>
        <footer>Nie masz konta? <a href="signup.php">Zarejestruj się</a></footer>
</form>

<?php include '../src/inc/footer.php';?>