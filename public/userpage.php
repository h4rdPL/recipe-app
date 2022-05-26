<?php 
    session_start();
    include '../src/inc/header.php';
?>

<section class="account">
    <h2 class="account__heading">Twoje dane</h2>
    <div class="user">
        <div class="user__box">
            <span class="user__name">
                Username
            </span>
            <span class="user__password">
                password
            </span>
        </div>
        <button id="edit_password" class="btn">Edytuj hasło</button>
            <!-- Modal content -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <form action="" class="change-password">
            <img width="15" id="close" class="close" src="img/close.svg" alt="">
            <h1 class="account__heading">
                Edytuj swoje dane 
            </h1>

            <div>
                <label for="user">
                    Stare hasło
                </label>
                <input type="text" name="user">
            </div>
            <div>
                <label for="user">
                    Nowe hasło
                </label>
                <input type="text" name="user">
            </div>
            <div>
                <label for="user">
                    Powtórz nowe hasło
                </label>
                <input type="text" name="user">
            </div>
            <button type="submit" id="edit_password" class="btn btn-edit">Edytuj</button>
        </div>

        </form>
    </div>
</div>
  


    <h2 class="account__heading">Usuwanie konta</h2>
    <div class="user">
        <p class="user__description">
            Jeśli usuniesz konto już nigdy nie będziesz miał dostępu do bazy swoich przepisów. Aby usunąć konto naciśnij "Usuń"
        </p>
        <button class="btn">Usuń</button>
    </div>
    </div>	

</section>



<script src="./js/modal.js"></script>