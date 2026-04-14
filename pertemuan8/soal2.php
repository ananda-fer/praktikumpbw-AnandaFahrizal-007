<div class="card">
    <h3>Cetak Bilangan Genap</h3>
    <form method="POST">
        <input type="number" name="genap" placeholder="Batas angka (misal: 10)" required>
        <button type="submit">Cetak</button>
    </form>

<?php
if (isset($_POST['genap'])) {
    $genap = $_POST['genap'];
    echo "<p>Bilangan genap dari 2 sampai $genap: <br>";
    for ($i = 2; $i <= $genap; $i++) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
    echo "</p>";
}
?>
</div>