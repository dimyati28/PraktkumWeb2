<?php
$nama = "Ahmad Dimyati";
function tampil_nama()
{
	global $nama;
	echo "Nama mahasiswa : <b>$nama</b>";

}
echo "Perkenalan Diri : <br>";
tampil_nama();
?>