<div class="container -mt3">
    <h4>Daftar Siswa</h4>

    <?php Flasher::flash() ?>
    <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah siswa
    </button>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Telepon</th>
                <th scope="col">email</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data["DaftarSiswa"] as $s): ?>
                <tr>
                    <td><?= $s["nama"] ?></td>
                    <td><?= $s["telepon"] ?></td>
                    <td><?= $s["email"] ?></td>
                    <td><a href="<?= BASEURL; ?>/daftarsiswa/detail/<?= $s['id']; ?>"
                            class="badge text-bg-info text-white">detail</a></td>
                    <td><a href="<?= BASEURL; ?>/daftarsiswa/ubah/<?= $s['id']; ?>"
                            class="badge text-bg-success text-white tampilModalUbah" data-bs-toggle="modal"
                            data-bs-target="#formModal" data-id="<?= $s['id']; ?>">ubah</a></td>
                    <td><a href="<?= BASEURL; ?>/daftarsiswa/hapus/<?= $s['id']; ?>" class="badge text-bg-danger text-white"
                            onclick="return confirm('apakah anda yakin ingin menghapus?')">Hapus</a></td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>





<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModalLabel">Tambah data siswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/daftarsiswa/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class=" mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="nama siswa">
                    </div>
                    <div class="mb-3">
                        <label for="telepon" class="form-label">Telepon</label>
                        <input type="number" class="form-control" id="telepon" name="telepon"
                            placeholder="telepon siswa">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="email siswa">
                    </div>

                    <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan">
                        <option selected>pilih jurusan</option>
                        <option value="RPL">RPL (REKAYASA PERANGKAT LUNAK)</option>
                        <option value="TKJ">TKJ (TEKNIK KOMPUTER & JARINGAN)</option>
                        <option value="MM">MM (MULTIMEDIA)</option>
                    </select>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>

            </div>
            </form>
        </div>
    </div>
</div>