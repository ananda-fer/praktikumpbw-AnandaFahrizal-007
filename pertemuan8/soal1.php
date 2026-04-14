<div class="card">
<h3>Tentukan Jenis Kendaraan</h3>
<form method="POST">
    <input type="number" name="roda" placeholder="Masukkan jumlah roda" required>
    <button type="submit">Tentukan</button>
</form>

<?php
if (isset($_POST['roda'])) {
    $roda = $_POST['roda'];
    switch ($roda) {
        case 2:
            echo "Kendaraan dengan $roda roda adalah Motor, Sepeda, Skuter";
            break;
        case 3:
            echo "Kendaraan dengan $roda roda adalah Bajaj, Becak";
            break;
        case 4:
            echo "Kendaraan dengan $roda roda adalah Mobil.";
            break;
        case 6:
            echo "Kendaraan dengan $roda roda adalah Truk, Bus";
            break;
        case 8;
            echo "Kendaraan dengan $roda roda adalah Truk Dump, Truk Stryker Militer";
            break;
        case 10;
            echo "Kendaraan dengan $roda roda adalah Truk Trailer, Truk Tanker, Truk Fuso";
            break;
        default:
            echo "Jenis kendaraan dengan $roda roda tidak ada didaftar";
            break;
    }
    echo "</p>";
}
?>
</div>