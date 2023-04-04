<?php
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('../koneksi.php');

  $status = '';
  $result = '';
  //melakukan pengecekan apakah ada variable GET yang dikirim
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['id_bus'])) {
          //query SQL
          $id_bus_upd = $_GET['id_bus'];
          $query = "SELECT * FROM bus WHERE id_bus = '$id_bus_upd'";

          //eksekusi query
          $result = mysqli_query(connection(),$query);
      }
  }

  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_bus = $_POST['id_bus'];
    $plat = $_POST['plat'];
    $status = $_POST['status'];
      //query SQL
      $sql = "UPDATE bus SET plat='$plat', status='$status' WHERE id_bus='$id_bus'";

      //eksekusi query
      $result = mysqli_query(connection(),$sql);
      if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }

      //redirect ke halaman lain
      header('Location: ../bus.php?status='.$status);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet"href="../style.css">
    <title>Update Data</title>
</head>
<body>
    <nav>
        <h1>Modifikasi Data</h1>
        <ul>
            <li><a href="<?php echo "../bus.php"; ?>">Data Bus</a></li>
            <li><a href="<?php echo "../bus/form.php"; ?>">Tambah Data</a></li>
            <li><a href="<?php echo "../bus/update.php"; ?>">Update Data</a></li>
            <li><a href="<?php echo "../bus/delete.php"; ?>">Hapus Data</a></li>
        </ul>
    </nav>
        <tr >
            <td colspan="3">
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <?php 
                if ($status=='ok') {
                echo '<br><br><div class="alert alert-success" role="alert">Data Customer berhasil diupdate</div>';
                }
                elseif($status=='err'){
                echo '<br><br><div class="alert alert-danger" role="alert">Data Customer gagal diupdate</div>';
                }
                 ?>
            </td>
        </tr>
        <table>
            <tr>
                <th>
                    <h2>Update Data Bus</h2>
                        <form action="../bus/update.php" method="POST">
                        <?php while($data = mysqli_fetch_array($result)): ?>
                      <div class="form-group">
                          <label>ID Bus</label>
                          <input type="text" class="form-control" placeholder="id_bus" name="id_bus" value="<?php echo $data['id_bus'];  ?>" required="required" readonly>
                      </div>
                      <div class="form-group">
                          <label>Plat</label>
                          <input type="text" class="form-control" placeholder="plat" name="plat" value="<?php echo $data['plat'];  ?>" required="required">
                      </div>
                      <div class="form-group">
                          <label>Status</label>
                          <input type="text" class="form-control" placeholder="status" name="status" value="<?php echo $data['status'];  ?>" required="required" >
                      </div>
                          <button type="submit" class="btn btn-primary">Update</button>
                        <?php endwhile; ?>
                    </form>
                    </main>
                </th>
            </tr>
        </table>
    </div>
</body>
</html>
