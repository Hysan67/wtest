<?php
    include "connect.php";

    session_start();

    $err = "";
    
    if(isset($_SESSION['isLogin'])){
        header("location: home.php");
    }
    
    if(isset($_POST['register'])){
        $username = $_POST['nama'];
        $password = $_POST['password'];
        $address = $_POST['alamat'];

        try{
            $sql = "INSERT INTO pelanggan (nama, password, alamat) VALUES('$username', '$password', '$address')";
            $result = $db->query($sql);
            header("location: login.php");
        }catch (mysqli_sql_exception){
            $err = "nama sudah ada, silahkan ganti" ;
        }
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
    <h1 class="judul-form">Dua Putra</h1>
    <section class="form ">
        <form action="register.php" method="post">
            <h5><?= $err?></h5>
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" placeholder="Nama Lengkap" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Password" pattern="{3,50} " required>
            <label for="alamat">alamat</label>
            <input type="text" id="alamat" name="alamat" placeholder="Alamat" required>
            <input type="submit" name="register" value="Register">
            <p>Sudah punya akun? <a href="login.php" id="btn-login">Login</a></p>
        </form>
    </section>
    <script src="script.js"></script>
</body>
</html>
