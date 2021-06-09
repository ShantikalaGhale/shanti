<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="scripts/main.js">
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
           
            <!--Product_Details starts here-->
            <div class="container mt-5 pt-5 me-5">
                <div id="content-wrapper">
                    <div class="column">
                        <div id="img-container"> 
                            <img id=featured src="images/apple2.png">
                        </div>
                        <div id="slider-wrapper">
                            <img id="slideLeft" class="arrow me-2" src="images/left.png">
                            <div id="slider">
                                <img class="thumbnail active" src="images/apple2.png">
                                <img class="thumbnail" src="images/apple3.jpg">
                                <img class="thumbnail" src="images/apple5.jpg">
                                <img class="thumbnail" src="images/apple.jpg">
                            </div>
                            <img id="slideRight" class="arrow ms-2" src="images/right.png">
                        </div>
                    </div>

                    <div class="column2">
                        <h2>Apple</h2>
                        <span class="fas fa-star checked"></span>
                        <span class="fas fa-star checked"></span>
                        <span class="fas fa-star checked"></span>
                        <span class="fas fa-star checked"></span>
                        <span class="far fa-star"> 20 ratings</span>
                        
                        
                        <h4>Trader: Grocery</h4>
                        <hr>
                        <h5>Price: $12.00</h5>
                        <h5>In Stock. Limit per 20 customoer</h5>
                        <div class="qty"><h5>Quantity:</h5>
                            <span class="minus bg-light">-</span>
                            <input type="number" class="count" name="qty" value="1">
                            <span class="plus bg-light">+</span>
                        </div>
                        <button type="button" class="btn btn-primary btn-block mt-5">Add to cart</button>
                        <button type="button" class="btn btn-primary btn-block mt-5">Buy Now</button>
                    </div> 
                </div>
                    
                <div class="classic-tabs mt-5">
                    <ul class="tabs">
                        <li class="tab active" data-content-id="tab-content-1">Details</li>
                        <li class="tab" data-content-id="tab-content-2">Allergy Information</li>
                        <li class="tab" data-content-id="tab-content-3">Ratings</li>
                    </ul>
                        
                    <div id="tab-content-1" class="tab-content active">
                        <p>
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
                        The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 
                        </p>
                    </div>
                    <div id="tab-content-2" class="tab-content">
                        <p>
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
                        The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 
                       </p>
                        <p>
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
                        The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 
                       </p>
                    </div>
                    <div id="tab-content-3" class="tab-content">
                        <div class="row ms-md-2">
                            <div class="col-3">
                                <h2 class="d-inline">4.0</h2> <h5 class="d-inline">out of 5 star </h5> <br>
                                <span class="fas fa-star checked"></span>
                                <span class="fas fa-star checked"></span>
                                <span class="fas fa-star checked"></span>
                                <span class="fas fa-star checked"></span>
                                <span class="far fa-star"></span>
                                <h6>20 ratings</h6>
                            </div>
                            <div class="col-3"> 
                                <h3>Ratings</h3>
                                <div id="rating-1">
                                    <span class="fas fa-star checked"></span>
                                    <span class="fas fa-star checked"></span>
                                    <span class="fas fa-star checked"></span>
                                    <span class="fas fa-star checked"></span>
                                    <span class="fas fa-star checked"></span>
                                </div>
                                <div id="rating-2">
                                    <span class="fas fa-star checked"></span>
                                    <span class="fas fa-star checked"></span>
                                    <span class="fas fa-star checked"></span>
                                    <span class="fas fa-star checked"></span>
                                    <span class="far fa-star"></span>
                                </div>
                                <div id="rating-3">
                                    <span class="fas fa-star checked"></span>
                                    <span class="fas fa-star checked"></span>
                                    <span class="fas fa-star checked"></span>
                                    <span class="far fa-star"></span>
                                    <span class="far fa-star"></span>
                                </div>
                                <div id="rating-4">
                                    <span class="fas fa-star checked"></span>
                                    <span class="fas fa-star checked"></span>
                                    <span class="far fa-star"></span>
                                    <span class="far fa-star"></span>
                                    <span class="far fa-star"></span>
                                </div>
                                <div id="rating-5">
                                    <span class="fas fa-star checked"></span>
                                    <span class="far fa-star"></span>
                                    <span class="far fa-star"></span>
                                    <span class="far fa-star"></span>
                                    <span class="far fa-star"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                     <div class="progress-bar" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <!--Product_Details ends here-->
            
    
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
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!--bootstrap script-->

    
    <script src="scripts/main.js"></script>

</body>

</html>
