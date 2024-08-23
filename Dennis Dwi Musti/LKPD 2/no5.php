<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Bilangan yang sama antara 2 variabel</h3>
    <?php
        $bill1 = [80, 77, 65, 89, 55, 12, 90, 86];
        $bill2 = [77, 99, 55, 81, 45, 90, 91, 98];

        $intersection = array_intersect($bill1, $bill2);
        $notInBoth = array_diff($bill1, $intersection);

        $intersectionString = implode(', ', $intersection);
        $notInBothString = implode(', ', $notInBoth);

        echo "<span class='color'> Bilangan yang ada di kedua variable: </span>\n";
        echo $intersectionString . "\n"."<br>";

        echo "<span class='color'> Bilangan yang tidak ada di kedua variable: </span>\n";
        echo $notInBothString . "\n";
    ?>
</body>
</html>