<?php
include_once("koneksi.php");
$id = $_POST['id'];
$nama = $_POST['nama'];
$nisn = $_POST['nisn'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$asal_sekolah = $_POST['asal_sekolah'];

$query = "UPDATE tbl_033 SET id='$id', nama='$nama', nisn='$nisn', jenis_kelamin='$jenis_kelamin', asal_sekolah='$asal_sekolah' WHERE id='$id'";

$hasil = mysqli_query($koneksi,$query);

if($hasil){
    header('location:index.php');
}else{
    echo "GAGAL";
}
?>