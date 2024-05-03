<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">no</th>
                <th scope="col">email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data["DaftarSiswa"] as $s): ?>
                <tr>
                    <th scope="row">1</th>

                    <td><?= $s["nama"] ?></td>
                    <td><?= $s["no"] ?></td>
                    <td><?= $s["email"] ?></td>

                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>