<?php
    session_start();


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Mel-Build</title>
  </head>
  <body>

     <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="products.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactUs.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reserchLibrary.php">Reserch Library</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutUs.php">About us</a>
                </li>

                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> -->
                </ul>
                <?php
                    if(isset($_SESSION['id'])){
                    $user= $_SESSION['first_name'];
                ?>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1">WELCOME <?php echo $user; ?></a>
                        </li> 
                    </ul>
                    <a href="users.php"> <button class="btn btn-outline-success my-2 my-sm-0">Distributor</button></a>
                    <a href="logout.php"> <button class="btn btn-outline-success my-2 my-sm-0">Logout</button></a>

                <?php
 
                    
                    } else {
                    ?>
                        <a href="loginForDistributor.php"> <button class="btn btn-outline-success my-2 my-sm-0">Login for Distributor</button></a>

                <?php
                   }
                ?>
            </div>
        </div>
    </nav>