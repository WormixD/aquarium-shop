<?php
$polaczenie = mysqli_connect("localhost", "root", "", "sklep akwarystyczny");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['del_id'])) {
        $id = mysqli_real_escape_string($polaczenie, $_POST['del_id']);

        $usun = mysqli_query($polaczenie, "DELETE FROM wiadomości_tab WHERE id_wiadomosci = '$id'");

        if ($usun) {
            mysqli_close($polaczenie);
            header("location:wiadomosci.php");
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
