<?php
    include "connect.php";

    session_start();

    if(!isset($_SESSION['isLogin'])){
        header("location: login.php");
    }

    if(isset($_POST['pesann'])){
      $produk = $_POST['produk'];
      $pemesan = $_SESSION["Username"];
      $alamat = $_SESSION["Address"];

      $sql = "INSERT INTO pesan (pemesan, produk, alamat, tanggalPesan) VALUES('$pemesan', '$produk', '$alamat', NOW())";
      $result = $db->query($sql);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="desain.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <title>Dua Putra🥚</title>
</head>
<body>
    <nav class="navbar"> 
        <div class="container col jarak">
            <a href="home.html" class="text-decoration-none"><img src="LogoProject.png" class="thumbnail" id="logo"></a>
        </div>
        <div class="ms-auto jarak">
          <a href="home.php"id="Coklat" class="text-decoration-none">Home</a>
          <a href="produk.php" id="Coklat" class="text-decoration-none">Produk</a>
          <a href="logOut.php" id="Coklat" class="text-decoration-none">Logout</a>
        </div>
    </nav>

        <div class="container">
            <div class="kotak bg-brown text-white p-4 d-flex flex-column flex-md-row align-items-center justify-content-around">
                <div class="mb-4 mb-md-0">
                  <img id="preview-gambar" src="" alt="Gambar produk" class="img-fluid" style="width: 200px; margin-right: 200px; margin-left: 50px;" />
                </div>
              
                <div class="mx-5">
                  <h1 class="mb-4 mx-8" style="text-align:center;" style="width: 200px; margin-right: 20px; margin-left: 50px;" id="nama_produk"></h1>
              
                  <div class="d-flex justify-content-center mb-2">
                    <button class="btnKuantitas ms-2" id="decrement">-</button>
                    <span id="count" class="text-center" style="width: 100px;">0</span>
                    <button class="btnKuantitas ms-2" id="increment">+</button>
                  </div>
                  <div class="px-1">
                     <p id="angka_produk" style="text-align:start ;"></p>
                  </div>
                  <!-- Tombol Pesan -->
                   <form action="pesan.php" method="POST">
                      <input type="hidden" name="produk" id="inputProduk">
                      <button id="btnPesan" type="submit" name="pesann">Pesan Sekarang</button>
                   </form>
                  <a href="produk.html">
                      <button id="btnPesan">Kembali</button>
                  </a>
                </div>
              </div>
              
              <!-- Tombol Kembali -->
              
        </div>
    <script src="script.js"></script>
    

</body>
</html>
