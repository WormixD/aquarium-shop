<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodawanie</title>
    <link rel="stylesheet" href="klub.css">
</head>
<body>
<style>
        body {
            font-family: Arial, sans-serif;
            margin-top: 3%;
            background: linear-gradient(to bottom, rgb(17, 129, 400), darkblue);
            color: #c5fff8;
        }

        table {
            width: 60%;
            margin-left: 20%;
            margin-right: 20%;
            border-collapse: collapse;
            margin-bottom: 5%;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #7b66ff;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #c5fff8;
            text-align: center;
        }
        .result {
            border: 1px solid #ccc;
            padding: 10px;
            background-color: #5fbdff;
            color: black;
            text-align:center;
            margin-left: 20%;
            margin-right: 20%;
            padding-bottom:2%;
            margin-bottom:25%;
            display: inline-block;
        }
        .back-anchor {
            padding: 3% 7%;
            color: lightblue;
            font-size: 20px;
            text-decoration: none;
            cursor: pointer;
            background-color: #3498db;
            border-bottom-right-radius: 10px;
            transition: background-color 0.3s ease;
            margin-bottom: 25%;
            margin-left:41%;
            display: inline-block;
        }
        .back-anchor:hover {
            color: #000;
            background-color: #fff;
        }
    </style>
<table border="1" class="tbdodawanie">
        <tr><td colspan="4"><h1>Dodawanie klientów</h1></td></tr>
</table>

<?php

$polaczenie = mysqli_connect("localhost", "root","", "sklep akwarystyczny");

if(isset($_POST['Dodaj']))
{
    
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $adres_email = $_POST['adres_email'];
	$adres = $_POST['adres'];
    $nr_telefonu = $_POST['nr_telefonu'];


    $insert = mysqli_query($polaczenie,"INSERT INTO klienci_tab (adres_email, imie, nazwisko, adres, nr_telefonu)
    VALUES ('$adres_email', '$imie', '$nazwisko', '$adres', '$nr_telefonu')");
	
    if($insert)
    {
        mysqli_close($polaczenie);
        header("location:klienci.php");
        exit;
    }
    else
    {
        echo "Błąd";
    }    	
}
?>


<form method="POST">
<table border=1 style="color: black" class="result">
        <tr class="tbdodawanie2">
            <td>
                Imie
                <input type="text" name="imie" id="imie" required></input>
</td>
<td>
                Nazwisko
                <input type="text" name="nazwisko" id="nazwisko" required></input>
</td>
<td>
                adres_email
                <input type="text" name="adres_email" id="adres_email" required>
</input>
</tr>
<tr>

</td>
<td>
                adres
                <input type="text" name="adres" id="adres" required></input>
</td>
<td>
                nr_telefonu
                <input type="text" name="nr_telefonu" id="nr_telefonu" required></input>
</td>
<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="Dodaj" value="Dodaj" class="buttondodawanie"></td>
</tr>
</table>
</form>

</body>
</html>