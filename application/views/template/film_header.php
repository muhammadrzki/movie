<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php base_url() ?>assets/style.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <title>FLIXMO 21</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-navbar">
    <a class="navbar-brand" href="">FLIXMO 21</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        </li>
        </li>
      </ul>
    </div>
    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-light small "><?= $user['name']; ?></span>
        <img class="img-profile rounded-circle" style="width:30px;height:30px;"
          src=" <?= base_url('assets/images/profile/') . $user['image']; ?>">
      </a>
      <!-- Dropdown - User Information -->
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          Logout
        </a>
      </div>
    </li>
  </nav>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 image-slider" src="<?= base_url() ?>assets/images/slider/land.JPG" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 image-slider" src="<?= base_url() ?>assets/images/slider/notime.JPG"
          alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 image-slider" src="<?= base_url() ?>assets/images/slider/comic.jpg" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 image-slider" src="<?= base_url() ?>assets/images/slider/dead.jpg" alt="four slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 image-slider" src="<?= base_url() ?>assets/images/slider/vagabond.jpg"
          alt="five slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 image-slider" src="<?= base_url() ?>assets/images/slider/money.jpg" alt="six slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 image-slider" src="<?= base_url() ?>assets/images/slider/the.jpg" alt=" seven slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 image-slider" src="<?= base_url() ?>assets/images/slider/hard.jpg" alt=" eight slide">
      </div>
    </div>
    <a class="carousel-control-prev btn-slider" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next btn-slider" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>