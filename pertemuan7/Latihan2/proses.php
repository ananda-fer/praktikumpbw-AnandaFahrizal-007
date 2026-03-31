<?php
$npm = isset($_GET['npm']) ? trim($_GET['npm']) : '';
$nama = isset($_GET['nama']) ? trim($_GET['nama']) : '';
$prodi = isset($_GET['prodi']) ? trim($_GET['prodi']) : '';
$semester = isset($_GET['semester']) ? (int) $_GET['semester'] : 0;
$biaya_ukt = isset($_GET['biaya_ukt']) ? (float) $_GET['biaya_ukt'] : 0;

$diskonPersen = 0;
if ($biaya_ukt >= 5000000) {
    $diskonPersen = 10;
    if ($semester > 8) {
        $diskonPersen = 15;
    }
}

$diskonRp = ($biaya_ukt * $diskonPersen) / 100;
$harus_dibayar = $biaya_ukt - $diskonRp;

function formatRupiah($nominal) {
    return 'Rp ' . number_format($nominal, 0, ',', '.');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total diskon pembayaran UKT</title>
    <style>
        body{ 
            font-family: Arial, sans-serif; 
        }
        .box{
            border: 2px solid #333; 
            padding: 20px; 
            width: 420px; 
        }
        .box h2{
            margin-top: 0; 
        }
        .row{
            margin-bottom: 6px; 
        }
        .label{ 
            display: inline-block; 
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>Hasil Diskon Mahasiswa</h2>
        <div class="row"><span class="label">NPM :</span> <?php echo htmlspecialchars($npm); ?></div>
        <div class="row"><span class="label">NAMA :</span> <?php echo htmlspecialchars($nama); ?></div>
        <div class="row"><span class="label">PRODI :</span> <?php echo htmlspecialchars($prodi); ?></div>
        <div class="row"><span class="label">SEMESTER :</span> <?php echo $semester; ?></div>
        <div class="row"><span class="label">BIAYA UKT :</span> <?php echo formatRupiah($biaya_ukt); ?></div>
        <div class="row"><span class="label">DISKON :</span> <?php echo $diskonPersen; ?>% (<?php echo formatRupiah($diskonRp); ?>)</div>
        <div class="row"><span class="label">YANG HARUS DIBAYAR :</span> <?php echo formatRupiah($harus_dibayar); ?></div>
    </div>
</body>
</html>
