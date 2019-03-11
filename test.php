<?php

echo "ini adalah test";
echo "<br>";

echo "ini adalah test again";
echo "<br>";

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
echo "tes lagi aja";
echo "<br>";
echo "<h1 style='color:#43B7D2;'front-family:verdana;'>this is a blue Heading</h1>";



?>
