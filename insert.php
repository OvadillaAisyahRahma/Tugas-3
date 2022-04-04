<?php
include "koneksi.php";
?>


<!DOCTYPE HTML>
<head>
	<title></title>
	<link href = "css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
</head>
<body>
	<H1 align=center>Masukkan datamu disini</h1>
	<div class='container col-8'>
	<form method="post" action="prosestambahdata.php">
		<div class="form-floating mb-4">
			<input type="number" class="form-control" id="id" name="id" placeholder="masukkan id">
			<label for="floatingPassword">ID</label>
		</div>
		<div class="form-floating mb-4">
			<input type="text" class="form-control" id="nama" name="nama" placeholder="masukkan nama">
			<label for="floatingPassword">NAMA</label>
		</div>
		<div class="form-floating mb-4">
			<input type="number" class="form-control" id="nisn" name="nisn" placeholder="masukkan nisn">
			<label for="floatingPassword">NISN</label>
		</div>
		<div class="form-floating mb-4">
			<input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="pilih jenis kelamin">
			<label for="floatingPassword">JENIS KELAMIN</label>
		</div>
		<div class="form-floating mb-4">
			<input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" placeholder="masukkan asal sekolah">
			<label for="floatingPassword">ASAL SEKOLAH</label>
		</div>
        <br>
		<button type="submit" class="btn btn-secondary" name="submit">Submit</button>
		<a href="index.php"><button type="button" class="btn btn-danger">Cancel</button></a>
	</form>
	</div>
</body>