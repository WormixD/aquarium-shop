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
        .result {
            border: 1px solid #ccc;
            padding: 10px;
            background-color: #5fbdff;
            color: #fff;
            text-align:center;
            margin-left: 20%;
            margin-right: 20%;
            padding-bottom:2%;
            margin-bottom:5%;
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
            margin-bottom: 15%;
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
    $polaczenie = mysqli_connect("localhost", "root", "", "sklep akwarystyczny");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $imie = $_POST["imie"];
        $nazwisko = $_POST["nazwisko"];
        $email = $_POST["email"];
        $tytul = $_POST["tytul"];
        $wiadomosc = $_POST["wiadomosc"];
        $zgoda_przetwarzanie_danych = isset($_POST["zgoda_przetwarzanie_danych"]) ? "Tak" : "Nie"; // Sprawdzenie, czy checkbox został zaznaczony

        $insert_klient = mysqli_query($polaczenie, "INSERT INTO klienci_tab (imie, nazwisko, adres_email) VALUES ('$imie', '$nazwisko', '$email')");

        if ($insert_klient) {
            
            $id_klienta = mysqli_insert_id($polaczenie);

            echo '<table>';
            echo '<tr><th colspan="2">Dane formularza</th></tr>';
            echo '<tr><td>ID Klienta</td><td>' . $id_klienta . '</td></tr>';
            echo '<tr><td>Imię</td><td>' . $imie . '</td></tr>';
            echo '<tr><td>Nazwisko</td><td>' . $nazwisko . '</td></tr>';
            echo '<tr><td>Email</td><td>' . $email . '</td></tr>';
            echo '<tr><td>Tytuł</td><td>' . $tytul . '</td></tr>';
            echo '<tr><td>Wiadomość</td><td>' . $wiadomosc . '</td></tr>';
            echo '<tr><td>Akceptacja przetwarzania danych</td><td>' . $zgoda_przetwarzanie_danych . '</td></tr>';
            echo '</table>';

            if (isset($_FILES["plik"]) && $_FILES["plik"]["error"] == UPLOAD_ERR_OK) {
                // Dane z pliku
                $nazwaPliku = $_FILES["plik"]["name"];
                $rozmiarPliku = $_FILES["plik"]["size"];
                $typPliku = $_FILES["plik"]["type"];
                $tempPliku = $_FILES["plik"]["tmp_name"];

                $katalogDocelowy = "D:/programy/Xampp/htdocs/Sklep Akwarystyczny/przeslane_pliki/";
                $sciezkaZapisu = $katalogDocelowy . $nazwaPliku;

                if (!file_exists($katalogDocelowy)) {
                    mkdir($katalogDocelowy, 0777, true);
                }

                if (move_uploaded_file($tempPliku, $sciezkaZapisu)) {
                    // Wyświetlenie informacji o pliku
                    echo '<div class="result">';
                    echo '<h2>Przesłany plik:</h2>';
                    echo 'Nazwa pliku: ' . $nazwaPliku . '<br>';
                    echo '</div>';
                } else {
                    echo "Błąd podczas przenoszenia pliku.";
                }
            }
            $insert_wiadomosc = mysqli_query($polaczenie, "INSERT INTO wiadomości_tab (id_klienta, email, tytul, wiadomosc, zgoda_przetwarzanie_danych) VALUES ('$id_klienta', '$email', '$tytul', '$wiadomosc', '$zgoda_przetwarzanie_danych')");

            if ($insert_wiadomosc) {
                mysqli_close($polaczenie);
                header("location:index.php");
                exit;
            } else {
                echo "Błąd podczas dodawania wiadomości do bazy danych.";
            }
        } else {
            echo "Błąd podczas dodawania klienta do bazy danych.";
        }
    } else {
        echo "Nieprawidłowe żądanie.";
    }
    ?>
    <a href="index.php" class="back-anchor">Powrót</a>
</body>
</html>
