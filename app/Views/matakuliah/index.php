<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h1 class="mt-2">Daftar Matakuliah</h1>
      <?php if (session()->getFlashdata('pesan')): ?>
        <div class="alert alert-success" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
        </div>
      <?php endif ?>
      <?php if (in_groups('admin')): ?>
        <a href="/matakuliah/create" class="btn btn-primary mb-3 float">Tambah Matakuliah</a>
      <?php endif; ?>
    </div>
    <div class="col-md-4">
    </div>
    <?php foreach ($matakuliah as $mk): ?>
      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">
              <?= $mk['nama']; ?>
            </h5>
            <p class="card-text">Kode Mata Kuliah:
              <?= $mk['kode']; ?>
            </p>
            <p class="card-text">SKS:
              <?= $mk['sks']; ?>
            </p>
            <a href="/matakuliah/detail/<?= $mk['nama']; ?>" class="btn btn-success">Detail</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<?= $this->endSection(); ?>