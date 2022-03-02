<!DOCTYPE html>
<html>
<head>
	<title>Add |Fasilitas Hotel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<div style="position: absolute;margin-top: -100px;margin-left: -200px;left: 50%;top: 50%;width: 400px;
height: 220px;" class="container">
		<h2 style="text-align: center;">Tambah Fasilitas Hotel</h2>
		<form action="aksi.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama Fasilitas</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="nama_fasilitas" required="required">
			</div>
			<div class="form-group">
				<label>Keterangan</label>
				<textarea  class="form-control" name="keterangan" rows="5" cols="20"  required="required"></textarea>
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