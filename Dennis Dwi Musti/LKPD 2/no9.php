<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung pecahan lembar | HTML | PHP</title>
</head>
<body>
    <h2>Menghitung pecahan lembar</h2>
    <?php
    function hitung_pecahan_lembar($uang) {
        $pecahan = array(100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 100);
        $lembar = array();
    
        foreach ($pecahan as $nilai) {
            $jumlah_lembar = floor($uang / $nilai);
            if ($jumlah_lembar > 0) {
                $lembar[] = "Rp. " . number_format($nilai, 0, ',', '.') . " : " . $jumlah_lembar;
                $uang -= $jumlah_lembar * $nilai;
            }
        }
        return $lembar;
    }
    
    $uang = 140500;
    $lembar = hitung_pecahan_lembar($uang);
    
    echo "Uang : Rp. " . number_format($uang, 0, ',', '.') . ".<br>";
    echo "Lembar Rupiah :<br>";
    foreach ($lembar as $lembaran) {
        echo $lembaran . "<br>";
    }
    ?>
</body>
</html>