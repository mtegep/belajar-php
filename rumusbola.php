<form action="rumusbola.php" method="POST">
    <h1> Rumus Luas permukaan, Keliling dan Volume Bola </h1>
    <p> Jari - Jari : </p>
    <input type="number" name="Jari" placeholder="Ex. 5" />
    <input type="submit" name="proses" value="Hitung Luas permukaan & Volume" />

</form>

<?php
    if( isset($_POST["proses"]) ){
        echo "<hr>";
        $r = $_POST["Jari"];
        $phi = 3.14;
        $lp = 4 * $phi * ($r*$r);
        $k = 4/3 * $phi * ($r*$r);
        $v = 4/3 * $phi * ($r*$r*$r);

        echo "Jari-Jari : $r <br>";
        echo "Phi : $phi <br>";
        echo "Luas permukaan bola : $lp <br>";
        echo "Volume Bola : $v <br>";
    }
?>