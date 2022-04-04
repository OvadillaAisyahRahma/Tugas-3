<?php
$server = "localhost";
$user = "root";
$pass = "" ;
$db = "dilla" ;
$koneksi = mysqli_connect($server,$user,$pass,$db);
// if (!$koneksi) {
// 	echo "Tidak Terkoneksi";
// 	}else{
// 		echo"Terkoneksi";
// 	}

$query = "SELECT * FROM tbl_033 ";
$hasil = mysqli_query($koneksi,$query);
?>


<!DOCTYPE HTML>
<head>
	<title></title>
	<link href = "css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
<body style='background-color : #ACE7FF;'>
	<H1 align="center">TABEL PENERIMAAN SISWA BARU</H1>
	<table align="center" class="table table-hover table-primary table-striped"  style="width: 800px; margin-top: 50px">
		<tr>
			<td>ID</td>
			<td>NAMA</td>
			<td>NISN</td>
			<td>JENIS KELAMIN</td>
			<td>ASAL SEKOLAH</td>
			<td class='text-center' colspan='2'>EDIT</td>
		</tr>
		<?php
		   while($baris=mysqli_fetch_assoc($hasil)) {
		   	?>
		   	<tr class='table-light'>
		   		<td><?php echo $baris['id']?></td>
		   		<td><?php echo $baris['nama']?></td>
		   		<td><?php echo $baris['nisn']?></td>
				<td><?php echo $baris['jenis_kelamin']?></td>
		   		<td><?php echo $baris['asal_sekolah']?></td>
		   		<td><a class="btn btn-success" href="updatet3.php?id=<?php echo $baris["id"] ?>" role="button">Update</a></td>
		   		<td><a class="btn btn-danger" href="delete.php?id=<?php echo $baris["id"] ?>" 
				  onclick="return confirm('Apakah anda yakin akan menghapusdata ini?')" role="button">Delete</a></td>
		   	</tr>
		<?php }?>
</table>
		<a class="btn btn-dark" href="insert.php" role="button" style="margin-left:940px">Input data</a>