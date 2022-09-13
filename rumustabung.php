<form action="rumustabung.php" method="POST">
    <h1> Rumus Luas selimut, Luas permukaan, Keliling dan Volume Tabung </h1>
    <p> Jari - Jari : </p>
    <input type="number" name="Jari" placeholder="Ex. 5" /><br>
    <p> Tinggi : </p>
    <input type="number" name="Tinggi" placeholder="Ex. 3" /><br>
    <input type="submit" name="proses" value="Hitung Luas & Keliling" />

</form>

<?php
    if( isset($_POST["proses"]) ){
        echo "<hr>";
        $r = $_POST["Jari"];
        $phi = 3.14;
        $t = $_POST["Tinggi"];
        $ls = 2 * $phi * $r * $t;
        $lp = (2*$phi*$r*$t) + (2*$phi*($r*$r));
        $k = 2 * $phi * $r;
        $v = $phi * ($r*$r) * $t;

        echo "Jari-Jari : $r <br>";
        echo "Phi : $phi <br>";
        echo "Tinggi : $t <br>";
        echo "Luas selimut tabung : $ls <br>";
        echo "Luas permukaan tabung : $lp <br>";
        echo "Keliling alas tabung : $k <br>";
        echo "Volume tabung : $v";
    }
?>