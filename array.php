<?php
    $nama = "Yoshi";
    echo $nama . "<br>";

    $nama_array = array("Dava", "Tegep", "Ferdinand", "Satrio", "Andi" );
    print_r ($nama_array); echo "<br>";
    
    echo $nama_array[0] . "<br>" ;
    echo $nama_array[1] . "<br>";
    echo $nama_array[2];
    
    echo "<hr>";

    // Versi Foreach
    foreach ($nama_array AS $namalengkap) {
        echo $namalengkap . "<br>";
    }

    echo "<hr>";

    // Versi For
    for ($i=0; $i < 5; $i++) {
        echo $nama_array[$i] . "<br>";
    }

    echo "<hr>";

    // Multiple Array
    $kelas11rpl2 = array(
        array("Satrio", "Subang", "Mancing"),
        array("Tegep", "Bandung", array("Basket", "Bola")),
        array("Dian", "Jakarta", array("Berenang", array("Laut", "Sungai"))),
        array("Salsa", array("Surabaya", "Jepang")),
    );
    echo "<pre>";
    print_r ($kelas11rpl2);
    echo "</pre>";

    echo "<hr>";
    echo $kelas11rpl2[0][0] . "<br>"; // Satrio
    echo $kelas11rpl2[1][2][1] . "<br>"; // Bola
    echo $kelas11rpl2[2][2][0] . "<br>"; // Berenang
    echo $kelas11rpl2[2][2][1][0] . "<br>"; // Laut
    echo $kelas11rpl2[3][1][1] . "<br>"; // Jepang

    echo "<hr>";
?>