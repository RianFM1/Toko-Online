<?php
    require "sesion.php";
    require "../koneksi.php";

    $querykategori = mysqli_query($con, "SELECT * FROM kategori");
    $jumlahkategori = mysqli_num_rows($querykategori);

    $queryproduk = mysqli_query($con, "SELECT * FROM produk");
    $jumlahproduk = mysqli_num_rows($queryproduk);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">
</head>

<style>
    .kotak {
        border: solid;
    }
    .summary-kategory {
        background-color: #4bd4db;
        border-radius: 15px;
    }
    .summary-produk {
        background-color: #97ba25;
        border-radius: 15px;
    }
    
    body::before {
    content: '';
    display: none;
}

</style>

<body>
    <?php require "navbar.php"; ?>
    <div class="container mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <i class="fa-solid fa-house"></i>&nbsp;Home
                </li>
            </ol>
        </nav>
        <h2>Hallo <?php echo $_SESSION['username']; ?></h2>
    </div>

    <div class="container mt-5">
        <div class="row">
            <!-- Tab Kategori -->
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
                <div class="summary-kategory p-3">
                    <div class="row">
                        <div class="col-6">
                            <i class="fa-solid fa-list fa-7x"></i>
                        </div>
                        <div class="col-6 text-white">
                            <h3 class="fs-2">Kategori</h3>
                            <p class="fs-4"><?php echo $jumlahkategori; ?> kategori</p>
                            <a href="kategory.php" class="text-white text-decoration-none">Lihat Disini</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Produk -->
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
                <div class="summary-produk p-3">
                    <div class="row">
                        <div class="col-6">
                            <i class="fa-solid fa-store fa-7x"></i>
                        </div>
                        <div class="col-6 text-white">
                            <h3 class="fs-2">Produk</h3>
                            <p class="fs-4"><?php echo $jumlahproduk; ?> Produk</p>
                            <a href="produk.php" class="text-white text-decoration-none">Lihat Disini</a>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>

    <!-- Script Bootstrap Java -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>
</body>
</html>
