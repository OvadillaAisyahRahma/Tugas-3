<?php
include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$nisn = $_POST['nisn'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$asal_sekolah = $_POST['asal_sekolah'];

$query = "INSERT INTO tbl_033 (id,nama,nisn,jenis_kelamin,asal_sekolah) VALUE ('$id','$nama','$nisn','$jenis_kelamin','$asal_sekolah')" ;//nama,umur,hobi sesuai pada database

$hasil = mysqli_query($koneksi,$query);

if($hasil){
    header ('Location:index.php');
}else{
    echo "gagal";
}
?>