<?php include("views/header.php"); ?>
<div class="container">
<h1>Buat Tiket Gangguan</h1>
<form method="POST">
    <div class="mb-3 col-12">
    <select class="form-control" name="id_pelanggan" required>
        <?php
        require_once 'models/Pelanggan.php';
        $pelangganModel = new Pelanggan();
        $pelanggan = $pelangganModel->getAll();
        foreach ($pelanggan as $p):
        ?>
        <option value="<?= $p['id'] ?>"><?= $p['nama'] ?> - <?= $p['alamat'] ?></option>
        <?php endforeach; ?>
    </select>  
    </div>  
    <div class="mb-3 col-12">
        <label class="form-label">Deskripsi Masalah</label>
    <textarea class="form-control" name="deskripsi" required></textarea>
    </div>
    <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Kirim</button>
  </div>
</form>
</div>

<?php include("views/footer.php"); ?>