<?php 
    // require __DIR__ . '/../src/login.php';
    include '../src/inc/header.php';
?>

<style>
.container {
  display: flex;
  justify-content: space-between;
  padding: 1rem;
  border: 1px solid #D5D5D5;
}

.account {
    background-color: rgba(205,240,185,0.5);
}

.account__heading {
    font-weight:bold;
    font-size:25px;
}

.account__information {
    font-size: 20px;
}
.btn {
    background-color: var(--base-green);
    padding: 15px;
    margin: 10px;
    border-radius: 20px;
    text-transform: uppercase;
    font-family: ubuntu-medium;
    box-shadow: 1px 1px 5px;
    cursor:pointer;
}
</style>
<div class="account">
<h2 class="account__heading">
    Dane konta
</h2>
<h3 class="account__information">
    Twoje dane
</h3>
<div class="container">
    <div class="container__account">
        <span>
            Username
        </span>
        <span>
            hasło
        </span>
    </div>
    <div class="container__edit">
        edytuj
    </div>
</div>

<h2 class="account__heading">
    Usuwanie konta
</h2>
<div class="delete-user">
    <p class="delete-user__description">
        Jeśli usuniesz konto, to nie będziesz już nigdy więcej miał dostęu
        do przepisów, które utworzyłeś.
    </p>
    <button class="btn">Usuń konto</button>
</div>
</div>
