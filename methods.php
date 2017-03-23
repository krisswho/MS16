<?php
//var_dump($_GET);
print_r($_GET);
echo("</br>");
//var_dump($_POST);
print_r($_POST);
echo("</br>");



?>


<!DOCTYPE html>
	<html>
	<head></head>
		<body>
		<h2>GET meetod</h2>
			<form action="" method="get">
				<ul>
						<li>
							<label for="nimi">Nimi</label>
							<input type="text" name="nimi">
						</li>
						<li>
							<label for="perenimi">Perekonnanimi</label>
							<input type="text" name="perenimi">
						</li>
						<li>
							<input type="submit" name="sisesta" value="sisesta">
						</li>
				</ul>
                
                <?php if (isset($_GET['nimi'])){echo $_GET['nimi']."<br>";} else {echo "midagi pole sisestatud <br>";} ?> 
                
			</form>
			<h2>POST meetod</h2>
			<form action="" method="post">
				<ul>
						<li>
							<label for="nimi">Nimi</label>
							<input type="text" name="nimi">
						</li>
						<li>
							<label for="perenimi">Perekonnanimi</label>
							<input type="text" name="perenimi">
						</li>
						<li>
							<input type="submit" name="sisesta" value="sisesta">
						</li>
				</ul>
                  <?php if (isset($_POST['nimi'])){echo $_POST['nimi']."<br>";} else {echo "midagi pole sisestatud <br>";} ?> 
			</form>
		</body>
	</html>