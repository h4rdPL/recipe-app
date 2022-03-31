<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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

    </style>
</head>
<body>
  <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="./images/logo.svg" alt="" width="100%" height="50px" class="d-inline-block align-text-top">
      </a>


      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link" href="/">Strona główna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/?page=recipe">Moje przepisy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pomysły na przepisy</a>
        </li>
        <button type="button" class="btn btn-light">Sign in</button>
        <button type="button" class="btn btn-light ml-1">Sign up</button>
      </ul>
      </div>
      
  </nav>
  
  <div class="container-fluid ">
    <div class="row d-flex flex-row   con">
      <div class="col d-flex align-items-center justify-content-around ">
        <img src="./images/content.svg" class="hero__logo" alt="">
        <h1 class="hero__title">
          Twoje przepisy, Twoja kuchnia.
          Zarejestruj się już teraz!
        </h1>
      </div>

    </div>
  </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>