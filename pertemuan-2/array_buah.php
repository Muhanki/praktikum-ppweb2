<?php
    $ar_buah = ["Apel", "Jeruk", "Mangga", "Pisang", "Duren"];
    //menampilkan buah insex ke 1
    echo $ar_buah[1];

    //menampilkan jumlah buah
    echo "<br/>Jumlah Buah : " .count($ar_buah);

    //menampilkan semua buah
    echo "<ol>";
    foreach ($ar_buah as $buah) {
        echo "<li>". $buah ."</li>";
    } echo "</ol>"; 

    //menambahkan buah
    $ar_buah[] = "Melon";

    //menghapus buah indez ke 1
    unset($ar_buah[1]);

    //mengubah buah index ke 2 menjadi mangis
    $ar_buah[2] = "Manggis";

    //menampilkan semua buah dengan indexnya
    echo "<ul>";
    foreach ($ar_buah as $buah => $v) {
        echo "<li>Buah index - ". $buah ." adalah  ". $v ."</li>";
    } echo "</ul>";

    echo "<ul>";
    sort($ar_buah);
    foreach ($ar_buah as $buah) {
        echo "<li>Buah Index - ". $buah ." adalah ". $buah ."</li>";
    } echo "</ul>";


?>