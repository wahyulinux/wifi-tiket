<?php include("views/header.php"); ?>
<div class="container">
<h1>Tambah Pelanggan</h1>
<form method="POST">
    <div class="mb-3 col-12">
        <label class="form-label">Nama</label>
        <input class="form-control" name="nama" type="text" required>
    </div>  
    <div class="mb-3 col-12">
        <label class="form-label">Alamat</label>
        <input class="form-control" name="alamat" type="text" required>
    </div> 
    <div class="mb-3 col-12">
        <label class="form-label">No. HP</label>
        <input class="form-control" name="no_hp" type="number" required>
    </div> 
    <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Kirim</button>
  </div>
</form>
</div>

<?php include("views/footer.php"); ?>