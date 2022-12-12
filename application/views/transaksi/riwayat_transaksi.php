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
                <a href="" class="btn btn-success btn-sm">Detail</a>
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
</div>
<script>
function myFunction() {
  var x = document.getElementByclass("Btn");
  x.disabled = true;
}
</script>