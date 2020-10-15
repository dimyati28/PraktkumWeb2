<html>
<head>
<title>Praktek Array</title>
</head>
<body>
	<h1>DAFTAR LOMBA KOMPETENSI MAHASISWA KAMPUS IPEM TELUKNAGA</h1>
	<?php  
		$peserta = [
					["123", "Ahmad Dimyati", "0895331003808"],
					["124", "Haidir", "08124546512301"]
				];
	?>

	<?php foreach ($peserta as $pst) : ?>
		<ul>
			<li>Nomor Peserta : <?= $pst[0]; ?></li>
			<li>Nama Peserta : <?= $pst[1]; ?></li>
			<li>Nomor Hp : <?= $pst[2]; ?></li>
		</ul>
	<?php endforeach; ?>

</body>
</html>