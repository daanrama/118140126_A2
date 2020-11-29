<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>   <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">
    <!-- Bootstrap core CSS -->   <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" action="<?= base_url('index.php/auth/loginForm') ?>" method="post">
      <h1 class="h3 mb-3 font-weight-normal">Silahkan Login</h1>
        <?php
        $errors = $this->session->flashdata('errors');
        if(!empty($errors)){
        ?>
          <div class="row">
              <div class="col-md-12">
              <div class="alert alert-danger text-center">
                  <?php foreach($errors as $key=>$error){ ?>
                  <?php echo "$error<br>"; ?>
                  <?php } ?>
              </div>
              </div>
          </div>
        <?php
        }
        if($msg = $this->session->flashdata('error_login')){ ?>
          <div class="row">
              <div class="col-md-12">
                <div class="alert alert-danger text-center">
                    <?= $msg ?>
                </div>
              </div>
          </div>
        <?php } else if($msg = $this->session->flashdata('success_login')){ ?>
          <div class="row">
              <div class="col-md-12">
                <div class="alert alert-success text-center">
                    <?= $msg ?>
                </div>
              </div>
          </div>
        <?php } ?>
      <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Alamat Email" required autofocus>     
      <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      <a href="<?= base_url('index.php/auth/register') ?>" class="float-left mt-1">Registrasi</a>
      <p class="mt-5 mb-3 text-muted">&copy; 118140126 - Muhammad Ichsan Ramadhan</p>
    </form>
  </body>
</html>