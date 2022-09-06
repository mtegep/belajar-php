<form action="rumus.php" method="POST">
    <h1> Rumus Luas dan Keliling Persegi </h1>
    <p> Sisi : </p>
    <input type="number" name="Sisi" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung Luas & Keliling" />
</form>

<?php
    if( isset($_POST["proses"]) ){
        echo "<hr>";
        $sisi = $_POST["Sisi"];
        $luas = $sisi * $sisi;
        $keliling = 4 * $sisi;

        echo "Sisi : $sisi <br>";
        echo "Luas Persegi : $luas <br>";
        echo "Keliling Persegi : $keliling <br>";
    }
?>