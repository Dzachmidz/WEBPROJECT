<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('../koneksi.php'); 

  $status = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $id_bus = $_POST['id_bus'];
      $plat = $_POST['plat'];
      $status = $_POST['status'];
      //query SQL
      $query = "INSERT INTO bus (id_bus, plat, status) VALUES('$id_bus','$plat','$status')"; 

      //eksekusi query
      $result = mysqli_query(connection(),$query);
      if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>  
    <link rel="stylesheet"href="../style.css">
    <title>Tambah Data</title>
</head>
<body>
    <nav>
        <h1>Modifikasi Data</h1>
        <ul>
            <li><a href="<?php echo "../bus.php"; ?>">Data Bus</a></li>
            <li><a href="<?php echo "../bus.php"; ?>">Tambah Data</a></li>
            <li><a href="<?php echo "../bus.php"; ?>">Update Data</a></li>
            <li><a href="<?php echo "../bus/.php"; ?>">Hapus Data</a></li>
        </ul>
    </nav>
        <tr >
            <td colspan="3">
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <?php 
                if ($status=='ok') {
                echo '<br><br><div class="alert alert-success" role="alert">Data Customer berhasil disimpan</div>';
                }
                elseif($status=='err'){
                echo '<br><br><div class="alert alert-danger" role="alert">Data Customer gagal disimpan</div>';
                }
                 ?>
            </td>
        </tr>
        <table>
            <tr>
                <th>
                    <h2>Tambah Data Bus</h2>
                        <form action="form.php" method="POST">
                    <div class="form-group">
                        <label>ID Bus</label>
                        <input type="text" class="form-control" placeholder="id_bus" name="id_bus" required="required">
                    </div>
                    <div class="form-group">
                        <label>Plat</label>
                        <input type="text" class="form-control" placeholder="plat" name="plat" required="required">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <input type="text" class="form-control" placeholder="status" name="status" required="required">
                    </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                    </main>
                </th>
            </tr>
        </table>
    </div>
</body>
</html>
