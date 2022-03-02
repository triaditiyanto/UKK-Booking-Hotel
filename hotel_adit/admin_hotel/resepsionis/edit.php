<?php
include_once("../config.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    $nama_pemesan = $_POST['nama_pemesan'];
        $nama_tamu = $_POST['nama_tamu'];
        $tipe_kamar = $_POST['tipe_kamar'];
        $tgl_check_in = $_POST['tgl_check_in'];
        $tgl_check_out = $_POST['tgl_check_out'];
        
    $result = mysqli_query($mysqli, "UPDATE tb_resepsionis SET nama_pemesan='$nama_pemesan',nama_tamu='$nama_tamu',tipe_kamar='$tipe_kamar',tgl_check_in='$tgl_check_in' WHERE id=$id");
    
    header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];
 
$result = mysqli_query($mysqli, "SELECT * FROM tb_resepsionis WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))     
{
    $nama_pemesan = $user_data['nama_pemesan'];
    $nama_tamu = $user_data['nama_tamu'];
    $tipe_kamar = $user_data['tipe_kamar'];
    $tgl_check_in = $user_data['tgl_check_in'];
    $tgl_check_out = $user_data['tgl_check_out'];

}
?>
<html>
<head>    
    <title>Edit | reserv</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
 
<body>
    <br/><br/>
    <div class="form-group" style="position: absolute;margin-top: -100px;margin-left: -200px;left: 50%;top: 50%;width: 400px;
height: 220px;">
    <form name="update_user" method="post" action="edit.php">
         <div style="position: absolute;margin-top: -100px;margin-left: -200px;left: 50%;top: 48%;width: 400px;
          height: 220px;">
                 <form action="reservation.php" method="post" name="form1">
                           <div class="form-group">
                             <label for="exampleInputPassword1">Nama Pemesan</label>
    <input type="text" name="nama_pemesan" class="form-control" value=<?php echo $nama_pemesan;?>>
                              <br>
                             <label for="exampleInputPassword1">Nama Tamu</label>
    <input type="text" name="nama_tamu" class="form-control" value=<?php echo $nama_tamu;?>>
                              <br>
                             <label for="cars">Tipe Kamar</label>
  <select name="tipe_kamar" value=<?php echo $tipe_kamar;?>>
    <option value="standart room">Standart Room</option>
    <option value="superior room">Superior Room</option>
    <option value="presidential room">Presidential Room</option>
  </select><br><br>
                            <label for="exampleInputEmail1">Tanggal Check-in</label>
    <input type="date" name="tgl_check_in" class="form-control" value=<?php echo $tgl_check_in;?> >
                              <br>
                            <label for="exampleInputPassword1">Tanggal Check-out</label>
    <input type="date" name="tgl_check_out" class="form-control" value=<?php echo $tgl_check_out;?>>
                              <br>
                                  </div><br>

<a href='index.php' onclick='return test_click();'><button style="margin-right:10px;" type="submit" name="Update" value="Update" class="btn btn-primary">Simpan</button></a>

                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="hidden" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
     </div>
      <script type="text/javascript">
    function test_click(event){
        alert("Yeay Berhasil !!");
        return true;
    }
</script>
</body>
</html>