<?php
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('../koneksi.php');

  $status = '';
  $result = '';
  //melakukan pengecekan apakah ada variable GET yang dikirim
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['id_kondektur'])) {
          //query SQL
          $id_kondektur_upd = $_GET['id_kondektur'];
          $query = "SELECT * FROM kondektur WHERE id_kondektur = '$id_kondektur_upd'";

          //eksekusi query
          $result = mysqli_query(connection(),$query);
      }
  }

  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_kondektur = $_POST['id_kondektur'];
    $nama = $_POST['nama'];
      //query SQL
      $sql = "UPDATE kondektur SET nama='$nama' WHERE id_kondektur='$id_kondektur'";

      //eksekusi query
      $result = mysqli_query(connection(),$sql);
      if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }

      //redirect ke halaman lain
      header('Location: ../kondektur.php?status='.$status);
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
            <li><a href="<?php echo "../kondektur.php"; ?>">Data Kondektur</a></li>
            <li><a href="<?php echo "../kondektur.php"; ?>">Tambah Data</a></li>
            <li><a href="<?php echo "../kondektur.php"; ?>">Update Data</a></li>
            <li><a href="<?php echo "../kondektur.php"; ?>">Hapus Data</a></li>
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
                    <h2>Update Data Kondektur</h2>
                        <form action="../kondektur/update.php" method="POST">
                        <?php while($data = mysqli_fetch_array($result)): ?>
                      <div class="form-group">
                          <label>ID Kondektur</label>
                          <input type="text" class="form-control" placeholder="id_kondektur" name="id_kondektur" value="<?php echo $data['id_kondektur'];  ?>" required="required" readonly>
                      </div>
                      <div class="form-group">
                          <label>nama</label>
                          <input type="text" class="form-control" placeholder="nama" name="nama" value="<?php echo $data['nama'];  ?>" required="required">
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
