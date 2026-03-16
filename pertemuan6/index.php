<?php include 'logika.php'; ?>
<!DOCTYPE html> 
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Perhitungan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <h2>Perhitungan Total Pembelian</h2>
        <hr>
        <div class="info-row">
            <span>Nama Barang:</span>
            <strong><?php echo $dataBarang['nama']; ?></strong>
        </div>
        <div class="info-row">
            <span>Harga Satuan:</span>
            <span><?php echo formatRupiah($dataBarang['harga']); ?></span>
        </div>
        <div class="info-row">
            <span>Jumlah Beli:</span>
            <span><?php echo $jumlahBeli; ?></span>
        </div>
        <div class="info-row">
            <span>Total Harga (Sebelum Pajak):</span>
            <span><?php echo formatRupiah($totalSebelumPajak); ?></span>
        </div>
        <div class="info-row">
            <span>Pajak (10%):</span>
            <span><?php echo formatRupiah($nominalPajak); ?></span>
        </div>
        <div class="total-row">
            <span>Total Bayar:</span>
            <span><?php echo formatRupiah($totalBayar); ?></span>
        </div>
    </div>
</body>
</html>