<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <!-- Foto -->
                <img src="/assets/image/<?= $mahasiswa['sampul']; ?>" class="card-img-top" alt="Foto">
                <!-- Keterangan -->
                <div class="card-body">
                    <h5 class="card-title"> <?= $mahasiswa['nama']; ?></h5>
                    <p class="card-text">  <?= $mahasiswa['nim']; ?></p>
                    <p class="card-text">  <?= $mahasiswa['alamat']; ?></p>
                    <p class="card-text">  <?= $mahasiswa['jenis_kelamin']; ?></p>
                </div>
                <a href="/mahasiswa/edit/<?= $mahasiswa['nama']; ?>" class="btn btn-warning">Edit</a>

              <form action="/mahasiswa/<?= $mahasiswa['id']; ?>" method="POST" class="d-inline">
                <?= csrf_field(); ?>
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger"
                  onclick="return confirm('Apakah anda yakin?')">Delete</button>
              </form>
              <br><br>
              <a href="/mahasiswa">Kembali Kedaftar Mahasiswa</a>

            </div>
        </div>
    </div>
</div>