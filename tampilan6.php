<?php
echo "<b>BIODATA SISWA</b>";
echo "<br>";
$nama =$_POST['nama'];
echo "Nama saya adalah : " . $nama;
echo "<br>";
$alamat=$_POST['alamat'];
echo "Alamat saya berada di : " . $alamat;
echo "<br>";
$tanggal=$_POST['tanggal'];
echo "Tanggal lahir saya : " . $tanggal;
echo "<br>";
$umur=$_POST['umur'];
echo "Umur saya : " . $umur;
echo"<br>";
$sekolah=$_POST['sekolah'];
echo "Sekolah saya : " . $sekolah;
echo "<br>";
$rombel=$_POST['rombel'];
echo "Rombel saya : " . $rombel;
echo "<br>";
echo "<br>";
echo "<b>HASIL NILAI</b>";
echo "<br>";
$produktif=$_POST['produktif'];
echo "nilai produktif : " .$produktif;

if ($produktif >= 90 && $produktif <= 100)
{
echo " (A)";
}else if( $produktif >= 80 )
{
echo " (B)";
}
else if( $produktif >= 70 && $produktif <=80 )
{
echo " (C)";
}
else
{
echo " (TIDAK LULUS)" ;
}
echo "<br>";

$matematika=$_POST['matematika'];

echo "nilai matematika : " .$matematika;
if ($matematika >= 90 && $matematika <= 100)
{
echo " (A)";
}else if( $matematika >= 80 )
{
echo " (B)";
}
else if( $matematika >= 70 && $matematika <=80 )
{
echo " (C)";
}
else
{
echo " (TIDAK LULUS)" ;
}
echo "<br>";

$agama=$_POST['agama'];
echo "nilai agama : " .$agama;

if ($agama >= 90 && $agama <= 100)
{
echo " (A)";
}else if( $agama >= 80 )
{
echo " (B)";
}
else if( $agama >= 70 && $agama <=80 )
{
echo " (C)";
}
else
{
echo " (TIDAK LULUS)" ;
}
echo "<br>";
$pipas=$_POST['pipas'];
echo "nilai pipas : " .$pipas;

if ($pipas >= 90 && $pipas <= 100)
{
echo " (A)";
}else if( $pipas >= 80 )
{
echo " (B)";
}
else if( $pipas >= 70 && $pipas <=80 )
{
echo " (C)";
}
else
{
echo " (TIDAK LULUS)" ;
}
echo "<br>";

$sunda=$_POST['sunda'];
echo "nilai sunda : " .$sunda;

if ($sunda >= 90 && $sunda <= 100)
{
echo " (A)";
}else if( $sunda >= 80 )
{
echo " (B)";
}
else if( $sunda >= 70 && $sunda <=80 )
{
echo " (C)";
}
else
{
echo " (TIDAK LULUS)" ;
}
echo "<br>";

$sejarah=$_POST['sejarah'];
echo "nilai sejarah : " .$sejarah;

if ($sejarah >= 90 && $sejarah <= 100)
{
echo " (A)";
}else if( $sejarah >= 80 )
{
echo " (B)";
}
else if( $sejarah >= 70 && $sejarah <=80 )
{
echo " (C)";
}
else
{
echo " (TIDAK LULUS)" ;
}
echo "<br>";
echo "<br>";


$total= $produktif + $matematika +  $agama + $pipas + $sunda + $sejarah;
$rata= $total / 6;
$rata= round($rata);
echo "Nilai rata rata saya : " . $rata;
echo "<br>";
echo "Nilai max saya : ";
echo max($produktif, $matematika, $agama, $pipas, $sunda, $sejarah);
echo "<br>";
echo "Nilai min saya : ";
echo min($produktif, $matematika,  $agama, $pipas, $sunda, $sejarah);
echo "<br>";
echo "<br>";


?>
<br>
<DOCTYPE html>
<html>
<body>
<a href="task6.php">input ulang</a>
</body>
</html>