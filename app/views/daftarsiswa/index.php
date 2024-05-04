<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">no</th>
                <th scope="col">email</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data["DaftarSiswa"] as $s): ?>
                <tr>
                    <th scope="row">1</th>

                    <td><?= $s["nama"] ?></td>
                    <td><?= $s["no"] ?></td>
                    <td><?= $s["email"] ?></td>
                    <td><a href="<?= BASEURL; ?>/daftarsiswa/detail/<?= $s['id']; ?>"
                            class="badge text-bg-info text-white">detail</a></td>

                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>