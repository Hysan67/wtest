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
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Dua Putra🥚</title>
</head>
<body>
        <!-- Navigasi-->
        <nav class="navbar"> 
            <div class="container col jarak">
                <a href="home.php" class="text-decoration-none"><img src="LogoProject.png" class="thumbnail" id="logo"></a>
            </div>
            <div class="ms-auto jarak">
                <a href="home.php"id="Coklat" class="text-decoration-none">Home</a>
                <a href="produk.php" id="Coklat" class="text-decoration-none">Produk</a>
                <a href="#about" id="Coklat" class="text-decoration-none">Kontak</a>
                <a href="logOut.php" id="Coklat" class="text-decoration-none">Logout</a>
            </div>
        </nav>

        <section id="home">
            <div class="welcome">
                <h1 class="animate__animated animate__fadeInUp" style="margin-top: 60px; margin-bottom: 50px; position: relative; color: #ffffff; z-index: 1;">Selamat Datang</h1>
                <p class="deskripsi animate__animated animate__fadeInUp" style="font-size: 1.2rem; z-index: 1;">Tentang Produk Kami <br><br> Kami menyediakan 3 jenis telur dengan kualitas terbaik, cocok untuk berbagai kebutuhan, mulai dari konsumsi harian keluarga, usaha kuliner, hingga keperluan industri makanan. Setiap butir telur dipilih secara teliti untuk memastikan kesegaran, ukuran yang konsisten, dan nilai gizi yang optimal. Dengan sistem distribusi yang cepat dan higienis, kami berkomitmen memberikan produk terbaik langsung ke tangan Anda. Temukan pilihan telur yang tepat sesuai kebutuhan Anda hanya di tempat kami!</p>
            </div>
            <!-- Header -->         
            <div class="container py-4">
                <h5 class="mb-4"><strong>Info Produk</strong></h5>
                
                <!-- Baris 1 -->
                <div class="row align-items-center my-4 TelurAyam">
                    <div class="col-md-6">
                        <img src="telurButiran.png" alt="Telur Ayam" class="img-fluid rounded animate__animated animate__fadeInLeft" id="telur1"style="width: auto; float: left;">
                    </div>
                    <div class="col-md-6">
                        <h3 class="animate__animated animate__fadeInRight">Telur Ayam Negeri</h3>
                        <p style="text-align: right;" class="animate__animated animate__fadeInRight">Telur ayam adalah jenis telur yang paling umum dikonsumsi di seluruh dunia. Diambil dari ayam betina, telur ini menjadi bahan makanan pokok dalam berbagai masakan karena serbaguna, bergizi, dan mudah diperoleh. Cocok buat masakan harian seperti telur dadar, ceplok, atau campuran mie instan. Kandungannya cukup untuk memenuhi kebutuhan protein sehari-hari.</p>
                    </div>
                </div>
        
                <!-- Baris 2 (terbalik) -->
                <div class="row align-items-center my-4 flex-md-row-reverse TelurAsin">
                    <div class="col-md-6">
                        <img src="telurBebekButir.png" alt="Telur Itik" class="img-fluid rounded animate__animated animate__fadeInRight" id="telur2" style="width: auto; float: right;">
                    </div>
                    <div class="col-md-6">
                        <h3 class="animate__animated animate__fadeInLeft">Telur Bebek</h3>
                        <p style="text-align: left;" class="animate__animated animate__fadeInLeft">Telur bebek adalah telur yang dihasilkan oleh bebek betina, dan dikenal memiliki beberapa perbedaan mencolok dibandingkan telur ayam. Telur ini umum dikonsumsi di berbagai negara, terutama di Asia Tenggara. Favorit banyak orang untuk lauk, nasi bakar, lontong, hingga kue. Tersedia dalam kemasan matang dan mentah.</p>
                    </div>
                </div>
        
                <!-- Baris 3 -->
                <div class="row align-items-center my-4 TelurPitan">
                    <div class="col-md-6">
                        <img src="telurPitan2.png" alt="Telur Fermentasi" class="img-fluid rounded animate__animated animate__fadeInLeft" id="telurPitan" style="width: auto; float: left;">
                    </div>
                    <div class="col-md-6">
                        <h3 class="animate__animated animate__fadeInRight">Telur Pitan (Century Egg)</h3>
                        <p style="text-align: right;" class="animate__animated animate__fadeInRight">Telur pitan, juga dikenal sebagai telur seribu tahun, telur abad, atau dalam bahasa Inggris disebut century egg atau preserved egg, adalah jenis makanan khas dari Tiongkok yang dibuat dengan cara mengawetkan telur dalam campuran bahan kimia tertentu selama beberapa minggu hingga bulan. Meskipun namanya mengesankan bahwa telur ini diawetkan selama ratusan tahun, proses sebenarnya jauh lebih singkat. Cocok buat bubur ayam, dimsum, atau masakan oriental lainnya.</p>
                    </div>
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.420078158446!2d111.86986277532782!3d-8.058561391969045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78e2bbaff3fc61%3A0x66111b0af1f985aa!2sKoperasi%20Arta%20Mahesa%20Sejahtera!5e0!3m2!1sid!2sid!4v1747816126038!5m2!1sid!2sid" width="900" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
            id="map"></iframe>
        </section>

        <br>
        <!-- About Toko-->
        <footer>
            <section id="about">
                <h4>Kontak Kami :</h4>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="https://www.instagram.com/telurasin.duaputra?igsh=cjdvN3YxdHJocDVl" target="_blank"><i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://wa.me/6282337391394" target="_blank"><i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
            </section>
        </footer>

</body>
</html>