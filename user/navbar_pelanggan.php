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

  <div class="b-example-divider"></div>

<header>
  <div class="px-3 py-2 text-white" style="background-color: #FFAEA5;">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
        </a>

        <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
          <li>
            <a href="home_pelanggan.php" class="nav-link text-white">
            <img class="bi d-block mx-auto mb-1" src="logos/home.png" width="24" height="24">
              Home
            </a>
          </li>
          <li>
            <a href="cart.php" class="nav-link text-white">
            <img class="bi d-block mx-auto mb-1" src="logos/bag.png" width="24" height="24">
              Cart
            </a>
          </li>
          <li>
            <a href="transaksi.php" class="nav-link text-white">
            <img class="bi d-block mx-auto mb-1" src="logos/money.png" width="24" height="24">
              Check Out
            </a>
          </li>
          <li>
            <a href="profil.php" class="nav-link text-white">
            <img class="bi d-block mx-auto mb-1" src="logos/profil.png" width="24" height="24">
              Profile
            </a>
          </li>
          <li>
            <a href="logout.php" class="nav-link text-white">
              <img class="bi d-block mx-auto mb-1" src="logos/signout.png" width="24" height="24">
              Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>
</body>
</html>