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
  <title>FLIXMO 21</title>
</head>

<body>
  <?php
  $tgl_langganan = date('Y-m-d');
  $tgl_habis = date('Y-m-d ', strtotime('next year'));
  ?>
  <hr class="featurette-divider">
  <div class="container">

    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Paket Premium <span class="text-muted"></span>
        </h2>
        <p class="lead">
          Jika pengguna tinggal bersama orangtua dan/atau anak-anak, Paket Premium senilai Rp 190.000 per tahun adalah
          pilihan yang paling sesuai untuk keluarga.

          Paket ini memungkinkan pengguna menonton Flixmo 21 di empat perangkat sekaligus (ponsel, tablet, TV, laptop,
          atau komputer).

          Paket premium juga menawarkan kualitas video beresolusi full hd untuk semakin meningkatkan pengalaman dalam
          menikmati beragam tayangan berkualitas dalam berbagai genre di Flixmo 21.</p>
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
      <h1 class="h3 mb-2 text-gray-800 text-center"><?= $judul; ?></h1>
      <div class="card shadow mb-4">
        <div class="card body">
          <form method="post" action="<?= base_url() ?>berlangganan2/checkout">
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
              <input type="text" name="jenis_paket" class="form-control" value="Paket Premium" readonly>
            </div>
            <div class="form-group col-md-12 hidden" hidden>
              <input type="text" name="tgl_langganan" class="form-control" value="<?= $tgl_langganan; ?>" required>
            </div>
            <div class="form-group col-md-12 hidden" hidden>
              <input type="text" name="tgl_habis" class="form-control" value="<?= $tgl_habis; ?>" required>
            </div>
            <div class="form-group col-md-12">
              <label for="validationTooltip02">Harga Paket</label>
              <input type="text" name="harga" class="form-control" value="Rp 190.000" readonly>
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
                <option>Alfamart&Alfamidi</option>
                <option>Indomart</option>
                <option>Transfer Bank</option>
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
                      onclick="return confirm('Yakin Ingin Membatalkan langganan ini');" ?>🚫 Batal</a>
                </div>
                </center>
              </div>
          </form>
        </div>
      </div>
    </div>
  </body>

</html>