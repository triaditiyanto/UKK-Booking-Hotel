<html>
<head>
    <title>Add | Kamar</title>
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
    <input type="text" name="tipe_kamar" class="form-control" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Jumlah Kamar</label>
    <input type="text" name="jumlah_kamar" class="form-control">
  </div>
  <br>
  <a href='index.php' onclick='return test_click();'><button type="submit" name="Submit" value="Add" class="btn btn-primary">Submit</button></a>
   <a href="./index.php"  class="btn btn-primary">Kembali</a> 
</form>
    </form>
    </div>
    
    <?php
 
    if(isset($_POST['Submit'])) {
        $tipe_kamar = $_POST['tipe_kamar'];
        $jumlah_kamar = $_POST['jumlah_kamar'];
        

        include_once("../config.php");
        $result = mysqli_query($mysqli, "INSERT INTO tb_kamar(tipe_kamar,jumlah_kamar) VALUES('$tipe_kamar','$jumlah_kamar')");
        
    }
    ?>
    <script type="text/javascript">
    function test_click(event){
        alert("Berhasil !! silahkan tekan kembali");
        return true;
    }
</script>
</body>
</html>