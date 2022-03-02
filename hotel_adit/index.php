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
      <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
      <a href="#hotel" class="w3-bar-item w3-button"><i class=""></i>FASILITAS HOTEL</a>
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
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#hotel" onclick="w3_close()" class="w3-bar-item w3-button">FASILITAS HOTEL</a>
  <a href="room1.php" onclick="w3_close()" class="w3-bar-item w3-button">TIPE KAMAR</a>
  <a href="reservation.php" onclick="w3_close()" class="w3-bar-item w3-button">RESERVASI</a>
</nav>

  <img src="img/8.jpg" style="width:100%; max-width:1500px; margin-top:0px; padding-top: 0px; margin: 0px; padding: 0px" class="">
  <header class="bgimg w3-display-container w3-grayscale-min" id="home">
        <div class="w3-display-bottomleft w3-center w3-padding-medium w3-hide-small">
            <span class="w3-tag">Reservation from 8am to 11pm</span>
        </div>
        <div class="w3-display-middle w3-center">
        </div>
        <div class="w3-display-bottomright w3-center w3-padding-medium">
            <span class="w3-text-white w3-tag w3-wide">jl.Tripraja, Kampung sawah dalam</span>
        </div>
    </header>

     <div class="w3-container" id="about">
            <div class="w3-content" style="max-width:700px">
                <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT HAPPY HOTEL</span></h5>
                <p>Our hotel stands on an area of ​​one hectare on the edge of the beach, 
                  we have managed our hotel since 1996 until now. We present a variety of interesting facilities for refreshing and recreation with your family.
                   we serve you with the comfort that we provide such as beach spa, infinity swimming pool, etc. Enjoy the facilities we provide :)
                </p>
                <p>   ENJOY EVERYONE !!!</p>
                <div class="w3-panel w3-leftbar w3-light-grey">
                  <br>
                    <p><i>"WE TRY THE BEST FOR YOU TO BE COMFORTABLE IN OUR HOTEL".</i></p>
                    <p>we are the Management : CEO,CFO ,Manager,Chief operation</p>
                </div>
                <img src="img/pools.jpg" style="width:100%;max-width:1000px;  border-radius: 25px;" class="w3-margin-top">
                <br> <br>
                <p><strong>Reservation from :</strong> everyday from 8am to 11pm.</p>
                <p><strong>Address : </strong>jl.Tripraja,Kampung sawah dalam</p>
            </div>
        </div>
<br>
   <h5 class="w3-center w3-padding-64" id="hotel"><span class="w3-tag w3-wide">HAPPY HOTEL FACILITY</span></h5>
<?php 
			$result = mysqli_query($mysqli,"select * from tb_fasilitas_hotel");
			while($user_data = mysqli_fetch_array($result)){
				?>
        <div class="w3-center w3-padding-55 w3-margin-55">
        	<img style="border-radius: 25px;" src="admin_hotel/admin/fasilitas_hotel/img/<?php echo $user_data['nama_gambar'] ?>" width="200" height="200">
          <br>
          <?php echo $user_data['nama_fasilitas']; ?><br>
          <?php echo $user_data['keterangan']; ?>
          <br>
          <br>
          </div>
        	<?php
			}

			?>
    <br> 
        <footer class="w3-center w3-black w3-padding-48 w3-medium">
        <p>Punya_Adit</p>
    </footer>
    <script>
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

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>