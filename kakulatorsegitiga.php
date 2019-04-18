<!DOCTYPE html>
<html lang="en">
<head>
	<title>kakulator Lingkaran</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="https://scontent.fkno3-1.fna.fbcdn.net/v/t1.0-9/34885638_1272031749598929_6555209606639910912_n.jpg?_nc_cat=108&_nc_ht=scontent.fkno3-1.fna&oh=a5c169d9e3a7054e5ec64742f84eb110&oe=5D1C5B2C" alt="IMG">
				</div>

				<form class="login100-form validate-form"action="index.php"method="post">
					<span class="login100-form-title">
						 luas Lingkaran 
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Masukan data anda">
						<input class="input100" type="text" name="jari-jari" placeholder="jari-jari">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="-" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="submit" value="hitung">
							hitung
						</button>
					</div>

					

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							
							
					</div>
				</form>
				<?php
				if(isset($_POST['submit'])){
				$jari = $_POST['jari'];
				$luas_lingkaran = 3.14*jari*jari; // menghitung luas lingkaran
				echo "$Luas lingkaran dengan $alas :3.14, dan jari-jari <br>";
				echo "yaitu $luas_lingkaran";
				}
			
				?>
	
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
<head>
			<title>.:: Hasil Perhitungan Luas Segi Tiga ::.</title>
</head>
<body>
<font face=verdana>
<center>
<h3><u>Luas Segitiga</u></h3>
</center>
<form action=contoh2_4.php method=post>
<?
	$luas=0.5*$alas*$tinggi;
	echo "<table align=center bgcolor=#cedadc bordercolor=#cfdbdd cellpadding=0>";
	echo "<tr>";
	echo "<td>Alas</td>";
	echo "<td>:</td>";
	echo "<td>$alas</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>Tinggi</td>";
	echo "<td>:</td>";
	echo "<td>$tinggi</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>Luas Segi Tiga</td>";
	echo "<td>:</td>";
	echo "<td>$luas</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td colspan=3 align=center><input type=submit value=ulang></td>";
	echo "</tr>";
	echo "</table>";
?>
</form>
</body>
</html>
