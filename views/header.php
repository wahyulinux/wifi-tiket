<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <header class="navbar navbar-expand-lg bd-navbar sticky-top">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
          <a class="navbar-brand" href="index.php">APP Tiket Gangguan Wifi</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
              <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Tiket</a>
              </li>
              <?php if ($_SESSION['user']['role'] === 'admin'): ?>
              <li class="nav-item">
              <a class="nav-link" href="index.php?page=pelanggan">Data Pelanggan</a>
              </li>
              <?php endif; ?>
              <li class="nav-item">
              <a class="nav-link" href="index.php?action=create">+ Buat Tiket</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="index.php?action=logout">Logout</a>
              </li>
          </ul>
          </div>
      </div>
      </nav>
    </header>