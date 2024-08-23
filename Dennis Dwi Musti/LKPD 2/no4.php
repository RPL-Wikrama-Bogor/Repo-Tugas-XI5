<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Perkalian 1 dan 2 dibalik</h2>
    <?php
        for ($k = 1; $k <= 20; $k++) {
            $i = ($k > 10) ? 2 : 1;
            $j = 11 - ($k % 10 == 0 ? 10 : $k % 10);
            echo $j . "x" . $i . "=" . ($i * $j) . "<br>";

            if ($k == 10 ) {
                echo "<br>";
            }
        }
    ?>
</body>
</html>