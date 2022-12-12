<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"></h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No.</th>
                <th>Kode</th>
                <th>Nama Pelanggan</th>
                <th>Jenis Paket</th>
                <th>Tanggal Berlangganan</th>
                <th>berlangganan berakhir</th>
                <th>Harga Paket</th>
                <th>Asal Kota</th>
                <th>Asal Negara</th>
                <th>Pembayaran</th>
                <th>status</th>
                <th>bukti bayar</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($data as $row) { ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $row->kode_pelanggan; ?></td>
                <td><?= $row->nama_langganan; ?></td>
                <td><?= $row->jenis_paket; ?></td>
                <td><?= $row->tgl_langganan; ?></td>
                <td><?= $row->tgl_habis; ?></td>
                <td><?= $row->harga; ?></td>
                <td><?= $row->kota_langganan; ?></td>
                <td><?= $row->negara_langganan; ?></td>
                <td><?= $row->pembayaran; ?></td>
                <td>
                  <?php
                    if ($row->status == "Konfirmasi") { ?>
                  <select name="status" class="badge badge-danger status ">
                    <option value="<?= $row->kode_pelanggan ?>konfirmasi" selected>Konfirmasi</option>
                    <option value="<?= $row->kode_pelanggan ?>selesai">selesai</option>
                  </select>
                  <?php } else { ?>
                  <button class="btn btn-success btn-sm dropdown-toggle">selesai</button>
                  <?php }
                    ?>
                </td>
                <picture>
                  <source srcset="" type="image/svg+xml">
                  <img src="<?= base_url('assets/images/film/') . $row->bukti; ?>" class="img-fluid img-thumbnail"
                    alt="...">
                </picture>
                </td>
              </tr>
              <?php }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>
  <script>
  $('.status').change(function() {
    var status = $(this).val();
    var kp = status.substr(0, 1);
    var stt = status.substr(1, 10);

    $.ajax({
      url: "<?= base_url() ?>berlangganan/update_status",
      method: "post",
      data: {
        kp,
        stt
      }
    });
    location.reload();
  });
  </script>
</body>

</html>