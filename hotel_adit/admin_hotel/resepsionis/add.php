<?php

    include("../config.php");

?>




<html>
<head>    
    <title>Add | Reserving</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <style>
        *{
            font-family: "Poppins", sans-serif
        }
    </style>
</head>
<body>
     <div class="w3-container" id="about">
            <div class="w3-content" style="max-width:700px">
                <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">RESERVATION HAPPY HOTEL</span></h5>

                <div style="position: absolute;margin-top: -100px;margin-left: -200px;left: 50%;top: 48%;width: 400px;
          height: 220px;">
                 <form action="add.php" method="post" name="form1">
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
    <option value="presidential room">Presidential Room</option>
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
                            <a href='index.php' onclick='return test_click();'><button type="submit" name="Submit" value="Add" class="btn btn-primary">Submit</button></a>
                        <a href="./index.php"  class="btn btn-primary">Kembali</a> 
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
        include_once("../config.php");
                
        $result = mysqli_query($mysqli, "INSERT INTO tb_resepsionis(nama_pemesan,email,nomor_handphone,nama_tamu,tipe_kamar,tgl_check_in,tgl_check_out,jumlah_kamar) VALUES('$nama_pemesan','$email','$nomor_handphone','$nama_tamu','$tipe_kamar','$tgl_check_in','$tgl_check_out','$jumlah_kamar')");
        
    }
    ?>
    <script type="text/javascript">
    function test_click(event){
        alert("Berhasil !! silahkan tekan kembali");
        return true;
    }
</script>