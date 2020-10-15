<html>
<head>

<title>PENGGUNAAN IF ELSEIF ELSE</title>
</head>
<body>
    Nilai Andi = 83 <br>
    Nilai Budi = 85 <br>
    Nilai Citra = 90 <br><br>
<?PHP
$andi = 83;
$budi = 85;
$citra = 90;
if($andi > $budi)
{
echo "Nilai Andi lebih besar dari Budi";
}
else if ($andi > $citra)
{
echo "Nilai Andi lebih kecil dari Citra";
}
else
{
echo "Nilai Andi lebih kecil dari Budi dan Citra";
}



?>


</body>

</html>