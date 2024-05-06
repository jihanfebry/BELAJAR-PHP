<?php
  $nama = $_POST['nama'];

  $alamat = $_POST['alamat'];

  $tanggal = $_POST['tanggal'];

  $sekolah = $_POST['sekolah'];

  $kelas = $_POST['kelas'];
   
  echo "Nama saya adalah " . $nama;
  echo "<br/>";
  echo "Alamat saya di " . $alamat;
  echo "<br/>";
  echo "Tanggal lahir saya " . $tanggal;
  echo "<br/>";
  echo "Saya bersekolah di " . $sekolah;
  echo "<br/>";
  echo "Saya dari kelas " . $kelas;
  ?>