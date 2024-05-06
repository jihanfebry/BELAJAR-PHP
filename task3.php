<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>z</title>
</head>
<body>
    <center> Memulai Belajar HTML - PHP</center>
    <form action= "#" method = "post">
        Nama<br> <input type = "text" name = "nama"></input> <br><br>
        Alamat<br> <input type = "text" name = "alamat"></input> <br><br>
        Tanggal lahir<br> <input type = "date" name = "tanggal"></input> <br><br>  
        Sekolah<br> <input type = "text" name = "sekolah"></input> <br><br>   
        Kelas<br> <input type = "text" name = "kelas"></input> <br><br>
        <input type = "submit" text = "cek">
  </form>

  <?php
  if ($_SERVER ['REQUEST_METHOD'] == "POST"){
  $nama = $_POST['nama'];

  $alamat = $_POST['alamat'];

  $tanggal = $_POST['tanggal'];

  $sekolah = $_POST['sekolah'];

  $kelas = $_POST['kelas'];
  
  echo "<br/>";
  echo "Nama saya adalah " . $nama;
  echo "<br/>";
  echo "Alamat saya di " . $alamat;
  echo "<br/>";
  echo "Tanggal lahir saya " . $tanggal;
  echo "<br/>";
  echo "Saya bersekolah di " . $sekolah;
  echo "<br/>";
  echo "Saya dari kelas " . $kelas;
}
  ?>
</body>
</html>
