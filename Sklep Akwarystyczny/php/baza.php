<?php

	session_start();
	if(!isset($_SESSION['zalogowany']))
	{
		header('Location:index.php');
		exit();
	}
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	
	<meta charset="utf-8">
	<title> Baza użytkownikow </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div id="baza">
	
	<?php
	
		echo "<p><b>Witaj ".$_SESSION['user']."!</b></p><br>";
		echo "==============================================";
		echo "<p><b>Imię: ".$_SESSION['imie']."</b></p><br>";
		echo "<p><b>Nazwisko: ".$_SESSION['nazwisko']."</b></p><br>";
		echo "<p><b>Email: ".$_SESSION['email']."</b></p><br>";
		echo "<p><b>Wiek: ".$_SESSION['wiek']."</b></p><br>";
		echo "<p><b>Miejscowość: ".$_SESSION['miejscowosc']."</b></p><br>";
		
		echo '<a href="wyloguj.php"><input type="submit" value="Wyloguj sie!"></a>';
	
	?>
	
	
	</div>
	
	
</body>
</html>






