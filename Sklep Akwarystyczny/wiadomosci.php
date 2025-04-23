<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wyniki Formularza</title>
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
            color: black;
        }
        .panel{
          margin-bottom:10%;
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
            margin-bottom: 3%;
            margin-left:41%;
            display: inline-block;
        }
        .back-anchor:hover {
            color: #000;
            background-color: #fff;
        }
    </style>
</head>
<body>
<?php
    session_start();

    $polaczenie = mysqli_connect("localhost", "root","", "sklep akwarystyczny");

    $query = "SELECT * FROM `wiadomości_tab` 
          JOIN `klienci_tab` ON `wiadomości_tab`.`id_klienta` = `klienci_tab`.`id_klienta` 
          WHERE 1";

    $result = mysqli_query($polaczenie, $query);
    while ($row = mysqli_fetch_array  ($result))
    {
        echo '<table>';
         echo '<tr><th colspan="2">Wiadomości klientów</th></tr>';
         echo '<tr><td>ID Wiadomości</td><td>' .$row['id_wiadomosci']. '</td></tr>';
         echo '<tr><td>ID Klienta</td><td>' .$row['id_klienta']. '</td></tr>';
         echo '<tr><td>Imie</td><td>' .$row['imie']. '</td></tr>';
         echo '<tr><td>Nazwisko</td><td>' .$row['nazwisko']. '</td></tr>';
         echo '<tr><td>Email</td><td>' .$row['email']. '</td></tr>';
         echo '<tr><td>Tytuł</td><td>' .$row['tytul']. '</td></tr>';
         echo '<tr><td>Wiadomość</td><td>' .$row['wiadomosc']. '</td></tr>';
         echo '<tr><td>Zgoda na przetwarzanie danych</td><td>' . ($row['zgoda_przetwarzanie_danych'] == 0 ? 'Tak' : 'Nie') . '</td></tr>';
         echo '</table>';
    }
    ?>
    <div class="panel">
    <form action="usuwanie_wiadomosci.php" method="post">
    <label style="margin-left:41%" for="del_id">ID Wiadomości:</label>
    <input type="number" name="del_id" id="del_id" required>
    <br>
    <input class="back-anchor" type="submit" value="Usuń">
</form>
    <a href="moje-konto.php" class="back-anchor">Powrót</a>
  </div>
</body>
</html>
