<?php
include_once("../../config.php");
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $tipe_kamar = $_POST['tipe_kamar'];
  $nama_fasilitas = $_POST['nama_fasilitas'];
   
    $result = mysqli_query($mysqli, "UPDATE tb_fasilitas_kamar SET tipe_kamar='$tipe_kamar',nama_fasilitas='$nama_fasilitas' WHERE id=$id");
    header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM tb_fasilitas_kamar WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $tipe_kamar = $user_data['tipe_kamar'];
    $nama_fasilitas = $user_data['nama_fasilitas'];
}
?>
<html>
<head>    
    <title>Edit | Fasilitas Kamar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
 
<body>
    <br/><br/>
    <div class="form-group" style="position: absolute;margin-top: -100px;margin-left: -200px;left: 50%;top: 50%;width: 400px;
height: 220px;">
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
          <div class="form-group">
    <label for="exampleInputEmail1">Tipe Kamar</label>
    <input type="text" name="tipe_kamar" class="form-control" value=<?php echo $tipe_kamar;?>>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nama Fasilitas</label>
    <input type="text" name="nama_fasilitas" class="form-control" value=<?php echo $nama_fasilitas;?>>
  </div>
  <br>
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