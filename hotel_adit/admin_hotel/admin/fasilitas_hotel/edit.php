<?php 
include "../../config.php";
$nama_fasilitas = $_POST['nama_fasilitas'];
$keterangan = $_POST['keterangan'];
 
$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['gambar']['name'];
$ukuran = $_FILES['gambar']['size'];
//$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
//if(!in_array($ext,$ekstensi) ) {
	//header("location:index.php?alert=gagal_ekstensi");
//}else{
	if($ukuran < 1044070){		
		$xx = $filename;
		move_uploaded_file($_FILES['gambar']['tmp_name'], 'gambar/'.$filename);
		mysqli_query($mysqli , "UPDATE INTO tb_fasilitas_hotel VALUES(NULL,'$nama_fasilitas','$keterangan','$xx')");
		header("location:index.php?alert=berhasil");
	}//else{
		//header("location:index.php?alert=gagak_ukuran");
	//}

?>
<!DOCTYPE html>
<html>
<head>
	<title>beta test error</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2 style="text-align: center;">Tambah Data Pegawai</h2>
		<form action="edit.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama Fasilitas</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="nama_fasilitas" required="required">
			</div>
			<div class="form-group">
				<label>Keterangan</label>
				<input type="text" class="form-control" placeholder="Masukkan Kontak" name="keterangan" required="required">
			</div>
			<div class="form-group">
				<label>Foto :</label>
				<input type="file" name="gambar" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
			</div>			
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</form>
	</div>

</body>
</html>