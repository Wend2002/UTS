<!DOCTYPE html>
<html>
<head>
    <title>Data Group B Piala Asia Qatar U-23</title>
</head>
<body>
    <h2>Data Group B Piala Asia Qatar U-23</h2>
    <?php
    // Ambil data dari form jika sudah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $negara = $_POST["negara"];
        $pertandingan = $_POST["pertandingan"];
        $menang = $_POST["menang"];
        $seri = $_POST["seri"];
        $kalah = $_POST["kalah"];
        
        // Hitung total poin
        $poin = $menang * 3 + $seri;
        
        // Tampilkan hasil
        echo "<p>Per " . date("d M Y H:i:s") . " (Waktu dan Jam Sekarang)</p>";
        echo "<p>Wendi/211011402033</p>";
        echo "<table border='1'>";
        echo "<tr><th>Negara</th><th>P</th><th>M</th><th>S</th><th>K</th><th>Poin</th></tr>";
        echo "<tr><td>$negara</td><td>$pertandingan</td><td>$menang</td><td>$seri</td><td>$kalah</td><td>$poin</td></tr>";
        echo "</table>";
        
        // Simpan data ke dalam file db.html
        $data = "<tr><td>$negara</td><td>$pertandingan</td><td>$menang</td><td>$seri</td><td>$kalah</td><td>$poin</td></tr>";
        file_put_contents("db.html", $data, FILE_APPEND);
    }
    ?>
    <br>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="negara">Nama Negara:</label>
        <select name="negara">
            <option value="Korea Selatan U-23">Korea Selatan U-23</option>
            <option value="Jepang U-23">Jepang U-23</option>
            <option value="Tiongkok U-23">Tiongkok U-23</option>
            <option value="Uni Emirat Arab U-23">Uni Emirat Arab U-23</option>
        </select>
        <br><br>
        <label for="pertandingan">Jumlah Pertandingan (P):</label>
        <input type="text" name="pertandingan">
        <br><br>
        <label for="menang">Jumlah Menang (M):</label>
        <input type="text" name="menang">
        <br><br>
        <label for="seri">Jumlah Seri (S):</label>
        <input type="text" name="seri">
        <br><br>
        <label for="kalah">Jumlah Kalah (K):</label>
        <input type="text" name="kalah">
        <br><br>
        <label for="kalah">Jumlah Point:</label>
        <input type="text" name="Point">
        <br><br>
        <label for="kalah">Nama Operator:</label>
        <input type="text" name="Nama Operator">
        <br><br>
        <label for="kalah">Nim Mahasiswa:</label>
        <input type="text" name="NIM">
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
