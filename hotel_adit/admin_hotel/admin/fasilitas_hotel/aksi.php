<?php 
include "../../config.php";
$nama_fasilitas = $_POST['nama_fasilitas'];
$keterangan = $_POST['keterangan'];
 
$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['gambar']['name'];
$ukuran = $_FILES['gambar']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	header("location:index.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $filename;
		move_uploaded_file($_FILES['gambar']['tmp_name'], 'gambar/'.$filename);
		mysqli_query($mysqli , "INSERT INTO tb_fasilitas_hotel VALUES(NULL,'$nama_fasilitas','$keterangan','$xx')");
		header("location:index.php?alert=berhasil");
	}else{
		header("location:index.php?alert=gagak_ukuran");
	}
}