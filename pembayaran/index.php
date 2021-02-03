<!-- <?php
if (!isset($_POST["namabarang"]) || !isset($_POST["harga"]) || !isset($_POST["namabarang"]) || !isset($_POST["jumlah"]) || !isset($_POST["total"]) || !isset($_POST["diskon"])) {
		header("location: ../pemesanan.php");
		exit;
}
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">

						<!-- kolom kosong kiri -->
						<div class="col-sm-4"></div>
						<!-- akhir kolom kosong kiri-->

						<div class="col-sm-4">
							<div class="form-group align-middle">

								<span class="form-label"> <b>
										<span style="color: black;">
											<tr>
												<td>Nama</td>
												<td>: User.</td>
											</tr><br><br>
											<tr>
												<td>Desain</td>
												<td>: <?= $_POST["namabarang"] ?></td>
											</tr><br>
											<tr>
												<td>Jumlah</td>
												<td>: <?= $_POST["jumlah"] ?></td>
											</tr>
											<tr>
												<td>Harga</td>
												<td>: <?= $_POST["harga"] ?> / Desain</td>
											</tr><br><br><br>
											<tr>
												<td>Total</td>
												<td>: <?= $_POST["total"] ?></td>
											</tr>
										</span> <br><br>
										Metode Pembayaran </b></span>
								<select class="form-control">
									<option>Transfer Bank</option>
									<option>Ovo</option>
								</select>
								<span class="select-arrow"></span>

								<div class="form-btn">
									<a id="bayar" onclick="bayar()" href="../index.html"><button class="submit-btn">Bayar</button></a>

								</div>
							</div>
						</div>

						<!--awal kolom kosong kanan -->
						<div class="col-sm-4"></div>
						<!-- akhir kolom kosong kanan-->
					</div>
				</div>
			</div>
		</div>
	</div>
	</form>
	</div>
	</div>
	</div>
	</div>
	</div>

	<script src="pembayaran.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

		

</html>