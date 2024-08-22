<?php
$bil1 = [80,77,65,89,55,12,90,86];
$bil2 = [77,99,55,81,45,90,91,98];

$kel1 = array_intersect($bil1, $bil2);
$kela = array_diff($bil1, $bil2);
$kelb = array_diff($bil2, $bil1);
$kel2 = array_merge( $kela, $kelb);

echo"ada di dua variabel" . print_r($kel1). "<br>";
echo"tidak ada di dua variabel" . print_r($kel2);
?>