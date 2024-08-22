<?php
$siswa = [
    ['nama' => 'andi',
     'nilai' => [80,78,82,78,88],
],
    ['nama' => 'budi',
     'nilai' => [86,70,80,85,81],
],
    ['nama' => 'cindy',
     'nilai' => [83,91,70,73,81],
],
    ['nama' => 'dedi',
     'nilai' => [89,85,84,86,88],
],
];

foreach ($siswa as $murid){
    $totalnilai = array_sum($murid['nilai']);
    $jumlahnilai = count($murid['nilai']);
    $ratarata = $totalnilai / $jumlahnilai;

    echo "nama: " . $murid['nama'] . "<br>";
    echo "ratarata: " . $ratarata . "<br><br>";
}
?>