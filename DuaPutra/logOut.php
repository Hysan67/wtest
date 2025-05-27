<?php
   session_start();

   if(!isset($_SESSION['isLogin'])){
      header("location: login.php");
  }

   if(isset($_POST["logout"])){
      session_unset();
      session_destroy();
      header("location: login.php");
   }

   if(isset($_POST["cancel"])){
      header("location: home.php");
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
    <section class="form">
        <form method="post" action="logOut.php">
         <center>
            <h5>apakah anda yakin akan logout?</h5>
            <input type="submit" name="logout" value="Ya">
            <input type="submit" name="cancel" value="Tidak">
         </center>
         
    </section>
    
    <script src="script.js"></script>
</body>
</html>
