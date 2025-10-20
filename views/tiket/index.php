<?php include "views/header.php" ?>
<div class="container">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Pelanggan</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tiket as $t): ?>
            <tr>
                <td><?= $t['id'] ?></td>
                <td><?= $t['nama_pelanggan'] ?></td>
                <td><?= $t['deskripsi'] ?></td>
                <td>  
                <?php 
                    if ($t['status'] === 'Baru'){ ?>
                        <span class="badge text-bg-danger">Baru</span>
                    <?php }elseif($t['status'] === 'Diproses'){ ?>
                        <span class="badge text-bg-warning">Diproses</span>
                    <?php }else { ?>
                        <span class="badge text-bg-success">Selesai</span>
                    <?php }?>
                </td>
                <td>
                    <a class="btn btn-info" href="index.php?action=edit&id=<?= $t['id'] ?>" role="button">Update Status</a>
                    <a class="btn btn-danger" href="index.php?action=delete&id=<?= $t['id'] ?>" role="button">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php include "views/footer.php" ?>