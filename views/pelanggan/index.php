<?php include "views/header.php" ?>


<div class="container">
    <h1>Data Pelanggan WiFi</h1>
    <a class="btn btn-primary" href="index.php?page=pelanggan&action=create">+ Tambah Pelanggan</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Pelanggan</th>
            <th scope="col">Alamat</th>
            <th scope="col">No. HP</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pelanggan as $p): ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= $p['nama'] ?></td>
                <td><?= $p['alamat'] ?></td>
                <td><?= $p['no_hp'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php include "views/footer.php" ?>