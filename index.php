<?php
	session_start();
	if(isset($_SESSION['user'])){
		header('Location: gra.php');
		exit();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Osadnicy - gra przeglądarkowa</title>
</head>
<body>

Tylko martwi ujrzeli koniec wojny - Platon <br><br>

	<form action="zaloguj.php" method="post">
		Login:<br><input type="text" name="login"><br>
		Hasło:<br><input type="password" name="haslo"><br>
		<input type="submit" value="Zaloguj się">
	</form>

	<?php
		if(isset($_SESSION['blad']))
		{
			echo $_SESSION['blad'];
		}
	?>

</body>
</html>