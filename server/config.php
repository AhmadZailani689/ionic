<?php
// Konfigurasi koneksi ke database
$host = "localhost";     // nama host / server
$user = "root";          // username database (default: root)
$pass = "";              // password database (kosong jika di localhost)
$db   = "apijson"; 

// Membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

// Mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    // echo "Koneksi berhasil"; // bisa diaktifkan untuk test
}
?>