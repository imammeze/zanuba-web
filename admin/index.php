<?php if (empty($_SESSION['username'])) {
    header('location:../login.php');
    exit();
}?>

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

    <!-- Sidebar Start -->
    <div class="d-flex">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white"
            style="width: 280px; height: 100vh; background-color: #F8B88B">
            <a href="/" class="d-flex align-items-center justify-content-center height-100%">
                <img width="150" src="../assets/img/logo.png" alt="Logo" />
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link text-white" aria-current="page">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="lihatbarang.php" class="nav-link text-white">
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
        <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>