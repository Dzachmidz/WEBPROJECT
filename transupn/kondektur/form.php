<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('../koneksi.php'); 

  $status = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $id_kondektur = $_POST['id_kondektur'];
      $nama = $_POST['nama'];
      //query SQL
      $query = "INSERT INTO kondektur (id_kondektur, nama) VALUES('$id_kondektur','$nama')"; 

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
            <li><a href="<?php echo "../kondektur.php"; ?>">Data kondektur</a></li>
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
                    <h2>Tambah Data kondektur</h2>
                        <form action="form.php" method="POST">
                    <div class="form-group">
                        <label>ID kondektur</label>
                        <input type="text" class="form-control" placeholder="id_kondektur" name="id_kondektur" required="required">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" placeholder="nama" name="nama" required="required">
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
