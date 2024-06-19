<?php
session_start();
include "../config/koneksi.php";

if (!isset($_SESSION['username'])) {
    header('Location: ../login.php');
    exit();
}

if($_GET['mod'] == 'tambahbarang') {
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $kategori = mysqli_real_escape_string($koneksi, $_POST['kategori']);
    $deskripsi = mysqli_real_escape_string($koneksi, $_POST['deskripsi']);
    $harga = mysqli_real_escape_string($koneksi, $_POST['harga']);

    $lokasi = "../assets/img/";
    $nama_gambar = $_FILES['gambar']['name'];
    move_uploaded_file($_FILES['gambar']['tmp_name'], $lokasi . $nama_gambar);

    mysqli_query(
        $koneksi,
        "INSERT INTO produk (nama, kategori, deskripsi, harga, gambar)
         VALUES ('$nama', '$kategori', '$deskripsi', '$harga', '$nama_gambar')"
    );

    header("location: lihatbarang.php");
} elseif ($_GET['mod'] == 'hapusbarang') {
    $id = mysqli_real_escape_string($koneksi, $_GET['id']);
    mysqli_query(
        $koneksi,
        "DELETE FROM produk WHERE id='$id'"
    );

    header("location:lihatbarang.php");
} elseif ($_GET['mod'] == 'editbarang') {
    $id         = mysqli_real_escape_string($koneksi, $_POST['id']);
    $nama      = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $kategori = mysqli_real_escape_string($koneksi, $_POST['kategori']);
    $deskripsi   = mysqli_real_escape_string($koneksi, $_POST['deskripsi']);
    $harga       = mysqli_real_escape_string($koneksi, $_POST['harga']);

    $lokasi = "../assets/img/";
    $nama_gambar = $_FILES['gambar']['name'];
    move_uploaded_file($_FILES['gambar']['tmp_name'], $lokasi . $nama_gambar);

    $gambar = $nama_gambar;

    mysqli_query(
        $koneksi,
        "UPDATE produk SET
         nama='$nama',
         kategori='$kategori',
         deskripsi='$deskripsi',
         harga='$harga',
         gambar ='$gambar'
         WHERE id='$id'"
    );

    header("location: lihatbarang.php");
}
    
?>