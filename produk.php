<?php include "components/header.php"; ?>
<?php require_once 'config/koneksi.php'; ?>

<!-- Hero Produk -->
<div class="banner-produk w-100">
    <div class="container position-relative content">
        <h1 class="hero-produk">
            Produk Kami
        </h1>
    </div>
</div>

<!-- Nasi Box -->
<?php
$sql = "SELECT * FROM produk where kategori = 'Nasi Box'";
$produk1 = $koneksi->query($sql);
?>
<div class="container-fluid py-5 px-5">
    <h3 class="text-center">Nasi Box</h3>
    <div class="row mt-5">
        <?php
        while ($data = mysqli_fetch_assoc($produk1)) {
        ?>
            <div class="col-md-3">
                <img src="assets/img/<?php echo $data["gambar"]; ?>" width="300" style="border-radius : 16px;" class="card-img-top" alt="...">
                <h5 class="judul-produk"><?php echo $data["nama"]; ?></h5>
                <p><?php echo $data["deskripsi"]; ?></p>
                <p>Rp. <?php echo $data["harga"]; ?></p>
            </div>
        <?php
        }
        ?>
    </div>
</div>
</div>

</div>
</div>

<!-- Snack Box -->
<?php
$sql = "SELECT * FROM produk where kategori = 'Snack Box'";
$produk2 = $koneksi->query($sql);
?>
<div class="container-fluid py-3 px-5">
    <h3 class="text-center">Snack Box</h3>
    <div class="row mt-5">
        <?php
        while ($data = mysqli_fetch_assoc($produk2)) {
        ?>
            <div class="col-md-3">
                <img src="assets/img/<?php echo $data["gambar"]; ?>" width="300" style="border-radius : 16px;" class="card-img-top" alt="...">
                <h5 class="judul-produk"><?php echo $data["nama"]; ?></h5>
                <p><?php echo $data["deskripsi"]; ?></p>
                <p>Rp. <?php echo $data["harga"]; ?></p>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<!-- Snack Hajatan -->
<?php
$sql = "SELECT * FROM produk where kategori = 'Snack Hajatan'";
$produk3 = $koneksi->query($sql);
?>
<div class="container-fluid py-5 px-5">
    <h3 class="text-center">Snack Hajatan</h3>
    <div class="row mt-5">
        <?php
        while ($data = mysqli_fetch_assoc($produk3)) {
        ?>
            <div class="col-md-3">
                <img src="assets/img/<?php echo $data["gambar"]; ?>" width="300" style="border-radius : 16px;" class="card-img-top" alt="...">
                <h5 class="judul-produk"><?php echo $data["nama"]; ?></h5>
                <p><?php echo $data["deskripsi"]; ?></p>
                <p>Rp. <?php echo $data["harga"]; ?></p>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php include "components/footer.php"; ?>