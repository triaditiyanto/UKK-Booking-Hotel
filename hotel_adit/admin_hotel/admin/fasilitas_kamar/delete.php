<?php
include_once("../../config.php");
 
$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM tb_fasilitas_kamar WHERE id=$id");

header("Location:index.php");
?>