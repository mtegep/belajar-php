<form action="rumusjajargenjang.php" method="POST">
    <h1> Rumus Luas dan Keliling Jajar Genjang </h1>
    <p> Alas : </p>
    <input type="number" name="Alas" placeholder="Ex. 5" /><br>
    <p> Sisi Miring : </p>
    <input type="number" name="Sisi_Miring" placeholder="Ex. 3" /><br>
    <p> Tinggi : </p>
    <input type="number" name="Tinggi" placeholder="Ex. 2" /><br>
    <input type="submit" name="proses" value="Hitung Luas & Keliling" />

</form>

<?php
    if( isset($_POST["proses"]) ){
        echo "<hr>";
        $a = $_POST["Alas"];
        $b = $_POST["Sisi_Miring"];
        $t = $_POST["Tinggi"];
        $luas = $a * $t;
        $keliling = (2*$a) + (2*$b);

        echo "Alas : $a <br>";
        echo "Sisi Miring : $b <br>";
        echo "Tinggi : $t <br>";
        echo "Luas Jajar Genjang : $luas <br>";
        echo "Keliling Jajar Genjang  : $keliling <br>";

    }
?>