<?php
include_once ("koneksi.php");
$id  = $_GET['id'] ;

$query="SELECT * FROM tbl_033 WHERE id=".$id;

$hasil=mysqli_query($koneksi,$query);

?>

<!DOCTYPE HTML>
<head>
	<title></title>
	<link href = "css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
</head>
<body>
	<?php while($data=mysqli_fetch_array($hasil)){ ?>
		<h1 align='center'>Update Data</h1><br>
	<div class='container col-8'>
	<form method="post" action="proseseditdata.php">
		<div class="form-floating mb-3">
			<input type="number" class="form-control" id="id" name="id" value="<?php echo $data['id'] ?>">
			<label for="floatingInput">ID</label>
		</div>
		<div class="form-floating mb-3">
			<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama'] ?>">
			<label for="floatingPassword">NAMA</label>
		</div>
		<div class="form-floating">
			<input type="number" class="form-control" id="nisn" name="nisn" value="<?php echo $data['nisn'] ?>">
			<label for="floatingPassword">NISN</label>
		</div>
		<div class="form-floating">
			<input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'] ?>">
			<label for="floatingPassword">JENIS KELAMIN</label>
		</div>
		<div class="form-floating">
			<input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" value="<?php echo $data['asal_sekolah'] ?>">
			<label for="floatingPassword">ASAL SEKOLAH</label>
		</div>
		<br>
		<input type="hidden" name="id" value="<?php echo $data['id']?>">
		<button type="submit" class="btn btn-secondary" name="submit">Submit</button>
		<a href="index.php"><button type="button" class="btn btn-danger">Cancel</button></a>
	</form>
	<?php } ?>
	</div>
</body>