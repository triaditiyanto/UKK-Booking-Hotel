<?php

    include("config.php");

?>

<html>  
<head>
<title>RESERVATION HAPPY HOTEL</title>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
</style>
      <link rel="icon" type="image/x-icon" href="img/black.ico">

</head>
<body style='font-family:tahoma; font-size:8pt;' onload="javascript:window.print()">
<table style='width:550px; font-size:8pt; font-family:calibri; border-collapse: collapse;' border = '0'>
<td width='70%' align='left' style='padding-right:80px; vertical-align:top'>
<span style='font-size:12pt'><b>HAPPY HOTEL</b></span></br>
jl.Tripraja, Kampung sawah dalam</br>
Telp : 089525538379
</td>
<td style='vertical-align:top' width='30%' align='left'>
<b><span style='font-size:12pt'>BUKTI RESERVASI</span></b></br>
</td>
</table>
<table style='width:550px; font-size:8pt; font-family:calibri; border-collapse: collapse;' border = '0'>
<td width='70%' align='left' style='padding-right:80px; vertical-align:top'>
<br>
<table style="float:left; font-family:tahoma; font-size:8pt;" class="">
<?php
    $query = mysqli_query($mysqli,  "SELECT * FROM tb_resepsionis ORDER BY id DESC LIMIT 1");
	while($data =mysqli_fetch_array($query)){
?>
  <tr>
      <th>Nama Pemesan <td>:    <?=$data['nama_pemesan']?></td></th>
       </tr>
       <tr>
	<th>Nama Tamu <td>: <?=$data['nama_tamu']?></td></th>
</tr>
<tr>
	<th>Tanggal Check-In <td>:  <?=$data['tgl_check_in']?></td></th>
</tr>
<tr>
		<th>Tanggal Check-out <td>: <?=$data['tgl_check_out']?></td></th>
    </tr>
        <tr>
		<th>Tipe Kamar <td>: <?=$data['tipe_kamar']?></td></th>
    </tr>

<?php
        }
        ?>
</table>
</body>
</html>