<?php

	session_start();
	if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true))
	{
		header('Location:baza.php');
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
	
	<center>
		<h1> Baza użytkowników ver. 1.0 </h1>
		<form action="zaloguj.php" method="POST">
		
		Login: </br> <input type="text" name="login"></br>
		Hasło: </br> <input type="password" name="haslo"></br></br>
		<input type="submit" value="Zaloguj się!"/>
		</form>
	</center>
	<?php
	
		if(isset($_SESSION['blad']))
			echo$_SESSION['blad'];
	?>
</body>
</html>






