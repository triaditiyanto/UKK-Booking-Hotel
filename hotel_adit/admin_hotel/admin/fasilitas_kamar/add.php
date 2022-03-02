<html>
<head>
    <title>Add | Fasilitas Kamar</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
 
<body>
    <br/><br/>
    <div style="position: absolute;margin-top: -100px;margin-left: -200px;left: 50%;top: 50%;width: 400px;
height: 220px;">
    <form action="add.php" method="post" name="form1">
  <div class="form-group">
    <label for="exampleInputEmail1">Tipe Kamar</label>
    <input type="text" name="tipe_kamar" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nama Fasilitas</label>
    <input type="text" name="nama_fasilitas" class="form-control">
  </div>
  <br>
  <a href='index.php' onclick='return test_click();'><button type="submit" name="Submit" value="Add" class="btn btn-primary">Submit</button></a>
   <a href="./index.php"  class="btn btn-primary">Kembali</a> 
</form>
</div>
    <?php
     if(isset($_POST['Submit'])) {
        $tipe_kamar = $_POST['tipe_kamar'];
        $nama_fasilitas = $_POST['nama_fasilitas'];
        
        include_once("../../config.php");
        $result = mysqli_query($mysqli, "INSERT INTO tb_fasilitas_kamar(tipe_kamar,nama_fasilitas) VALUES('$tipe_kamar','$nama_fasilitas')");
        
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
     <script type="text/javascript">
    function test_click(event){
        alert("Yeay Berhasil !!");
        return true;
    }
</script>
</body>
</html>