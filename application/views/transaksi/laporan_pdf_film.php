<!DOCTYPE html>
<html>

<head>
  <title></title>
</head>

<body>
  <style type="text/css">
  .table-data {
    width: 100%;
    border-collapse: collapse;
  }

  .table-data tr th,
  .table-data tr td {
    border: 1px solid black;
    font-size: 11pt;
    font-family: Verdana;
    padding: 10px 10px 10px 10px;
  }

  h3 {
    font-family: Verdana;
  }
  </style>
  <h3>
    <center>Laporan Data Pelanggan Film Flixmo21</center>
  </h3>
  <br />
  <table class="table-data">
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
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</body>

</html>