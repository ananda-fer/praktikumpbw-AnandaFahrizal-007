function cekNilai() {
    const nim = document.getElementById('nim').value.trim();
    const nama = document.getElementById('nama').value.trim();
    const nilaiInput = document.getElementById('nilai').value;
    const hasilDiv = document.getElementById('hasil');
    const nilai = parseFloat(nilaiInput);

    if (!nim || !nama || nilaiInput === "") {
        hasilDiv.innerHTML = `<div class="card error">Mohon isi semua data!</div>`;
        return;
    }

    if (Number.isNaN(nilai) || nilai < 0 || nilai > 100) {
        hasilDiv.innerHTML = `<div class="card error">Nilai tidak valid!</div>`;
        return;
    }

    let hurufMutu = "";
    if (nilai >= 80) {
        hurufMutu = "A";
    } else if (nilai >= 70) {
        hurufMutu = "B";
    } else if (nilai >= 60) {
        hurufMutu = "C";
    } else if (nilai >= 50) {
        hurufMutu = "D";
    } else {
        hurufMutu = "E";
    }

    hasilDiv.innerHTML = `
        <div class="card result">
            <div class="user">
                <div class="avatar">${escapeHtml(nim.slice(-3))}</div>
                <div class="info">
                    <div class="name">${escapeHtml(nama)}</div>
                    <div class="nim">NIM: ${escapeHtml(nim)}</div>
                </div>
            </div>
            <div class="grade ${hurufMutu.toLowerCase()}">${hurufMutu}</div>
        </div>
    `;
}

function escapeHtml(str) {
    return String(str)
        .replace(/&/g, '&amp;')
        .replace(/</g, '&lt;')
        .replace(/>/g, '&gt;')
        .replace(/"/g, '&quot;')
        .replace(/'/g, '&#39;');
}

document.addEventListener('DOMContentLoaded', function(){
    const btn = document.getElementById('cekBtn');
    if (btn) btn.addEventListener('click', cekNilai);
});