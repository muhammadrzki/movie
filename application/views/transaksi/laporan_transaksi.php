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
          <div class="container-fluid">
            <?= $this->session->flashdata('pesan'); ?>
            <div class="row">
              <div class="col-lg-12">
                <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                  <?= validation_errors(); ?>
                </div>
                <?php } ?>
                <?= $this->session->flashdata('pesan'); ?>
                <a href="<?= base_url('laporan/cetak_laporan_film'); ?>" class="btn btn-primary mb-3"><i
                    class="fas fa-print"></i> Print</a>
                <a href="<?= base_url('laporan/laporan_film_pdf'); ?>" class="btn btn-warning mb-3"><i
                    class="far fa-file-pdf"></i> Download Pdf</a>
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
                  <?php }
                  ?>
                </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>