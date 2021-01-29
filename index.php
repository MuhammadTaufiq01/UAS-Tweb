<?php

if (isset($_POST["submit"])) {
	if ($_POST["usern"] == "user" && $_POST["passw"] == "1234") {
		header("location: home.php");
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
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<!-- title -->
	<title>Login Page</title>

	<!-- css -->
	<link rel="stylesheet" href="ini.css">
	<!-- icon css -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

</head>

<body>
	<div class="login">

		<!-- rounded icon -->
		<div class="avatar">
			<i class="fa fa-user"></i>
		</div>

		<br>
		<!-- title -->
		<h2> Login ke WebDuaSatu </h2>
		<div action="" method="post">
			<!-- input -->
			<!-- Fungsi table sebagai grid -->
			<table>
				<tr class="box-login">
					<?php if (isset($_POST["submit"])) : ?>
						<?php if ($error) : ?>
							<p>Username atau password salah</p><?php endif; ?>
					<?php endif; ?>
					<td>
						<i class="fas fa-envelope"></i>
					</td>
					<td>
						<input type="text" name="usern" placeholder="Email/Username">
					</td>
				</tr>

				<tr class="box-login">
					<td>
						<i class="fas fa-lock"></i>
					</td>
					<td>
						<input type="text" name="passw" placeholder="Password">
					</td>
				</tr>
			</table>

			<?php if (isset($error)) : ?>
				<p style="color:red; font-style: italic;">Username atau password salah</p>
			<?php endif; ?>

			<!-- button -->
			<a class="btn btn-login" href="home.php" role="button" name="submit" style="text-decoration:none;">Login</a>
			<!-- <button href="home.php" type="submit" name="submit" class="btn-login">
				Login
			</button> -->
		</div>

		<br>

		<!-- registrasi -->
		<div class="bottom">
			<a> Belum punya akun?</a>
			<a href="Daftar.html">Daftar</a>
		</div>
	</div>
</body>

</html>