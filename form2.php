<html>
	<head>
		<title>Output Form</title>
	</head>
	<body align="center">
		<h3>Data Pendaftar</h3>
		<?php
			echo "Nama 			: ".$_GET['nama']."</br>";
			echo "Password 		: ".$_GET['password']."</br>";
			echo "Jenis Kelamin : ".$_GET['jenis_kelamin']."</br>";
			echo "Keahlian 		: ".$_GET['keahlian']."</br>";
			echo "Tempat Lahir 	: ".$_GET['tempat_lahir']."</br>";
			echo "Diskripsi Diri: ".$_GET['deskripsi']."</br>";
		?>
	</body>
</html>
