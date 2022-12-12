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
    <a class="navbar-brand" href="">
      <h3>FLIXMO 21</h3>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url() ?>home">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>about">About</a>
        </li>
        <a class="nav-link" href="<?= base_url() ?>auth">Login</a>
        </li>
        </li>
      </ul>
    </div>
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
    <a class="carousel-control-prev btn-slider " href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next btn-slider" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
  </div>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script type="text/javascript">
  AOS.init({
    easing: 'ease-in-out-sine'
  });
  </script>
</body>

</html>