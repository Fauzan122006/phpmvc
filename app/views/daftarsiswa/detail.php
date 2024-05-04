<div class="container">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data["siswa"]["nama"]; ?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?= $data["siswa"]["jurusan"]; ?></h6>
            <p class="card-text"><?= $data["siswa"]["email"]; ?>.</p>
            <a href="<?= BASEURL; ?>/DaftarSiswa" class="card-link">Kembali</a>
        </div>
    </div>
</div>