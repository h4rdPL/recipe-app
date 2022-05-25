<?php 
    // require __DIR__ . '/../src/login.php';
    include '../src/inc/header.php';
?>

<style>

.account {
    background-color: rgba(205,240,185,0.5);
    padding:2rem;
    text-align: center;
}

.account__heading {
    font-weight:600;
    font-size:25px;
    margin:2rem .5rem;
}

.account__information {
    font-size: 20px;
}
.user {
    display:flex;
    padding:2rem;
    justify-content: space-between;
    align-items: center;
    border: 2px solid var(--dark-green);
    border-radius: 5px;
    text-align:left;

}
.btn {
    background-color: var(--base-green);
    padding: 15px;
    border-radius: 20px;
    text-transform: uppercase;
    font-family: ubuntu-medium;
    box-shadow: 1px 1px 5px;
    cursor:pointer;
}
.user__box {
    display:flex;
    gap: .5rem;
    flex-direction: column;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed; /* Stay in place */
  z-index: 999; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  display:flex;
  justify-content: center;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  border-radius:5px;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}


.close {
    position: absolute;
    top:1.2rem;
    right: 1.2rem;
}

 input {
    border: 1px solid black;
    padding: .5rem;
}
.change-password div {
    display: flex;
    flex-direction: column;
    gap: .5rem;
}
.btn-edit {
    margin: 1rem auto;
}


</style>

<div class="account">
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

</div>


<script src="./js/modal.js"></script>