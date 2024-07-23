<?php
include 'ponyokoneksi.php';
$no = $_POST['no'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];


mysqli_query($koneksiponyo, " INSERT into siswa VALUES ('$no','$nama','$jurusan')");
header ("location:home.php");
?>
