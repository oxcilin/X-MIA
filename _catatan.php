<?php
// Memanggil file koneksi ke database
require_once 'db_conn.php';

// Memeriksa apakah form telah disubmit
if (isset($_POST['submit'])) {
    // Mengambil nilai dari textarea
    $catatan = $_POST['catatan'];

    // Menyimpan data ke dalam tabel catatan
    $query = "INSERT INTO catatan (tanggal, jam, textarea) VALUES (CURDATE(), CURTIME(), '$catatan')";
    $result = mysqli_query($conn, $query);

    // Memeriksa apakah data berhasil disimpan atau tidak
    if ($result) {
        header('Location: data catatan');
    } else {
        header('Location: data catatan');
    }
}
?>
