<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $event_name = $_POST['event_name'];
    $event_date = $_POST['event_date'];
    $event_time_from = $_POST['event_time_from'];
    $event_time_to = $_POST['event_time_to'];
    $event_password = $_POST['event_password'];

    // Menyimpan data event ke database
    $sql = "INSERT INTO klaender_event_fiscon (event_name, event_date, time_from, time_to, password) 
            VALUES ('$event_name', '$event_date', '$event_time_from', '$event_time_to', '$event_password')";

    if ($conn->query($sql) === TRUE) {
        echo "Event berhasil ditambahkan!";
        // Redirect ke halaman sebelumnya
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit(); // Pastikan script berhenti setelah redirect
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
