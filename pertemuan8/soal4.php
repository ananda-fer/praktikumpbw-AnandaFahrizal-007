<div class="card">
    <h3>Angka Genap atau Ganjil</h3>
    <form method="POST">
        <input type="number" name="angka" placeholder="Masukkan angka" required>
        <button type="submit">Cek Angka</button>
    </form>

<?php
$angka = null; 
$status = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $angka = (int)$_POST['angka'];
    $status = ($angka % 2 === 0) ? "Genap" : "Ganjil";
    echo "Angka " . $angka . " adalah " . $status;
}
?>
</div>
