<?php
$polaczenie = mysqli_connect("localhost", "root", "", "sklep akwarystyczny");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['del_id'])) {
        $id = mysqli_real_escape_string($polaczenie, $_POST['del_id']);

        $usun = mysqli_query($polaczenie, "DELETE FROM zamowienia_tab WHERE id_zamowienia = '$id'");

        if ($usun) {
            mysqli_close($polaczenie);
            header("location:zamowienia_klientow.php");
            exit;
        } else {
            echo "Usuwanie nie powiodło się: " . mysqli_error($polaczenie);
        }
    } else {
        echo "Brak przekazanego identyfikatora (ID Klienta).";
    }
} else {
    echo "Nieprawidłowe żądanie.";
}
?>
