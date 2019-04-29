<?php
    $arrNilai = array ("Rizaldy" => 100, "Aby" => 99, "Hafidz" => 98, "Rafi" => 97);

    echo "Menampilkan isi array dengan foreach : <br>";
    foreach ($arrNilai as $nama => $nilai) {
        echo "Nilai $nama = $nilai<br>";
    }
    
    reset ($arrNilai);
    echo "<br> Menampilkan isi array dengan while dan list : <br>";
    while (list ($nama, $nilai) = each($arrNilai)) {
        echo "Nilai $nama = $nilai<br>";
    }
?>