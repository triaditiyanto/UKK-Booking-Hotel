<?php
    include "../../config.php";
    
?>
<html>
<head>    
    <title>Admin | Fasilitas Kamar</title>
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
            <a href="../" class="w3-bar-item w3-button"><i class=""></i>KAMAR</a>
                  <a href="./" class="w3-bar-item w3-button"><i class=""></i>FASILITAS KAMAR</a>
            <a href="../fasilitas_hotel" class="w3-bar-item w3-button"><i class=""></i>FASILITAS HOTEL</a>     
      <a href="../../logout.php" class="w3-bar-item w3-button"><i class=""></i>LOGOUT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->
  </div>
<br>
<h4 style="float:left;margin-left: 10px;">Perubahan |</h4><h6>Fasilitas Kamar</h6>

<br> 
    <table class="table table-bordered">
 
    <tr>
         <th>Tipe Kamar</th> 
         <th>Nama fasilitas</th>
          <th>Aksi</th>
    </tr>
    <?php 
    $result = mysqli_query($mysqli,"SELECT * FROM tb_fasilitas_kamar");  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['tipe_kamar']."</td>";
        echo "<td>".$user_data['nama_fasilitas']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
    <br>
            <a href="add.php" class="btn btn-info btn-sm" style="float:right;margin-right:20px">Tambah Data</a>
            

</body>
</html>