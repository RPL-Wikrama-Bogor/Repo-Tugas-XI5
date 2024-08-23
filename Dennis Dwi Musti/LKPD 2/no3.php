<html>
<head>
	<title>Perkalian 5</title>
</head>
<body>
	<h2>Perkalian 5</h2>
	<?php
		for ($i = 1; $i <= 10; $i++) {
			$hasil = $i * 5;
			if (strpos((string)$hasil, '0') !== false) {
				continue;
			}
			echo "$i x 5 = $hasil<br>";
		}
	?>
</body>
</html>