<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rata-Rata | Html | Php</title>
</head>
<body>
    <h2>Rata-Rata Nilai</h2>
    <?php
    $student = [
        [

            'nama' => 'Andi',
            'nilai'=> [80,78,82,78,88],
        ],
        [
            'nama' => 'Beni',
            'nilai' => [86,70,80,85,81],
        ],
        [
            'nama' => 'Dani',
            'nilai' => [83,91,70,73,81],
        ],
        [
            'nama' => 'Eko',
            'nilai' => [89,85,84,86,88],
        ],
];

foreach ($student as $murid) {
    $jumlah_nilai = array_sum($murid['nilai']);
    $rata_rata = $jumlah_nilai / count($murid['nilai']);
    echo "Rata-rata nilai $murid[nama] adalah $rata_rata<br>";
}
?>
</body>
</html>