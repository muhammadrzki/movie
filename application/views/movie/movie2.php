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
  <video width="940" controls poster="<?= base_url() ?>assets/images/poster/break.jpg">
    <source src="<?= base_url() ?>assets/video/BreakThrough.mp4" type="video/mp4" />
  </video>
  <hr class="featurette-divider">
  <h1>Break Through</h1>
  <h3>2021</h3>
  <div class="btn-group" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-secondary">China</button>
    <button type="button" class="btn btn-secondary">Action</button>
    <button type="button" class="btn btn-secondary">Thriller</button>
  </div>
  <main role="main" class="inner cover">
    <p class="lead">Darong sebelumnya adalah pengawal terbaik di Asia Tenggara. Ketika menjalankan tugasnya, dia
      terlibat dalam konflik dengan penjaja narkoba besar beserta penembak jitu bawahannya, Chalong. Chalong melakukan
      balas dendam yang mengakibatkan kematian sahabat dan istri Darong. Darong yang terpukul memilih untuk mengundurkan
      diri dan bersembunyi. Lima tahun kemudian, putri Darong, Qiqi telah tumbuh dewasa, dan tanpa sengaja terlibat
      dalam suatu perdagangan narkoba dan diculik. Demi menyelamatkan putrinya, Darong kembali beraksi dan menemukan
      pelakunya, yang ternyata merupakan penjaja narkoba musuh bebuyutannya beserta bawahannya, Chalong! Kedua belah
      pihak bertemu kembali bagaikan takdir, dan pertempuran besar akan segera dimulai!</p>
    <p class="lead">
    </p>
  </main>
  <center>
    <div class="container marketing">
      <div id="closed"></div><a href="#popup" class="popup-link"><i class="fa fa-youtube-play fa-2x"></i>Watch
        Trailer</a>
      <div class="popup-wrapper" id="popup">
        <div class="popup-container">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/hxzVredMZCE" title="YouTube video player"
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
      <img class="rounded-circle" src="<?= base_url() ?>assets/images/pemeran/break/p1.jpg"
        alt="Generic placeholder image" width="140" height="140">
      <h2>Ren Tian Ye</h2>
      <p></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-md-4">
      <img class="rounded-circle" src="<?= base_url() ?>assets/images/pemeran/break/p2.jpg"
        alt="Generic placeholder image" width="140" height="140">
      <h2>Julian Chen</h2>
      <p></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="rounded-circle" src="<?= base_url() ?>assets/images/pemeran/break/p3.jpg"
        alt="Generic placeholder image" width="140" height="140">
      <h2>Fen Wan He</h2>
      <p></p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->
  <hr class="featurette-divider">
  <a href="<?= base_url() ?>film" class="btn btn-danger "
    onclick="return confirm('Yakin Ingin keluar dari halaman ini');" ?>back>></a>
</center>