<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
    <title>Recipe application</title>
    <style>
      .con {
        height: calc(100vh - 86px);
      }

      .hero__logo {
        height: 40%;
        max-width: 100%;
      }

      .hero__title {
        font-size: 2rem;
        width: 40%;
      }

      .ml-1 {
        margin-left: 20px;
      }
      .signIn {
        height:calc(100vh - 86px);
        text-align:center;
      }
      form {
        text-align:left;
      }
      .sub {
        justify-content:space-between;
        align-items: center;
      }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)"><img src="./images/logo.svg" height="50px" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Strona główna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="recipe.php">Moje przepisy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="recipeIdea.php">Przykładowe przepisy</a>
        </li>
      </ul>
      <form class="d-flex">
        <a class="btn btn-primary me-3" href="signIn.php" type="button">Sign In</a>
        <a class="btn btn-primary" href="signUp.php" type="button">Sign Up</a>
      </form>
    </div>
  </div>
</nav>