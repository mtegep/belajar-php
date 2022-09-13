<form action="rumuslingkaran.php" method="POST">
    <h1> Rumus Luas dan Keliling Lingkaran </h1>
    <p> Jari - Jari : </p>
    <input type="number" name="Jari" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung Luas & Keliling" />

</form>

<?php
    if( isset($_POST["proses"]) ){
        echo "<hr>";
        $r = $_POST["Jari"];
        $phi = 3.14;
        $luas = $phi * ($r * $r);
        $keliling = 2 * $phi * $r;

        echo "Jari-Jari : $r <br>";
        echo "Phi : $phi <br>";
        echo "Luas Lingkaran : $luas <br>";
        echo "Keliling Lingkaran  : $keliling <br>";
    }
?>