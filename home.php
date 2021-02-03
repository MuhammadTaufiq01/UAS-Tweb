<?php 

if(!isset($_POST["usern"]) || !isset ($_POST["passw"])){
  $error= true;
  header("location: index.php");
} else if ($_POST["usern"] != "user" && $_POST["passw"] != "1234"){
  $error= true;
  header("location: index.php");
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- my fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">



  <!-- link css -->
  <link rel="stylesheet" type="text/css" href="style.css">

  <!-- Taufiq: local css -->
  <style>
    .card-deck{
      background-image: url(backgroundline.png);
      background-repeat: repeat-y;
      background-size: contain;
    }

    .geser {
      padding-left: 90px;
    }

    .akhir {
      background-color: black;
      margin-top: 100px;
      padding: 50px;
      color: #ffffff;
    }
  </style>

  <title>WebDuaSatu</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <!-- <a class="nav-item nav-link" href="#">Dashboard</a> -->
          <a class="nav-item nav-link" href="profil/profilUAS.html">About US</a>
          <a class=" btn btn-warning tombol" href="login.html">User</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->

  <!-- jumbotron -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">WebDuaSatu</h1>
    </div>
  </div>
  <!-- akhir jumbotron -->

  <!-- container -->
  <div class="container">
    <br><br>
    <!-- info panel -->
    <div class="row justify-content-center">
      <div class="col-10 info-panel">
        <h1 style="text-align: center; margin-bottom: 30px;">Our Professional Agent</h1>
        <div class="row">
          <div class="col-lg">
            <img src="91086962_2733962096720436_1091519810329640960_n.jpg" class="float-left">
            <h4 class="geser">Taufiq</h4>
            <p class="geser">Graphic Designer.</p>
          </div>
          <div class="col-lg">
            <img src="IMG_4866-edit.jpg" class="float-left">
            <h4 class="geser">ana</h4>
            <p class="geser">Programmer.</p>
          </div>
          <div class="col-lg">
            <img src="kucing3.png" class="float-left">
            <h4 class="geser">reza</h4>
            <p class="geser">CEO KANGKINGKONG STORE.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- akhir info panel -->


    <!-- working space -->

    <div class="card-deck">
      <div class="row">

        <!-- kotak 1 -->
        <div class="col-md-3">
        <a href="Deskripsi1.html" class="link-dark" style="text-decoration: none; color: black;">
            <div class="card">
              <!-- img -->
              <div class="img-border">
                <img class="card-img-top" src="aa.png" alt="Card image cap">
              </div>
              <!-- detail 1 -->
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
        </a>
      </div>

      <!-- kotak 2 -->
      <div class="col-md-3">
        <a href="Deskripsi2.html" class="link-dark" style="text-decoration: none; color: black;">
          <div class="card">
            <!-- img -->
            <div class="img-border">
              <img class="card-img-top" src="kk.png" alt="Card image cap">
            </div>
            <!-- detail 2 -->
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This card has even longer content than the first to show that equal height action.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </a>
      </div>

      <!-- kotak 3 -->
      <div class="col-md-3">
        <a href="Deskripsi3.html" class="link-dark" style="text-decoration: none; color: black;">
          <div class="card">
            <!-- img -->
            <div class="img-border">
              <img class="card-img-top" src="Koretivity20 poster.png" alt="Card image cap">
            </div>
            <!-- detail 3 -->
            <div class="card-body">
              <h5 class="card-title">Desain Wallpaper / Poster</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </a>
      </div>

      <!-- kotak 4 -->
      <div class="col-md-3">
        <a href="Deskripsi4.html" class="link-dark" style="text-decoration: none; color: black;">
          <div class="card">
            <!-- img -->
            <div class="img-border">
              <img class="card-img-top" src="Banner-Full.png" alt="Card image cap">
            </div>
            <!-- detail 4 -->
            <div class="card-body">
              <h5 class="card-title">Desain Banner Youtube</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This card has even longer content than the first to show that equal height action.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </a>
      </div>

      <!-- kotak 5 -->
      <div class="col-md-3">
        <a href="Deskripsi5.html" class="link-dark" style="text-decoration: none; color: black;">
          <div class="card">
            <!-- img -->
            <div class="img-border">
              <img class="card-img-top" src="avatar.png" alt="Card image cap">
            </div>
            <!-- detail 4 -->
            <div class="card-body">
              <h5 class="card-title">Desain Avatar 3D</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This card has even longer content than the first to show that equal height action.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </a>
      </div>
    </div>

  </div>
  </div>


  <!-- akhir working space -->
  <div class="button" style="text-align: center;"><br><br>
    <a href="pemesanan.php" class="btn btn-warning"><b>PESAN SEKARANG</b></a>
  </div>



  </div>

  <div class="akhir">
    <div class="row">
      <div class="col-md">&copy;WebDuaSatu</div>
      <div class="col-md">Sponsored by KANGKINGKONG STORE</div>
      <div class="col-md"></div>
    </div>

  </div>

  <!-- akhir kontainer -->


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>

</html>