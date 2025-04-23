<?php
$polaczenie = mysqli_connect("localhost", "root", "", "sklep akwarystyczny");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['del_id'])) {
        $id = mysqli_real_escape_string($polaczenie, $_POST['del_id']);

        $query_sprawdzanie_wiadomosci = "SELECT COUNT(*) as liczba_wiadomosci FROM wiadomości_tab WHERE id_klienta = '$id'";
        $result_sprawdzanie_wiadomosci = mysqli_query($polaczenie, $query_sprawdzanie_wiadomosci);

        if ($result_sprawdzanie_wiadomosci) {
            $row = mysqli_fetch_assoc($result_sprawdzanie_wiadomosci);
            $liczba_wiadomosci = $row['liczba_wiadomosci'];

            if ($liczba_wiadomosci > 0) {
                echo "Nie można usunąć klienta, ponieważ istnieją powiązane wiadomości.";
            } else {
                $query_sprawdzanie_powiazan = "SELECT COUNT(*) as liczba_zamowien FROM zamowienia_tab WHERE id_klienta = '$id'";
                $result_sprawdzanie_powiazan = mysqli_query($polaczenie, $query_sprawdzanie_powiazan);

                if ($result_sprawdzanie_powiazan) {
                    $row_powiazania = mysqli_fetch_assoc($result_sprawdzanie_powiazan);
                    $liczba_zamowien = $row_powiazania['liczba_zamowien'];

                    if ($liczba_zamowien > 0) {
                        echo "Nie można usunąć klienta, ponieważ istnieją powiązane zamówienia.";
                    } else {
                        $usun = mysqli_query($polaczenie, "DELETE FROM klienci_tab WHERE id_klienta = '$id'");

                        if ($usun) {
                            mysqli_close($polaczenie);
                            header("location:klienci.php");
                            exit;
                        } else {
                            echo "Usuwanie nie powiodło się: " . mysqli_error($polaczenie);
                        }
                    }
                } else {
                    echo "Błąd przy sprawdzaniu powiązań zamówień: " . mysqli_error($polaczenie);
                }
            }
        } else {
            echo "Błąd przy sprawdzaniu powiązań wiadomości: " . mysqli_error($polaczenie);
        }
    } else {
        echo "Brak przekazanego identyfikatora (ID Klienta).";
    }
} else {
    echo "Nieprawidłowe żądanie.";
}
?>
