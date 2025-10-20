
<?php include("views/header.php"); ?>
<div class="container">
<h1>Update Status Tiket</h1>
<h2><?= $data['nama_pelanggan'] ?></h2>
<form method="POST">
    <div class="mb-3 col-12">
        <label class="form-label">Deskripsi Masalah</label>
        <textarea class="form-control" name="deskripsi" disabled><?= $data['deskripsi'] ?></textarea>
    </div>
    <div class="mb-3 col-12">
    <select class="form-control" name="status" required>
        <option value="Baru" <?= $data['status'] === 'Baru' ? 'selected' : '' ?>>Baru</option>
        <option value="Diproses" <?= $data['status'] === 'Diproses' ? 'selected' : '' ?>>Diproses</option>
        <option value="Selesai" <?= $data['status'] === 'Selesai' ? 'selected' : '' ?>>Selesai</option>
    </select>  
    </div>  
    <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Kirim</button>
  </div>
</form>
</div>

<?php include("views/footer.php"); ?>