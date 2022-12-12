<style>
a.popup-link {
  padding: 17px 0;
  text-align: center;
  margin: 7% auto;
  position: relative;
  width: 150px;
  color: #fff;
  text-decoration: none;
  background-color: #4169E1;
  border-radius: 312px;
  box-shadow: 0 5px 0 0 #000000;
  display: block;
}

a.popup-link:hover {
  background-color: #000000;
  box-shadow: 0 3px 0 0 #000000;
  -webkit-transition: all 1s;
  -moz-transition: all 1s;
  transition: all 1s;
}

#popup {
  position: fixed;
  visibility: hidden;
  opacity: 0;
  margin-top: -300px;
}

#popup:target {
  visibility: visible;
  opacity: 1;
  background-color: rgba(255, 255, 255, 0.7);
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: 0;
  z-index: 99999999999;
  -webkit-transition: all 1s;
  -moz-transition: all 1s;
  transition: all 1s;
}

@media (min-width:768px) {
  .popup-container {
    width: 600px;
  }
}

@media (max-width:767px) {
  .popup-container {
    width: 100%;
  }
}

.popup-container {
  position: relative;
  margin: 7% auto;
  padding: 0px 0px;
  background-color: #333;
  color: #fff;
  border-radius: 3px;
}

a.popup-close {
  position: absolute;
  top: 3px;
  right: 3px;
  background-color: #fff;
  padding: 7px 10px;
  font-size: 20px;
  text-decoration: none;
  line-height: 1;
  color: #333;
}
</style>

<center>
  <h1 class="display-4">Flixmo 21</h1>
  <hr class="featurette-divider">
  <video width="940" controls poster="<?= base_url() ?>assets/images/poster/danur.jpg">
    <source src="<?= base_url() ?>assets/video/danur.mp4" type="video/mp4" />
  </video>
  <hr class="featurette-divider">
  <h1>Danur</h1>
  <h3>2017</h3>
  <div class="btn-group" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-secondary">Indonesia</button>
    <button type="button" class="btn btn-secondary">Horor</button>
  </div>
  <main role="main" class="inner cover">
    <p class="lead">Mengikuti kisah Risa yang bisa berkomunikasi dengan hantu. Masalah timbul saat sang adik, Riri,
      secara misterius hilang tanpa jejak. Ia pun meminta bantuan pada teman-teman hantunya untuk mencarinya.</p>
    <p class="lead">
    </p>
  </main>
  <center>
    <div class="container marketing">
      <div id="closed"></div><a href="#popup" class="popup-link"><i class="fa fa-youtube-play fa-2x"></i>Watch
        Trailer</a>
      <div class="popup-wrapper" id="popup">
        <div class="popup-container">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/YLU6Qfi0cDY" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
          <a class="popup-close" href="#closed">X</a>
        </div>
      </div>
    </div>
  </center>
  <hr class="featurette-divider">
  <h1 class="cover-heading">Pemeran Film</h1>
  <div class="row">
    <div class="col-lg-4">
      <img class="rounded-circle" src="<?= base_url() ?>assets/images/pemeran/danur/p1.jpg"
        alt="Generic placeholder image" width="140" height="140">
      <h2>Prilly Latuconsina</h2>
      <p></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-md-4">
      <img class="rounded-circle" src="<?= base_url() ?>assets/images/pemeran/danur/p2.jpg"
        alt="Generic placeholder image" width="140" height="140">
      <h2>Sandrinna Michelle</h2>
      <p></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="rounded-circle" src="<?= base_url() ?>assets/images/pemeran/danur/p3.jpg"
        alt="Generic placeholder image" width="140" height="140">
      <h2>Shareefa Daanish</h2>
      <p></p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->
  <hr class="featurette-divider">
  <a href="<?= base_url() ?>film" class="btn btn-danger "
    onclick="return confirm('Yakin Ingin keluar dari halaman ini');" ?>back>></a>
</center>