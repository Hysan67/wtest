<?php
    include "connect.php";

    session_start();

    $err = "";
    
    if(isset($_SESSION['isLogin'])){
        header("location: home.php");
    }
    
    if(isset($_POST['login'])){
        $username = $_POST['nama'];
        $password = $_POST['password'];

        $sqlUser = "SELECT * FROM pelanggan WHERE nama='$username' AND password='$password'";

        $resultUser = $db->query($sqlUser);

        if($resultUser->num_rows > 0){
            $data = $resultUser->fetch_assoc();
            $_SESSION["Username"] = $data["nama"];
            $_SESSION["Address"] = $data["alamat"];
            

            $_SESSION["isLogin"] = true;
            header("location: home.php");
        }else{
            $sqlAdmin = "SELECT * FROM admin WHERE nama='$username' AND password='$password'";

            $resultAdmin = $db->query($sqlAdmin);
            if($resultAdmin->num_rows > 0){
                $_SESSION["isLogin"] = true;
                header("location: home.php");
            }else{
                $err = "akun tidak ditemukan";
            }
        }
    }

    $db->close();
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
    <section class="form">
        <form method="post" action="login.php">
            <h5 style><?= $err?></h5>
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" placeholder="Nama Lengkap" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Password" pattern="{3,50}" required>
            <input type="submit" name="login" value="Login">
            <p>Belum punya akun? <a href="register.php" id="btn-register">Register</a></p>
        </form>
    </section>
    
    <script src="script.js"></script>
</body>
</html>
