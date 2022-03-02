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
        * {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
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
  <img src="img/8.jpg" style="width:100%; max-width:1500px; margin-top:0px; padding-top: 0px" class="">
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

    
        <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ROOM TYPE HAPPY HOTEL</span></h5>
<?php 
			$result = mysqli_query($mysqli,"select * from tb_fasilitas_kamar");
			while($user_data = mysqli_fetch_array($result)){
				?>
        <div class="w3-center w3-padding-55 w3-margin-55">
          <br><br>
        

         </div>
           <div class="w3-content" style="max-width:700px">
            <div class="slideshow-container">

<div class="mySlides w3-animate-left">
  <div class="numbertext">1 / 3</div>
  <img src="img/ice.jpg" style="width:100%">
  <div class="w3-tag w3-wide">Standart Room</div><br>
  <div class="w3-tag w3-wide">Rp.350,000</div>
</div>

<div class="mySlides w3-animate-left">
  <div class="numbertext">2 / 3</div>
  <img src="img/tropical.jpg" style="width:100%">
  <div class="w3-tag w3-wide">Superior Room </div><br>
      <div class="w3-tag w3-wide">Rp.459,000</div>
</div>

<div class="mySlides w3-animate-left">
  <div class="numbertext">3 / 3</div>
  <img src="img/beach hotel.jpg" style="width:100%">
  <div class="w3-tag w3-wide">Presidential Suite</div> <br>
    <div class="w3-tag w3-wide">Rp.500,000</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<div  style="text-align:center">
         <h3 style="text-align:center">Tipe Kamar : </h3>
          <?php echo "<span>".$user_data['tipe_kamar']."</span>"; ?><br>
          <h3>Nama Fasilitas : </h3>
          <?php echo $user_data['nama_fasilitas']; ?>
          </div>
        	<?php
			}

			?>
      </div>
      <br>
      <br>
 <footer class="w3-center w3-black w3-padding-48 w3-medium">
        <p>Punya_Adit</p>
    </footer>
 <script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
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
      
      
</html>
    