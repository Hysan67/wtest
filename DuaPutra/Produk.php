<?php
    session_start();

    if(!isset($_SESSION['isLogin'])){
        header("location: login.php");
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Dua Putra🥚</title>
</head>
<body> 
    <!-- Navigasi-->
    <nav class="navbar"> 
        <div class="container col jarak">
            <a href="home.php" class="text-decoration-none">
            <img src="LogoProject.png" class="thumbnail" id="logo">
            </a>
        </div>
        <div class="ms-auto nav-item jarak">
            <a href="home.php"id="Coklat" class="text-decoration-none">Home</a>
            <a href="Produk.php" id="Coklat" class="text-decoration-none">Produk</a>
            <a href="#about" id="Coklat" class="text-decoration-none">Kontak</a>
            <a href="logOut.php" id="Coklat" class="text-decoration-none">Logout</a>
        </div>
    </nav>
    <section id="home">
      <!--Baris Produk [1]-->
      <div class="container gap-5 my-5 ">
         <!--[Produk1]-->
          <div  class="itemproduk">
              <img src="telurButiran.png" class="ukuranproduktelur " alt="Telurayambutir">
              <div class="textproduk">
                  <p>Telur Ayam Butir</p>
                  <p class="textkecil">Telur ayam mentah</p>
                  <p class="textHarga">Rp 2,500</p>
              </div>
              <button class="btn btn-warning btn-sm pesan-btn" data-nama="Telur Ayam Butiran" data-gambar="telurButiran.png"><a href="pesan.php">Pesan</a></button>
          </div>

          <!--[Produk2]-->
         <div  class="itemproduk  ">
              <img src="telurAyamPack.png" class="ukuranproduktelur " alt="Telurayampack">
              <div class="textproduk">
                  <p>Telur Ayam pack</p>
                  <p class="textkecil">Telur Ayam Mentah 30 butir</p>
                  <p class="textHarga">Rp 75.000</p>
              </div>
              <button class="btn btn-warning btn-sm pesan-btn" data-nama="Telur Ayam Pack" data-harga="60000"  data-gambar="telurAyamPack.png"><a href="pesan.php">Pesan</a></button>
          </div>
          
          <!--[Produk3]-->
          <div  class="itemproduk   ">
              <img src="telurRebusAyam.webp" class="ukuranproduktelur " alt="Telurayamrebus">
              <div class="textproduk">
                  <p>Telur Ayam Rebus</p>
                  <p class="textkecil">Telur ayam Matang</p>
                  <p class="textHarga">Rp 3.000</p>
              </div>
              <button class="btn btn-warning btn-sm pesan-btn" data-nama="Telur Ayam Rebus Butiran" data-harga="3000" data-gambar="telurRebusAyam.webp"><a href="pesan.php">Pesan</a></button>
          </div>

          <!--[produk4]-->
          <div  class="itemproduk   ">
              <img src="telurBebekButir.png" class="ukuranproduktelur " alt="Telurbebekbutir">
              <div class="textproduk">
                  <p>Telur Bebek Butir</p>
                  <p class="textkecil">Telur bebek mentah</p>
                  <p class="textHarga">Rp 3.000</p>
              </div>
              <button class="btn btn-warning btn-sm pesan-btn" data-nama="Telur Bebek Butiran" data-harga="35000" data-gambar="telurBebekButir.png"><a href="pesan.php">Pesan</a></button>
            </div>

      </div>
       <!--Baris Produk [2]-->
      <div class="container gap-5 my-5  "> 
          <!--[Produk1]-->
          <div  class="itemproduk">
              <img src="telurBebekPack.png" class="ukuranproduktelur" alt="Telurbebekpack">
              <div class="textproduk">
                  <p>Telur Bebek pack</p>
                  <p class="textkecil">Telur matang 10 butir</p>
                  <p class="textHarga">Rp 40.000</p>
              </div>
              <button class="btn btn-warning btn-sm pesan-btn" data-nama="Telur Bebek Pack" data-harga="40000" data-gambar="telurBebekPack.png"><a href="pesan.php">Pesan</a></button>
          </div>

          <!--[Produk2]-->
         <div  class="itemproduk">
              <img src="telurRebusBebek.png" class="ukuranproduktelur" alt="Telurb">
              <div class="textproduk">
                  <p>Telur bebek rebus</p>
                  <p class="textkecil">Telur bebek rebus</p>
                  <p class="textHarga">Rp 4.000</p>
              </div>
              <button class="btn btn-warning btn-sm pesan-btn" data-nama="Telur Bebek Rebus Butiran" data-harga="4000" data-gambar="telurRebusBebek.png"><a href="pesan.php">Pesan</a></button>
          </div>
          
          <!--[Produk3]-->
          <div  class="itemproduk">
              <img src="telurPitan2.png" class="ukuranproduktelur" alt="">
              <div class="textproduk">
                  <p>Telur pitan </p>
                  <p class="textkecil">Telur asin fermentasi 2 butir</p>
                  <p class="textHarga">Rp 20.000</p>
              </div>
              <button class="btn btn-warning btn-sm pesan-btn" data-nama="Telur Ayam Pitan Butiran" data-gambar="telurPitan2.png" data-harga="33740"><a href="pesan.php">Pesan</a></button>
            </div>

          <!--[produk4]-->
          <div  class="itemproduk">
              <img src="telurPitanPack2.png" class="ukuranproduktelur" alt="">
              <div class="textproduk">
                  <p>Telur Pitan Pack</p>
                  <p class="textkecil">Telur asin fermentasi 12 butir</p>
                  <p class="textHarga">Rp 120.000</p>
              </div>
              <button class="btn btn-warning btn-sm pesan-btn" data-nama="Telur Ayam Pitan Pack" data-gambar="telurPitanPack2.png" data-harga="33740"><a href="pesan.php">Pesan</a></button>
          </div>
      </div>
  </section>

  <footer>
      <section id="about">
          <h1>Kontak Kami :</h1>
              <div class="d-flex justify-content-center gap-3">
                  <a href="https://www.instagram.com/telurasin.duaputra?igsh=cjdvN3YxdHJocDVl" target="_blank"><i class="fab fa-instagram"></i>
                  </a>
                  <a href="https://wa.me/6282337391394" target="_blank"><i class="fab fa-whatsapp"></i>
                  </a>
              </div>
      </section>
  </footer>

  <script src="script.js"></script>
</body>
</html>