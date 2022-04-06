    <?php include('db/conn.php') ?>
    <?php include('header.php') ?>
    <div class="container-fluid  d-flex justify-content-center  align-items-center signIn flex-column">
        <h1>
            Zaloguj się
        </h1>
    <form class="col-md-2">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="d-flex sub">
  <div class="form-check ">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Zapamiętaj mnie</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>

</form>
</div>

    <?php include('footer.php') ?>
