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

<div class="container marketing">
  <hr class="featurette-divider">
  <center>
    <h1 class="display-4">Trailer Film</h1>
    <div class="row-4">
      <div class="col-md-7" data-aos="fade-down"><img class="rounded-circle"
          src="<?= base_url() ?>assets/images/circle1.jpg" alt="Generic placeholder image" width="300" height="300">
        <h3>Train To Busan 2</h3>
        <p>Seok-woo dan putrinya yang berulang tahun pergi ke Busan dengan kereta untuk menemui istrinya. Tapi
          perjalanan tersebut berubah menjadi mimpi buruk kala mereka terjebak di tengah-tengah wabah zombie.</p>
        <div id="closed"></div><a href="#popup" class="popup-link"><i class="fa fa-youtube-play fa-2x"></i>Watch
          Trailer</a>
        <div class="popup-wrapper" id="popup">
          <div class="popup-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/SbP8_9iNwdA"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
            <a class="popup-close" href="#closed">X</a>
          </div>
        </div>
      </div>
  </center>
  <div class="container">
    <hr class="featurette-divider">
    <center>
      <h1 class="display-4">Sinopsis Film</h1>
    </center>
    <div class="row featurette">
      <div class="col-md-7" data-aos="fade-right">
        <h2 class="featurette-heading"><span class="text-muted">Land of Mine</span></h2>
        <p class="lead">Land of Mine mengisahkan belasan tentara remaja Jerman yang dikirim tentara Denmark untuk
          menjinakkan 45.000 ranjau di salah satu pantai. Sebagai tawanan perang,
          setiap hari para remaja ini bekerja mempertaruhkan nyawa dengan harapan akan dibebaskan dalam tiga bulan
          jika
          berhasil membuat pantai itu bebas ranjau.</p>
      </div>
      <div class="col-md-5" data-aos="fade-right"><img class="featurette-image img-fluid mx-auto set-image "
          src="<?= base_url() ?>assets/images/conten1.jpg" alt="Generic placeholder image"></div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-6 order-md-2 " data-aos="fade-right">
        <h2 class="featurette-heading"><span class="text-muted">The Walking Dead</span></h2>
        <p class="lead">The Walking Dead terjadi setelah permulaan sebuah kiamat zombi di seluruh dunia.
          Zombi-zombi
          yang biasa disebut walker tersebut,
          berjalan menuju manusia dan makhluk hidup lainnya untuk memakannya (mereka tertarik pada kebisingan,
          misalnya
          suara tembakan, dan aroma yang berbeda, misalnya aroma manusia).</p>
      </div>
      <div class="col-md-5 order-md-1" data-aos="fade-right"><img class="featurette-image img-fluid mx-auto set-image "
          src="<?= base_url() ?>assets/images/conten2.jpg" alt="Generic placeholder image"></div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7" data-aos="fade-right">
        <h2 class="featurette-heading"><span class="text-muted">No Time To Die</span></h2>
        <p class="lead">James Bond telah pensiun dan tengah menjalani kehidupan tenteram di Jamaika. Namun,
          semua itu terinterupsi ketika kawan lamanya,
          Felix Leiter dari CIA muncul dan meminta bantuannya. Misi menyelamatkan seorang ilmuwan yang diculik
          ternyata
          lebih berisiko dari dugaan,
          menghantarkan Bond pada jejak seorang penjahat misterius bersenjatakan teknologi baru nan mematikan.</p>
      </div>
      <div class="col-md-5" data-aos="fade-right"><img class="featurette-image img-fluid mx-auto set-image "
          src="<?= base_url() ?>assets/images/conten3.jpg" alt="Generic placeholder image"></div>
    </div>
    <hr class="featurette-divider">
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center" data-aos="fade-up">
      <h2 class="display-4">Daftar Paket Berlangganan</h2>
      <p class="lead">Pilih paket yang kamu inginkan,
        Tonton semua yang kamu mau,
        bebas iklan rekomendasi hanya untukmu,
        ubah atau batalkan paketmu kapanpun</p>
    </div>
    <div class="container">
      <div class="card-deck mb-3 text-center" data-aos="fade-up">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Basic</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">50k<small class="text-muted">/1Month</small></h1>
            <ul class="list-unstyled mt-3 mb-4">

            </ul>
            <p><a class="btn btn-lg btn-block btn-outline-primary" href="<?= base_url() ?>berlangganan"
                role="button">berlangganan &raquo;</a></p>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Standar</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">120k<small class="text-muted">/6Month</small></h1>
            <ul class="list-unstyled mt-3 mb-4">

            </ul>
            <p><a class="btn btn-lg btn-block btn-outline-primary" href="<?= base_url() ?>berlangganan1"
                role="button">berlangganan &raquo;</a></p>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Premium</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">190k<small class="text-muted">/1Year</small></h1>
            <ul class="list-unstyled mt-3 mb-4">

            </ul>
            <p><a class="btn btn-lg btn-block btn-outline-primary" href="<?= base_url() ?>berlangganan2"
                role="button">berlangganan &raquo;</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<