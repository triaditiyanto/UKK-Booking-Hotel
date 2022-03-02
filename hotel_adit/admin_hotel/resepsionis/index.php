<?php 
	session_start();
    include("../config.php");
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
?>
 
<html>
<head>    
    <title>Resepsion | Hotel</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        *{
            font-family: "Poppins", sans-serif
        }
    </style>
</head>
<body>
 <div class="w3-top">
  <div class="w3-bar w3-black w3-card" id="myNavbar">
    <a href="" class="w3-bar-item w3-button w3-wide">HAPPY HOTEL</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="../logout.php" class="w3-bar-item w3-button"><i class=""></i>LOGOUT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->
  </div>
</div>
<br>
<br>
<h4 style="float:left;margin-left: 10px;">Hallo |</h4><h6>Resepsionis</h6>
<br>
<table class="table table-bordered" border="1">
 
   <form  method="get">
			<label style="float:left;margin-left: 10px;">PILIH TANGGAL</label>
			<input style="float:left;margin-left: 10px;" type="date" name="tanggal">
			<input style="float:left;margin-left: 10px;" type="submit" value="FILTER">
		</form>
 
		<br/> <br/>
 
        <table class="table table-bordered" border="1">
    <tr>
				<th>Nama Pemesan</th>
      	<th>Nama Tamu</th>
				<th>Tanggal Check-In</th>
				<th>Tanggal Check-out</th>
				<th>Tipe Kamar</th>
			</tr>
			<?php 
			$no = 1;
 
			if(isset($_GET['tanggal'])){
				$tgl = $_GET['tanggal'];
				$sql = mysqli_query($mysqli,"select * from tb_resepsionis where tgl_check_in='$tgl'");
			}else{
				$sql = mysqli_query($mysqli,"select * from tb_resepsionis");
			}
			
			while($user_data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $user_data['nama_pemesan']; ?></td>
        <td><?php echo $user_data['nama_tamu']; ?></td>
				<td><?php echo $user_data['tgl_check_in']; ?></td>
				<td><?php echo $user_data['tgl_check_out']; ?></td>
				<td><?php echo $user_data['tipe_kamar']; ?></td>
				<!-- <td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>         -->

			</tr>
			<?php 
			}
			?>
   
    </table>
        <a href="add.php" class="btn btn-info btn-sm" style="float:right;margin-right:20px">Tambah Data</a>

    <br>
</body>
</html>