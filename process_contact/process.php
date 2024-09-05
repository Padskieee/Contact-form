<?php
require '../koneksi/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nama_awal = htmlspecialchars($_POST['Nama_awal']);
    $Nama_akhir = htmlspecialchars($_POST['Nama_akhir']);
    $Email = htmlspecialchars($_POST['Email']);
    $Kelas = htmlspecialchars($_POST['Kelas']);
    $Gender = htmlspecialchars($_POST['Gender']);
    $Saran = htmlspecialchars($_POST['Saran']);

    $sql = "INSERT INTO user (Nama_awal, Nama_akhir, Email, Kelas, Gender, Saran) VALUES (:Nama_awal, :Nama_akhir, :Email, :Kelas, :Gender, :Saran)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':Nama_awal', $Nama_awal);
    $stmt->bindParam(':Nama_akhir', $Nama_akhir);
    $stmt->bindParam(':Email', $Email);
    $stmt->bindParam(':Kelas', $Kelas);
    $stmt->bindParam(':Gender', $Gender);
    $stmt->bindParam(':Saran', $Saran);

    if ($stmt->execute()) {
        echo "Your message has been sent successfully!";
    } else {
        echo "There was an error sending your message.";
    }
}
?>