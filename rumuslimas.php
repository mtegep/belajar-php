<form action="rumuslimas.php" method="POST">
    <h1> Rumus Luas permukaan, Keliling dan Volume Limas Segi Empat </h1>
    <p> Sisi : </p>
    <input type="number" name="Sisi" placeholder="Ex. 5" /><br>
    <p> Tinggi : </p>
    <input type="number" name="Tinggi" placeholder="Ex. 3" /><br>
    <input type="submit" name="proses" value="Hitung Luas & Keliling" />

</form>

<?php
    if( isset($_POST["proses"]) ){
        echo "<hr>";
        $s = $_POST["Sisi"];
        $t = $_POST["Tinggi"];
        $lp = ($s*$s) + (4*(1/2*$s*$t));
        $k = ($s*$t)/2;
        $v = 1/3 * ($s*$s) * $t;

        echo "Sisi : $s <br>";
        echo "Tinggi : $t <br>";
        echo "Luas permukaan limas : $lp <br>";
        echo "Keliling alas limas : $k <br>";
        echo "Volume limas : $v";

    }
?>