<?php
 include "koneksi.php" ;
$id = $_GET['id'];
$query = "DELETE from tbl_033 WHERE id=$id";
$hasil = mysqli_query($koneksi,$query) ;
 if($hasil){
     header('Location:index.php');
 } else {
     echo "Hapus data gagal" ;
 }
 ?>