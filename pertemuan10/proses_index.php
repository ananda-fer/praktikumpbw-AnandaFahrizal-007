<?php
include 'koneksi_db.php'; // Koneksi database

// Inisialisasi variabel pencarian
$search_judul = isset($_GET['judul']) ? $_GET['judul'] : '';
$search_tahun = isset($_GET['tahun_terbit']) ? $_GET['tahun_terbit'] : '';

// Query dasar untuk menampilkan daftar buku
$query = "SELECT * FROM buku WHERE 1=1";

// Tambahkan filter jika user mengisi kolom pencarian judul
if (!empty($search_judul)) {
    $judul_safe = $conn->real_escape_string($search_judul);
    $query .= " AND Judul LIKE '%$judul_safe%'";
}

// Tambahkan filter jika user mengisi kolom pencarian tahun terbit
if (!empty($search_tahun)) {
    $tahun_safe = $conn->real_escape_string($search_tahun);
    $query .= " AND Tahun_Terbit = '$tahun_safe'";
}

// Jalankan query
$result = $conn->query($query);
?>