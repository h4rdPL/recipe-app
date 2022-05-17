<?php include '../src/inc/header.php';?>

<form action="registration.php" method="post" class="form signup-form">
        <h1>Dołącz do nas!</h1>
       
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

        <div class="input-control">
            <label for="password2">Powtórz hasło</label>
            <div>
                <img src="img/lock-icon.svg" alt="" srcset="">
                <input type="password2" name="password2" id="password2">
            </div>
        </div>

        <div class="checkbox-control">
            <input type="checkbox" name="agree" id="agree" value="yes"/>
            <label for="agree">Akceptuje warunki użytkowania strony</label>
        </div>

        <div class="btn-container">
            <button type="submit">Zarejestruj się</button>
        </div>
        <footer>Masz już konto? <a href="signin.php">Zaloguj się</a></footer>
</form>

<?php include '../src/inc/footer.php';?>