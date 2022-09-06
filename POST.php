<form action="POST.php" method="POST">
    <input type="text" name="namalengkap" placeholder="Ex. Satrio" /><br>
    <input type="text" name="kelas" placeholder="Ex.11 RPL 2" /><br>
    <input type="number" name="nis" placeholder="Ex. 1122333" /><br>
    <input type="date" name="tanggallahir" placeholder="Ex. 01-01-2001" /><br>

    <br>
    <input type="submit" name="simpan" value="Simpan Data" />
</form>

<?php
    if( isset($_POST["simpan"]) ){
        echo "<hr>";
        
        $nama = $_POST["namalengkap"];
        $kelas = $_POST["kelas"];
        $nis = $_POST["nis"];
        $date = $_POST["tanggallahir"];

        echo "Nama Lengkap : $nama <br>";
        echo "Kelas : $kelas <br>";
        echo "Nis : $nis <br>";
        echo "Tanggal Lahir : $date <br>";
    }
?>