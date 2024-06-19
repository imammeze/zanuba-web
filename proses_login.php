<?php
include "config/koneksi.php";
session_start();

if (isset($_POST['login'])) {
    $query = "select * from users where username='" . $_POST['username'] . "'
and password='" . $_POST['password'] . "' ";
    $data = mysqli_query($koneksi, $query);

    while ($r = mysqli_fetch_array($data)) {
        $_SESSION['iduser'] = $r['iduser'];
        $_SESSION['username'] = $r['username'];
        $_SESSION['password'] = $r['password'];
        
        header('Location: admin/index.php');
        exit();
    }
    
}
