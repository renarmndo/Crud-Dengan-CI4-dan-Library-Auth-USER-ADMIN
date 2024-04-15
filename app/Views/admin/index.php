<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">List Mahasiswa</h1>
  <div class="row">
    <div class="col-lg-8">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">email</th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($users as $user): ?>
            <tr>
              <th scope="row">
                <?= $i++; ?>
              </th>
              <td>
                <?= $user->fullname; ?>
              </td>
              <td>
                <?= $user->email; ?>
              </td>
              <td>
                <?= $user->name; ?>
              </td>
              <td>
                <a href="<?= base_url('admin/' . $user->userid); ?>" class="btn btn-primary">Detail</a>
              </td>
            </tr>
          <?php endforeach; ?>

        </tbody>
      </table>

    </div>
  </div>

</div>
<?= $this->endSection(); ?>