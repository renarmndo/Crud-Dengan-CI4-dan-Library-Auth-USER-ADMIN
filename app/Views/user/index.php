<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row justify-content-center my-5">
    <!-- Left Column -->
    <div class="col-lg-6 text-center align-self-center">
      <h1 class="mb-4">Selamat Datang Di Universitas Pamulang</h1>
      <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur fuga neque quod iste vero
        debitis ad accusantium repellendus facilis? Veniam itaque tempore repellendus necessitatibus
        harum optio quo, ad illo nisi.
      </p>
      <button type="button" class="btn btn-primary"
        onclick="window.location.href='<?= base_url('matakuliah'); ?>'">Belajar Sekarang</button>
    </div>

    <!-- Right Column -->
    <div class="col-lg-6">
      <div class="px-4 py-5">
        <img src="<?= base_url('assets/image/gedung-unpam.png'); ?>" class="img-fluid" alt="Universitas Pamulang">
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>