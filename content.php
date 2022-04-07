<?php 
  if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header('location: index.php');
  }
?>
<?php include('server/server.php') ?>
<div class="container-fluid" id="container">
<div class="row d-flex flex-row   con">
  <div class="col d-flex align-items-center justify-content-around ">
    <img src="./images/content.svg" class="hero__logo" alt="">
    <div>
    <h1 class="hero__title">
      Twoje przepisy, Twoja kuchnia.
      Zarejestruj się już teraz!
    </h1>
    </div>
  </div>
</div>
</div>
