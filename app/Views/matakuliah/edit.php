<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container">
  <div class="row">
    <div class="col">
      <h1 class="mt-3">Rubah Data Matakuliah</h1>
      <!-- Bootstrap 5 Card -->
      <div class="card">
        <div class="card-header">
          Matakuliah Detail
        </div>
        <div class="card-body">
          <table class="table table-success table-striped">
            <!-- ... Tabel Detail Matakuliah ... -->
          </table>
          <!-- Admin CRUD -->
          <?php if (in_groups('admin')): ?>
            <!-- Form Edit -->
            <form action="/matakuliah/update/<?= $matakuliah['id']; ?>" method="post">
              <?= csrf_field(); ?>
              <input type="hidden" name="id" value="">
              <div class="mb-3">
                <label for="kode" class="form-label">Kode Mata Kuliah</label>
                <input type="text" class="form-control" name="kode" value="<?= $matakuliah['kode']; ?>" autofocus
                  required>
              </div>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Mata Kuliah</label>
                <input type="text" class="form-control" name="nama" value="<?= $matakuliah['nama']; ?>" required>
              </div>
              <div class="mb-3">
                <label for="sks" class="form-label">SKS</label>
                <input type="text" class="form-control" id="sks" name="sks" value="<?= $matakuliah['sks']; ?>" required>
              </div>
              <div class="mb-3">
                <label for="nama_dosen" class="form-label">Dosen Pengajar</label>
                <input type="text" class="form-control" name="nama_dosen" value="<?= $matakuliah['nama_dosen']; ?>"
                  required>
              </div>
              <div class="mb-3">
                <label for="jadwal" class="form-label">Jadwal</label>
                <input type="text" class="form-control" name="jadwal" value="<?= $matakuliah['jadwal']; ?>" required>
              </div>
              <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control" name="kelas" value="<?= $matakuliah['kelas']; ?>" required>
              </div>
              <div class="mb-3">
                <label for="jam" class="form-label">Jam</label>
                <input type="text" class="form-control" name="jam" value="<?= $matakuliah['jam']; ?>" required>
              </div>
              <!-- Tambahkan field untuk jadwal, kelas, dan jam matakuliah sesuai kebutuhan -->
              <button type="submit" class="btn btn-warning">Ubah</button>
            </form>
          <?php endif; ?>
          <br><br>
          <a href="/matakuliah">Kembali Ke Dashboard</a>
        </div>
      </div>
      <!-- End of Bootstrap 5 Card -->
    </div>
  </div>
</div>

<?= $this->endSection(); ?>