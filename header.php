<?php 
$msg="";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>Hotel</title>
<!-- FAVICON -->
<link rel="icon" type="image/png" href="images/favicon.png"
<!-- Bootstrap 5 CDN Links -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.
min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<!-- Custom File's Link -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive-style.css">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset-"100">

    <header class="header_wrapper">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
              <a class="navbar-brand" href="#">
                <img src="images/logo.png" class="img-fluid" alt="logo">
              </a>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <!-- <span class="navbar-toggler-icon"></span> -->
               <i class="fas fa-stream navbar-toggler-icon"></i>
              </button>

              <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav menu-navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#rooms">Rooms</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#team">Team</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#gallery">Gallery</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#price">Price</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#blog">Blog</a>
                </li>
                <li class="nav-item mt-3 mt-lg-0">
                 <?php 
                if(!isset($_SESSION["username"])) { ?>
                    <a class="main-btn" href="login.php">Login</a>
               <?php } else { ?>
                    <a class="main-btn" href="logout.php">Logout</a>
              <?php  } ?>
                    </li>
                </ul>
                </div>
            </div>
          </nav>
    </header>