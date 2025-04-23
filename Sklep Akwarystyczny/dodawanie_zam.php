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
        <tr><td colspan="4"><h1>Zamówienia</h1></td></tr>
</table>

<?php
    $polaczenie = mysqli_connect("localhost", "root", "", "sklep akwarystyczny");

    $query_klienci = "SELECT id_klienta, imie, nazwisko FROM klienci_tab";
    $result_klienci = mysqli_query($polaczenie, $query_klienci);

    if ($result_klienci) {
        $dostepne_id = array();
        while ($row_klienci = mysqli_fetch_assoc($result_klienci)) {
            $dostepne_id[] = $row_klienci;
        }
    } else {
        die("Błąd przy pobieraniu danych klientów: " . mysqli_error($polaczenie));
    }

    if (isset($_POST['Dodaj'])) {
        $id_klienta = $_POST['id_klienta'];
        $data_zamowienia = $_POST['data_zamowienia'];
        $kwota = $_POST['kwota'];
        $stan = $_POST['stan'];
        $komentarz = $_POST['komentarz'];

        $insert = mysqli_query($polaczenie, "INSERT INTO zamowienia_tab (id_klienta, data_zamowienia, kwota, stan, komentarz)
        VALUES ('$id_klienta', '$data_zamowienia', '$kwota', '$stan', '$komentarz')");

        if ($insert) {
            mysqli_close($polaczenie);
            header("location:zamowienia_klientow.php");
            exit;
        } else {
            echo "Błąd";
        }
    }
    ?>


<form method="POST">
<table border=1 style="color: black" class="result">
        <tr class="tbdodawanie2">
            <td>
            ID klienta
                    <select name="id_klienta" required>
                        <?php
                        foreach ($dostepne_id as $klient) {
                            echo '<option value="' . $klient['id_klienta'] . '">' . $klient['id_klienta'] . ' - ' . $klient['imie'] . ' ' . $klient['nazwisko'] . '</option>';
                        }
                        ?>
                    </select>
</td>
<td>
                Data zamówienia
                <input type="date" name="data_zamowienia" id="data_zamowienia" required></input>
</td>
<td>
                Kwota
                <input type="number" name="kwota" id="kwota" required>
</input>
</tr>
<tr>

</td>
<td>
                Stan
                <input type="text" name="stan" id="stan" required></input>
</td>
<td>
                Komentarz
                <input type="text" name="komentarz" id="komentarz" required></input>
</td>
<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="Dodaj" value="Dodaj" class="buttondodawanie"></td>
</tr>
</table>
</form>

</body>
</html>