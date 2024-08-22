<?php
$string = "Selamat Ulang Tahun yg k 1000";
preg_match_all('/(\d+)/', $string, $matches);
if (!empty($matches[0])){
    echo $string;
    echo "Terdapat angka pada kalimat tersebut: " . implode(", ", $matches[0]);
} else {
    echo    $string;
    echo "Tidak ada angka pada kalimat tersebut";
}
?>