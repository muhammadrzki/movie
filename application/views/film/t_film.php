<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SB Admin 2 - Dashboard</title>
</head>

<body>
  <div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800"><?= $judul; ?></h1>
    <div class="card shadow mb-4">
      <div class="card body">
        <form method="post" action="<?= base_url() ?>film/simpan">
          <br>
          <div class="form-group col-md-12">
            <input type="text" name="kode_pelanggan" value=<?= $kode_pelanggan ?> class="form-control" readonly>
          </div>
          <div class="form-group col-md-12">
            <input type="text" name="judul_film" placeholder="judul film" class="form-control" required>
          </div>
          <div class="form-group col-md-12">
            <label for="inputState">Genre Film</label>
            <select id="inputState" name="genre_film" class="form-control">
              <option selected>Pilih Genre Film...</option>
              <option>Horror</option>
              <option>Romance</option>
              <option>Thriller</option>
              <option>comedy</option>
              <option>animasi</option>
              <option>action</option>

            </select>
          </div>
          <div class="form-group col-md-12">
            <select name="tahun_film" class="form-control form-control-user">
              <option value="">Pilih Tahun</option>
              <?php
              for ($i = date('Y'); $i > 1000; $i--) { ?>
              <option value="<?= $i; ?>"><?= $i; ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group col-md-12">
            <textarea name="sinopsis_film" cols="30" rows="5" class="form-control" placeholder="sinopsis"
              required></textarea>
          </div>
          <div class="form-group col-md-12">
            <input type="file" class="form-control form-control-user" id="cover_film" name="cover_film">
          </div>
          <div class="form-group col-md-12">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url() ?>film/tambah_film" class="btn btn-danger">Batal</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>