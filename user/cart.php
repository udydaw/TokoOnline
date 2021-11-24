<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>
    <?php
        include "navbar_pelanggan.php";
    ?>
    <br></br>
    <div class="container">
        <div class="card border-light mb-3 text-white" style="background-color: #97C1A9">
            <div class="card-header">
                <h1>Produk di Keranjang</h1>
            </div>
            <div class="card-body">
            <?php 
            if (@$_SESSION['cart'] == null) {
                echo "Keranjang kosong";
            }
            else {
            ?>
            <table class="table table-stripped text-white" style="background-color: #97C1A9">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach (@$_SESSION['cart'] as $key => $value) : ?>
                    <tr>
                        <td><?=($key+1)?></td>
                        <td><?=$value['nama_produk']?></td>
                        <td><?=$value['qty']?></td>
                        <td><?=$value['harga']?></td>
                        <td><a href="delete_cart.php?id=<?=$key?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?')">Hapus</a></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
            <a href="checkout.php" type="button" class="btn btn-dark">Checkout</a>
            <?php } ?>
            </div>
        </div>
    </div>
    <?php
        include "footer.php";
    ?>


</body>
</html>