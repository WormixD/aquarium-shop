<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email-login"];
    $password = $_POST["password"];
    $validUser = ($email == "szymon@mail.com" && $password == "ZAQ!2wsx");

    if ($validUser) {
        $_SESSION["user"] = "Szymon";
        header("Location: index.php");
        exit();
    } else {
        $error = "Invalid email or password. Please try again.";
    }
}
?>