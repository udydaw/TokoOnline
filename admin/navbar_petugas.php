<?php
  session_start();
  if ($_SESSION['status_login'] != true) {
    header('location:login_petugas.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
  <nav class="navbar shadow-sm navbar-expand-lg text-white" style="background-color: #FFAEA5;">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">Officer Y2KCloth</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
      aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="home_petugas.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="produk.php">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="pelanggan.php">Customer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="logout.php">Log Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</body>
</html>