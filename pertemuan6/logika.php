<?php
define("PAJAK", 0.10);

$dataBarang = [
    "nama" => "Keyboard",
    "harga" => 150000
];

$jumlahBeli = 2;

$totalSebelumPajak = $dataBarang['harga'] * $jumlahBeli;
$nominalPajak = $totalSebelumPajak * PAJAK;
$totalBayar = $totalSebelumPajak + $nominalPajak;

function formatRupiah($angka) {
    return "Rp " . number_format($angka, 0, ',', '.');
}
?>