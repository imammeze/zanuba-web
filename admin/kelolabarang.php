<?php include "../config/koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penambahan Barang</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #F8B88B;">
        <div class="container">
            <h1 class="navbar-brand text-white text-center w-100">Selamat Datang Admin</h1>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Content Start -->
    <div class="d-flex">
        <!-- Sidebar Start -->
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white" style="width: 280px; height: 100vh; background-color: #F8B88B">
            <a href="/" class="d-flex align-items-center justify-content-center">
                <img width="150" src="../assets/img/logo.png" alt="Logo" />
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link text-white">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="lihatbarang.php" class="nav-link text-white">
                        Lihat Barang
                    </a>
                </li>
                <li>
                    <a href="kelolabarang.php" class="nav-link text-white" aria-current="page">
                        Kelola Barang
                    </a>
                </li>
                <li>
                    <a href="logout.php" class="nav-link text-white">
                        logout
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar End -->

        <!-- Main Content Start -->
        <div class="container-fluid p-4" style="background-color: #FFF8F2; flex-grow: 1;">
            <h2>Kelola Barang</h2>
            <form method="post" action="aksi.php?mod=tambahbarang" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Barang</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama barang">
                </div>
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select class="form-select" id="kategori" name="kategori">
                        <option selected>Pilih kategori</option>
                        <option value="Nasi Box">Nasi Box</option>
                        <option value="Snack Box">Snack Box</option>
                        <option value="Snack Hajatan">Snack Hajatan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi Barang</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3" placeholder="Masukkan deskripsi barang"></textarea>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" name="harga" class="form-control" id="harga" placeholder="Masukkan harga barang">
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar Barang</label>
                    <input type="file" name="gambar" class="form-control" id="gambar">
                </div>
                <button type="submit" name="submit" value="submit" class="btn btn-success">Tambah Barang</button>
            </form>
        </div>
        <!-- Main Content End -->
    </div>
    <!-- Content End -->

    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>