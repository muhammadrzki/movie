<!-- Begin Page Content -->
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

  <div class="row">
    <div class="col-md-12">
      <a href="<?= base_url() ?>film/tambah" class="btn btn-primary">Tambah Pelanggan</a><br><br>
    </div>
  </div>

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
              <th>judul film</th>
              <th>genre film</th>
              <th>tahun film</th>
              <th>sinopsis film</th>
              <th>cover film</th>
              <th>opsi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($data as $row) { ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $row->judul_film; ?></td>
              <td><?= $row->genre_film; ?></td>
              <td><?= $row->tahun_film; ?></td>
              <td><?= $row->sinopsis_film; ?></td>
              <td>
                <picture>
                  <source srcset="" type="image/svg+xml">
                  <img src="<?= base_url('assets/images/film/') . $row->cover_film; ?>" class="img-fluid img-thumbnail"
                    alt="...">
                </picture>
              </td>
              </td>
              <td>
                <a href="<?= base_url() ?>film/edit/<?= $row->kode_pelanggan ?>" class="btn btn-success btn-sm">Edit</a>
                <a href="<?= base_url() ?>film/delete/<?= $row->kode_pelanggan ?>" class="btn btn-danger btn-sm"
                  onclick="return confirm('yakin ingin menghapus data');" ?>Delete</a>
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