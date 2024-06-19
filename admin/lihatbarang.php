<?php include "../config/koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                    <a href="lihatbarang.php" class="nav-link text-white" aria-current="page">
                        Lihat Barang
                    </a>
                </li>
                <li>
                    <a href="kelolabarang.php" class="nav-link text-white">
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

        <!-- Content Start -->
        <div class="container-fluid p-3" style="background-color: #FFF8F2; flex-grow: 1;">
            <h2>Lihat Barang</h2>
            <!-- Table Start -->
            <table class="table table-striped">
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $no = 1;
                $query = "SELECT * FROM produk";
                $data = mysqli_query($koneksi, $query);
                while ($r = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $r['nama']; ?></td>
                        <td><?php echo $r['kategori']; ?></td>
                        <td><?php echo $r['deskripsi']; ?></td>
                        <td><?php echo $r['harga']; ?></td>
                        <td><img width="100" src="../assets/img/<?php echo $r['gambar']; ?>"></td>
                        <td width="180">
                            <a href="editbarang.php?id=<?php echo $r['id']; ?>">Ubah </a> |
                            <a href="aksi.php?mod=hapusbarang&id=<?php echo $r['id']; ?>">Hapus</a>
                    </tr>
                <?php $no++;
                }
                ?>
            </table>
        </div>
        <!-- Table End -->
    </div>
    <!-- Content End -->

    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>