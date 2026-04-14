<div class="card">
    <h3>Daftar Nama Hewan</h3>
    <form method="POST">
        <textarea name="input"placeholder="Masukkan nama hewan" required></textarea>
        <button type="submit">Tambah</button>
</form>

<?php
    $hewan = [];

    if (isset($_POST['input'])) {
        $hewan = array_filter(array_map('trim', explode("\n", $_POST['input'])));
    }
    foreach ($hewan as $index => $nama) {
        echo "$index: $nama<br>";
    }
    echo "Total: " . count($hewan) . " hewan";
    ?>
</div>