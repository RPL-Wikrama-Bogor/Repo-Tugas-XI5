<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesuaikan Kategori | HTML | PHP</title>
</head>
<body>
    <h2>Menentukan Kategori Usia</h2>
    <?php
    $data = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];
    echo "List Usia : ";
    foreach ($data as $usia) {
    echo $usia . ", ";
    }
    echo "<br>";

    $dewasa = 0;
    $anak = 0;
    foreach ($data as $usia) {
    if ($usia >= 17) {
        $dewasa++;
    } else {
        $anak++;
    }
}
echo "Jumlah Kategori Dewasa : " . $dewasa . "<br>";
echo "Jumlah Kategori Anak-anak : " . $anak . "<br>";
    ?>
</body>
</html>