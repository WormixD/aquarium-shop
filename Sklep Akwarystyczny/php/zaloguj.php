<?php

	session_start();
	if((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		header('Location:index.php');
		exit();
	}

	require_once "polaczenie.php";
	
	$polaczenie = @new mysqli($host,$db_user,$db_password,$db_name);

		if ($polaczenie->connect_errno!=0)
		{
			echo "Error: ".$polaczenie->connect_errno;
		}
			else
			{
				$login = $_POST['login'];
				$haslo = $_POST['haslo'];
				
				$sql = "SELECT * FROM uzytkownicy WHERE user='$login' AND pass='$haslo'";

	if ($rezultat = @$polaczenie->query($sql));
	{
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow > 0)
			{
				$_SESSION['zalogowany']= true;
				$wiersz= $rezultat->fetch_assoc();
				$_SESSION['id'] = $wiersz['id'];
				$_SESSION['user'] = $wiersz['user'];
				$_SESSION['pass'] = $wiersz['pass'];
				$_SESSION['imie'] = $wiersz['imie'];
				$_SESSION['nazwisko'] = $wiersz['nazwisko'];
				$_SESSION['email'] = $wiersz['email'];
				$_SESSION['wiek'] = $wiersz['wiek'];
				$_SESSION['miejscowosc'] = $wiersz['miejscowosc'];
				
				unset($_SESSION['blad']);
				$rezultat->free_result();
				header('Location: baza.php');
			}
			else
			{
				$_SESSION['blad']='<center><span style="color:red">
				<B> Nieprawidłowy login lub hasło!</B></span></center>';
				header('Location:index.php');
			}
		
	}	
	$polaczenie->close();
	
			}
?>







