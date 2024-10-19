


<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "klaender_event_fiscon");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query untuk mengambil semua event dari tabel 'events'
$result = $conn->query("SELECT * FROM events");
$events = [];

// Loop untuk menyiapkan data yang akan dikirim
while ($row = $result->fetch_assoc()) {
    $events[] = [
        "day" => (int)date("j", strtotime($row['event_date'])),
        "month" => (int)date("n", strtotime($row['event_date'])),
        "year" => (int)date("Y", strtotime($row['event_date'])),
        "events" => [[
            "title" => $row['title'],
            "time" => $row['time_from'] . " - " . $row['time_to']
        ]]
    ];
}

// Kirim data event dalam format JSON
echo json_encode(["events" => $events]);

// Tutup koneksi
$conn->close();
?>
