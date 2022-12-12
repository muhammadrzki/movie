<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php base_url() ?>assets/style.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>FLIXMO 21</title>
</head>

<body>
  <?php
  $tgl_langganan = date('Y-m-d');
  $tgl_habis = date('Y-m-d ', strtotime('next month'));
  ?>
  <div class="container">

    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Paket Basic <span class="text-muted"></span>
        </h2>
        <p class="lead">
          jika pengguna ingin dengan mudah berpindah dari ponsel, laptop dan televisi ketika sedang menonton sesuatu,
          maka Paket Dasar senilai Rp 50.000 per bulan adalah pilihan terbaik untukmu.

          Paket ini memungkinkan pengguna menikmati tayangan Flixmo 21 di satu perangkat (ponsel, tablet, TV, laptop,
          atau
          komputer) per pemutaran sehingga pengguna dapat memulai hari dengan menonton tayangan favorit di ponsel sambil
          menikmati sarapan, kemudian melanjutkannya di laptop atau televisi saat istirahat atau selepas kerja.</p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-fluid mx-auto" src="<?= base_url() ?>assets/images/logo.png"
          alt="Generic placeholder image">
      </div>
    </div>
  </div>
  <hr class="featurette-divider">

  <body>
    <div class="container-fluid">
      <?php
      if (!empty($this->session->flashdata('info'))) { ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selamat</strong> <?= $this->session->flashdata('info') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php }
      ?>
      <h1 class="h3 mb-2 text-gray-800 text-center"><?= $judul; ?></h1>
      <div class="card shadow mb-4">
        <div class="card body">
          <form method="post" action="<?= base_url() ?>berlangganan/checkout">
            <div class="form-group col-md-12" hidden>
              <label for="validationTooltip02">Kode</label>
              <input type="text" name="kode_pelanggan" value=<?= $kode_pelanggan ?> class="form-control" readonly>
            </div>
            <div class="form-group col-md-12">
              <label for="validationTooltip02">Nama</label>
              <input type="text" name="nama_langganan" class="form-control" placeholder="nama pelanggan" required>
            </div>
            <div class="form-group col-md-12">
              <label for="validationTooltip02">Jenis Paket</label>
              <input type="text" name="jenis_paket" class="form-control" value="Paket Basic" readonly>
            </div>
            <div class="form-group col-md-12" hidden>
              <input type="text" name="tgl_langganan" class="form-control" value="<?= $tgl_langganan; ?>" required>
            </div>
            <div class="form-group col-md-12" hidden>
              <input type="text" name="tgl_habis" class="form-control" value="<?= $tgl_habis; ?>" required>
            </div>
            <div class="form-group col-md-12">
              <label for="validationTooltip02">Harga Paket</label>
              <input type="text" name="harga" class="form-control" value="Rp 50.000" readonly>
            </div>
            <div class="form-group col-md-12">
              <label for="validationTooltip02">Asal Kota</label>
              <input type="text" name="kota_langganan" class="form-control" placeholder="Asal Kota" required>
            </div>
            <div class="form-group col-md-12">
              <label for="validationTooltip02">Asal Negara</label>
              <input type="text" name="negara_langganan" class="form-control" placeholder="Asal Negara" required>
            </div>
            <div class="form-group col-md-12">
              <label for="inputState">Pembayaraan</label>
              <select id="inputState" name="pembayaran" class="form-control">
                <option selected>Pilih Pembayaran...</option>
                <option>Shoopepay</option>
                <option>Dana</option>
                <option>Ovo</option>
                <option>Gopay</option>
                <option>Alfamart</option>
                <option>Indomaret</option>
              </select>
            </div>
            <div class="form-group col-md-12" hidden>
              <input type="text" name="status" value="Konfirmasi" class="form-control" readonly>
            </div>
            <hr class="featurette-divider">
            <div class="container">

              <div class="row">
                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="<?= base_url() ?>assets/images/card/shopee.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h3>Shoopepay</h3>
                      <p class="card-text">1. jika sudah memilih metode pembayaran diatas</p>
                      <p>2. nomor pembayaran:081255556666</p>
                      <p>3. silahkan simpan nomor pembayaran</p>
                      <p>4. Silahkan Bayar lewat Aplikasi Shopee dengan nomor diatas!!!</p>
                      <p>5. jika sudah dibayar silahkan screenshot buktinya dan kirim ke bukti
                        pembayaran</p>
                      <div class="d-flex justify-content-between align-items-center">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="<?= base_url() ?>assets/images/card/dana.png" alt="Card image cap">
                    <div class="card-body">
                      <h3>Dana</h3>
                      <p class="card-text">1. jika sudah memilih metode pembayaran diatas</p>
                      <p>2. nomor pembayaran:081255556666</p>
                      <p>3. silahkan simpan nomor pembayaran</p>
                      <p>4. Silahkan Bayar lewat Aplikasi Dana dengan nomor diatas!!!</p>
                      <p>5. jika sudah dibayar silahkan screenshot buktinya dan kirim ke bukti
                        pembayaran</p>
                      <div class="d-flex justify-content-between align-items-center">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="<?= base_url() ?>assets/images/card/ovo.PNG" alt="Card image cap">
                    <div class="card-body">
                      <h3>Ovo</h3>
                      <p class="card-text">1. jika sudah memilih metode pembayaran diatas</p>
                      <p>2. nomor pembayaran:081288881010</p>
                      <p>3. silahkan simpan nomor pembayaran</p>
                      <p>4. Silahkan Bayar lewat Aplikasi Ovo dengan nomor diatas!!!</p>
                      <p>5. jika sudah dibayar silahkan screenshot buktinya dan kirim ke bukti
                        pembayaran</p>
                      <div class="d-flex justify-content-between align-items-center">

                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="<?= base_url() ?>assets/images/card/gopay.png" alt="Card image cap">
                    <div class="card-body">
                      <h3>Gopay</h3>
                      <p class="card-text">1. jika sudah memilih metode pembayaran diatas</p>
                      <p>2. nomor pembayaran:081255556666</p>
                      <p>3. silahkan simpan nomor pembayaran</p>
                      <p>4. Silahkan Bayar lewat Aplikasi Gopay dengan nomor diatas!!!</p>
                      <p>5. jika sudah dibayar silahkan screenshot buktinya dan kirim ke bukti
                        pembayaran</p>
                      <div class="d-flex justify-content-between align-items-center">


                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="<?= base_url() ?>assets/images/card/alfamart.png"
                      alt="Card image cap">
                    <div class="card-body">
                      <h3>Alfamart</h3>
                      <p class="card-text">1. jika sudah memilih metode pembayaran diatas</p>
                      <p>2. nomor pembayaran:1503-081255556666</p>
                      <p>3. silahkan simpan nomor pembayaran</p>
                      <p>4. Silahkan datang di gerai alfamart terdekat dan tunjukin nomor pembayaran diatas!!!
                      </p>
                      <p>5. jika sudah dibayar silahkan foto buktinya dan kirim ke bukti
                        pembayaran</p>
                      <div class="d-flex justify-content-between align-items-center">


                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="<?= base_url() ?>assets/images/card/indomaret.png"
                      alt="Card image cap">
                    <div class="card-body">
                      <h3>indomaret</h3>
                      <p class="card-text">1. jika sudah memilih metode pembayaran diatas</p>
                      <p>2 nomor pembayaran:1550-081255556666</p>
                      <p>3. silahkan simpan nomor pembayaran</p>
                      <p>4. Silahkan datang di gerai Indomaret terdekat dan tunjukin nomor pembayaran diatas!!!
                      </p>
                      <p>5. jika sudah dibayar silahkan foto buktinya dan kirim ke bukti
                        pembayaran</p>
                      <div class="d-flex justify-content-between align-items-center">

                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group col-md-12">
                  <input type="file" class="form-control form-control-user" id="bukti" name="bukti">
                </div>

                <div class="form-group col-md-12">
                  <hr class="featurette-divider">
                  <center>
                    <button type="submit" class="btn btn-primary">🛒 Checkout</button>
                    <a href="<?= base_url() ?>home" class="btn btn-danger "
                      onclick="return confirm('Yakin Ingin Membatalkan langganan ini');" ?>🚫 Cancel</a>
                  </center>
                </div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>

</html>