<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $umur = intval($_POST['umur']);

    if (!empty($nama) && is_numeric($umur)) {
        if ($umur >= 18) {
            $_SESSION['status'] = "$nama, Anda termasuk Dewasa.";
        } else {
            $_SESSION['status'] = "$nama, Anda termasuk Belum Dewasa.";
        }
    } else {
        $_SESSION['status'] = "Harap isi data dengan benar!";
    }

    header("Location: index.php");
    exit();
}
?>
