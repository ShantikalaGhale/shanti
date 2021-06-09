<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>log in</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles/style.css?v=<?php echo time(); ?>">
</head>

<body>
  <div class="container-fluid">
    <div class="body-wrapper m-0 p-0">

      <!--top part having logo and buttons starts-->
      <div class="top d-flex align-items-center">
        <div class="logo">
          <img src="images/logo.svg" alt="website-logo" id="logo">
        </div>
        <form class="search ms-auto p-2" action="">
          <a href="#"><i class="fas fa-search mx-3"></i></a>
          <input type="text" placeholder="Search…" name="search">

        </form>
        <div class="btns ms-auto d-flex align-items-center">
          <?php
          if (isset($_COOKIE['name'])) {
            echo '<a class="me-3" href="#"><i class="fas fa-shopping-cart fa-2x"></i></a><span class = "user">' . $_COOKIE['name'] . '</span><a href = "logout.php"><button class="btn me-3">Logout</button></a>';
          } else if (isset($_SESSION['name'])) {
            echo '<a class="me-3" href="#"><i class="fas fa-shopping-cart fa-2x"></i></a><span class = "user">' . $_SESSION['name'] . '</span><a href = "logout.php"><button class="btn me-3">Logout</button></a>';
          } else {
          ?>
            <a href="login_form.php"><button class="btn me-3">Login</button></a>
            <a href="register_form.php"><button class="btn me-3">Sign Up</button></a>
            <a class="me-3" href="#"><i class="fas fa-shopping-cart fa-2x"></i></a>
          <?php
          }
          ?>
        </div>

      </div>
      <!--top part having logo and buttons starts ends-->

      <!--navbar part starts here-->
      <nav class="navbar navbar-expand-lg navbar-light bg-none">
        <div class="container-fluid p-0 m-0">
          <a class="navbar-brand" href="index.php">CornerStore</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-4">
              <li class="nav-item me-4">
                <a class="nav-link ps-0" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item me-4">
                <a class="nav-link" href="#">Contact us</a>
              </li>
              <li class="nav-item me-4">
                <a class="nav-link" href="#">Shop</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul class="dropdown-menu m-0 p-0" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--navbar part ends here-->

      <div class="login-section mt-4">
        <div class="row">
          <div class="col-md-6">
            <div class="image-part">
              <img src="images/side-image.svg" alt="illustration" class="wave img-fluid">
            </div>
          </div>
          <div class="col-md-6">
            <div class="login-form">
              <h3 class="text-center">Welcome to CornerStore</h3>
              <?php
              if (isset($_SESSION['login_error'])) {
                echo $_SESSION['login_error'];
              }
              ?>
              <form action="validate_login.php" method="POST">
                <div class="input-div one">
                  <div class="i">
                    <i class="fas fa-envelope"></i>
                  </div>
                  <div>
                    <h5>Email Address</h5>
                    <input type="email" name="email" class="input" id="username" autocomplete="off">
                  </div>
                </div>
                <div class="input-div two">
                  <div class="i">
                    <i class="fas fa-lock"></i>
                  </div>
                  <div>
                    <h5>Password</h5>
                    <input type="password" name="password" class="input" id="password">
                  </div>
                </div>
                <div class="check-forgetp">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" name="remember">
                    <label class="form-check-label" for="inlineCheckbox1">Remember me</label>
                  </div>
                  <a class="ms-auto" href="#">Forgot password?</a>
                </div>
                <div class="btn-membership text-center">
                  <button class="btn me-3" name="login" formaction="validate_login.php">LOGIN</button>
                  <p>New here? <a href="register_form.php">Become a member</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!--bottom 3 column starts-->
      <div class="footer-boxes">
        <div class="row pt-2 mt-5">
          <div class="col-md-4">
            <div class="contact">
              <h3 class="mb-2">Contact us</h3>
              <ul class="list-unstyled">
                <li class="my-0"><i class="fas fa-map-marker-alt me-4"></i>
                  <p class="d-inline">Cleckhuddersfax</p>
                </li>
                <li class="my-0"><i class="fas fa-envelope me-4"></i>
                  <p class="d-inline">mail@gmail.com</p>
                </li>
                <li class="my-0"><i class="fas fa-phone me-4"></i></i>
                  <p class="d-inline">053-51131515</p>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-md-4">
            <div class="information">
              <h3 class="mb-2">Information</h3>
              <ul class="list-unstyled">
                <li class="my-0"><a href="#">About us</a></li>
                <li class="my-0"><a href="#">Delivery Information</a></li>
                <li class="my-0"><a href="#">Privacy policy</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md-4">
            <div class="social ">
              <h3 class="mb-2">Follow us</h3>
              <ul class="list-unstyled">
                <li class="my-0"><i class="fab fa-facebook me-4"></i>
                  <p class="d-inline">Facebook</p>
                </li>
                <li class="my-0"><i class="fab fa-instagram me-4"></i>
                  <p class="d-inline">Instagram</p>
                </li>
                <li class="my-0"><i class="fab fa-twitter me-4"></i>
                  <p class="d-inline">Twitter</p>
                </li>
              </ul>
            </div>
          </div>


        </div>
      </div>
      <!--bottom 3 column ends-->

      <!--copyright statement-->
      <footer class="text-center py-2">
        Copyright©2021, All rights reserved by CornerStore.
      </footer>


    </div>
    <!--body wrapper ends here-->
  </div>
  <!--container-fluid ends here-->

  <!--bootstrap script-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <!--bootstrap script-->

  <script src="scripts/main.js"></script>
  <?php
  unset($_SESSION['login_error']);
  ?>

</body>

</html>
