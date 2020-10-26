<?php

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$matkul = $_POST['matkul'];
$absen  = $_POST['absen'];
$netika = $_POST['netika'];
$tugas = $_POST['tugas'];
$nuts = $_POST['nuts'];
$nuas = $_POST['nuas'];

$nilaiabsen = $absen * 0.15;
$nilai_etika = $netika * 0.1;
$ntugas = $tugas * 0.2;
$nilai_uts = $nuts * 0.25;	
$nilai_uas = $nuas * 0.3;


$nilai_akhir = $nilaiabsen + $nilai_etika + $ntugas + $nilai_uts + $nilai_uas;
if ($nilai_akhir>=80)
{
$grade = "A";
}
elseif ($nilai_akhir>=70)
{
$grade = "B";
}
elseif ($nilai_akhir>=50)
{
$grade = "C";
}
elseif ($nilai_akhir>=40)
{
$grade = "D";
}
else
{
$grade = "E";
}

echo

"
<h1 align=center>Hitung Nilai AKhir Mahasiswa</h1>
<hr>
<table>
<tr>
<td>Nama Mahasiswa</td><td>:</td><td>$nama</td></tr>
<tr>
<td>Nim Mahasiswa</td><td>:</td><td>$nim</td></tr>
<tr>
<td>Mata Kuliah</td><td>:</td><td>$matkul</td></tr>
<tr>
<td>Nilai Absen</td><td>:</td><td>$nilaiabsen</td></tr>
<tr>
<td>Nilai Tugas</td><td>:</td><td>$ntugas</td></tr>
<tr>
<td>Nilai UTS</td><td>:</td><td>$nilai_uts</td></tr>
<tr>
<td>Nilai UAS</td><td>:</td><td>$nilai_uas</td></tr>
<tr>
<td>Nilai Akhir</td><td>:</td><td><b>$nilai_akhir</td></tr>
<tr>
<td>Grade</td><td>:</td><td><b>$grade</td></tr>
</table>
";

 
?>