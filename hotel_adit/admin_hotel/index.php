<!DOCTYPE html>
<html>
<head>
	<title>Login | Administrator</title>
    <style>
        body{
	font-family: "Poppins", sans-serif;
	background: black;
}
 
h1{
	text-align: center;
	font-weight: 300;
}
 
.tulisan_login{
	text-align: center;
	text-transform: uppercase;
}
 
.kotak_login{
	width: 350px;
	background: white;
	margin: 80px auto;
	padding: 30px 20px;
	box-shadow: 0px 0px 100px 4px #d6d6d6;
	border-radius: 25px;

}
 
label{
	font-size: 11pt;
}
 
.form_login{
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}
 
.tombol_login{
	background: black;
	color: white;
	font-size: 10pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}
 
.link{
	color: #232323;
	text-decoration: none;
	font-size: 10pt;
}
 
.alert{
	background: #e44e4e;
	color: white;
	padding: 10px;
	text-align: center;
	border:1px solid #b32929;
	margin:0px;
}
    </style>
</head>
<body>
 
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
		<title>Login | Administrator</title>
	</head>
	<body>
		
	</body>
	</html>
 
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Administrator Login</p> 
		<p style="font-size: 15px" class="tulisan_login">Happy-Hotel</p> 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input style=" border-radius: 5px;" type="text" name="username" class="form_login" placeholder="" required="required">
 
			<label>Password</label>
			<input  style="	border-radius: 5px;" type="password" name="password" class="form_login" placeholder="" required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
		</form>
		
	</div>
 
 
</body>
</html>