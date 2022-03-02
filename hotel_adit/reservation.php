<?php

    include("config.php");

?>




<html>
<head>    
    <title>Homepage</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="icon" type="image/x-icon" href="img/black.ico">


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
      <a href="index.php" class="w3-bar-item w3-button">ABOUT</a>
      <a href="index.php" class="w3-bar-item w3-button"><i class=""></i>FASILITAS HOTEL</a>
      <a href="room1.php" class="w3-bar-item w3-button"><i class=""></i>TIPE KAMAR</a>
      <a href="reservation.php" class="w3-bar-item w3-button"><i class=""></i>RESERVASI</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button">FASILITAS HOTEL</a>
  <a href="room1.php" onclick="w3_close()" class="w3-bar-item w3-button">TIPE KAMAR</a>
  <a href="reservation.php" onclick="w3_close()" class="w3-bar-item w3-button">RESERVASI</a>
</nav>
     <div class="w3-container" style="text-align: center" id="about">
            <div class="w3-content" style="max-width:700px">
                <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">RESERVATION HAPPY HOTEL</span></h5>

                <div style="position: absolute;margin-top: -95px;margin-left: -150px;left: 50%;top: 48%;width: 300px;
          height: 220px;">
          <br>
                 <form action="reservation.php" method="post" name="form1">
                           <div class="form-group">
                             <label for="exampleInputPassword1">Nama Pemesan</label>
    <input type="text" name="nama_pemesan" class="form-control">
                          <br>
                             <label for="exampleInputPassword1">Email</label>
    <input type="text" name="email" class="form-control">
                            <br>
                             <label for="exampleInputPassword1">Nomor Handphone</label>
    <input type="text" name="nomor_handphone" class="form-control">
                              <br>
                             <label for="exampleInputPassword1">Nama Tamu</label>
    <input type="text" name="nama_tamu" class="form-control">
                              <br>
                             <label for="cars">Tipe Kamar</label>
  <select name="tipe_kamar">
    <option value="standart room">Standart Room</option>
    <option value="superior room">Superior Room</option>
    <option value="presidential room">Presidential Suite</option>
  </select><br><br>
                            <label for="exampleInputEmail1">Tanggal Check-in</label>
    <input type="date" name="tgl_check_in" class="form-control" >
                              <br>
                            <label for="exampleInputPassword1">Tanggal Check-out</label>
    <input type="date" name="tgl_check_out" class="form-control">
                              <br>
                            <label for="exampleInputPassword1">Jumlah Kamar</label>
    <input type="text" name="jumlah_kamar" class="form-control">
                                  </div><br>
                          <button type="submit" style="margin-bottom:35px" name="Submit" value="Add" class="btn btn-primary">Pesan Kamar</button>
                     <a style="text-decoration:none" href='cetak_laporan.php'><button style="margin-bottom:50px;" class="btn btn-primary">Download Reservasi</a></button>
                            </form>
    </form>
    </div>
    
    <?php
 
    if(isset($_POST['Submit'])) {
        $nama_pemesan = $_POST['nama_pemesan'];
        $email = $_POST['email'];
        $nomor_handphone = $_POST['nomor_handphone'];
        $nama_tamu = $_POST['nama_tamu'];
        $tipe_kamar = $_POST['tipe_kamar'];
        $tgl_check_in = $_POST['tgl_check_in'];
        $tgl_check_out = $_POST['tgl_check_out'];
        $jumlah_kamar = $_POST['jumlah_kamar'];

        include_once("config.php");
                
        $result = mysqli_query($mysqli, "INSERT INTO tb_resepsionis(nama_pemesan,email,nomor_handphone,nama_tamu,tipe_kamar,tgl_check_in,tgl_check_out,jumlah_kamar) VALUES('$nama_pemesan','$email','$nomor_handphone','$nama_tamu','$tipe_kamar','$tgl_check_in','$tgl_check_out','$jumlah_kamar')");
        
    }
    ?>
    <script type="text/javascript">

function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}


</script>