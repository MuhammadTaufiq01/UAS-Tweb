<?php
$error = false;
if (isset($_POST["submit2"])) {
  if (isset($_POST["namabarang"], $_POST["harga"], $_POST["namabarang"], $_POST["jumlah"], $_POST["total"], $_POST["diskon"])) {
    header("location: pembayaran/index.php");
    exit;
  } else {
    $error = true;
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <title>Pemesanan</title>
</head>

<body>
  <h1 class="bold" style="color: #ffac0f;">Pemesanan Design</h1><br>
  <hr>


  <form action="" method="post">
    <table class="table table-borderless" style="width: 500px;">
      <tr>
        <td><label>Nama Barang</label></td>
        <?php if (isset($error)) { ?>
          <?php if (isset($_POST("namabarang"))) {
          } else { ?>
            <style>
              #pilih-desain {
                color: red;
              }
            </style>
          <?php } ?>
        <?php } ?>
        <td><select class="form-select" onchange="pilihan()" id="pilih-desain" name="namabarang" aria-label="Default select example">
            <option selected></option>
            <option value="Desain Logo gambar">Desain Logo gambar</option>
            <option value="Desain Logo lingkaran">Desain Logo lingkaran</option>
            <option value="Desain Wallpaper / Poster">Desain Wallpaper / Poster</option>
            <option value="Desain Banner Youtube">Desain Banner Youtube</option>
            <option value="Desain Avatar 3D">Desain Avatar 3D</option>
          </select></td>
      </tr>

      <tr>
        <td><label>Harga</label></td>
        <td>
          <p id="harga" name="harga"></p>
        </td>
      </tr>

      <tr>
        <td><label>Jumlah</label></td>
        <?php if (isset($error)) { ?>
          <?php if (isset($_POST("jumlah"))) {
          } else { ?>
            <style>
              #jumlah {
                color: red;
              }
            </style>
          <?php } ?>
        <?php } ?>
        <td><input type="text" oninput="hasil()" id="jumlah" name="jumlah"></td>
      </tr>

    </table>
    <hr>
    <table class="table table-borderless" style="width: 500px;">
      <tr>
        <td><label>Total</label></td>
        <td>
          <p id="total" name="total"></p>
        </td>
      </tr>

      <tr>
        <td><label>Diskon</label></td>
        <td>
          <p id="dis" name="diskon"></p>
        </td>
      </tr>
      <tr>
        <td>
          <p><i>Belanja lebih dari Rp 100000 dapat diskon 10%</i> </p>
        </td>
      </tr>

      <tr>
        <td><label>Bayar</label></td>
        <td>
          <p id="bayar" name="bayar"></p>
        </td>
      </tr>

    </table>

    <hr><br>
    <button style="margin: 30px; width: 200px;" class="btn btn-warning" name="submit2" role="button" href="pembayaran/index.html">
      Pesan
    </button>
  </form>

  <script type="text/javascript" src="pemesanan.js"></script>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>