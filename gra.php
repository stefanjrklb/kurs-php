<?php
	session_start();

	if(!isset($_SESSION['user'])){
		header('Location: index.php');
		exit();
	}
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title></title>
</head>
<body>
<?php
	echo "<p>Witaj ".$_SESSION['user'].'[<a href="logout.php">Wyloguj</a>]</p>';
	echo "<p><b>Drewno</b>: ".$_SESSION['drewno'];
	echo "| <b>Kamień</b>: ".$_SESSION['kamien'];
	echo "| <b>Zboże</b>: ".$_SESSION['zboze'];
	echo "<b>Email</b>: ".$_SESSION['email'];
	echo "<b>Dni premium</b>: ".$_SESSION['dnipremium']."</p>";
?>
</body>
</html>