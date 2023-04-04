<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('../koneksi.php'); 

  $status = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $id_trans_upn = $_POST['id_trans_upn'];
      $id_kondektur = $_POST['id_kondektur'];
      $id_bus = $_POST['id_bus'];
      $id_driver = $_POST['id_driver'];
      $jumlah_km = $_POST['jumlah_km'];
      $tanggal = $_POST['tanggal'];

      //query SQL
      $query = "INSERT INTO trans_upn (id_trans_upn, id_kondektur, id_bus, id_driver, jumlah_km, tanggal) VALUES('$id_trans_upn','$id_kondektur','$id_bus','$id_driver','$jumlah_km', '$tanggal')"; 

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
            <li><a href="<?php echo "../transupn.php"; ?>">Data Trans UPN</a></li>
            <li><a href="<?php echo "../transupn.php"; ?>">Tambah Data</a></li>
            <li><a href="<?php echo "../transupn.php"; ?>">Update Data</a></li>
            <li><a href="<?php echo "../transupn.php"; ?>">Hapus Data</a></li>
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
                    <h2>Tambah Data Trans UPN</h2>
                        <form action="form.php" method = "POST">
                    <div class="form-group">
                        <label>Id Trans Upn</label>
                        <input type="text" class="form-control" placeholder="Id Trans Upn" name="id_trans_upn" required="required">        
                    </div>
    
                    <div class="form-group">
                        <label>Id Kondektur</label>
                        <input type="text" class="form-control" placeholder="Id Kondektur" name="id_kondektur" required="required">
                    </div>

                    <div class="form-group">
                        <label>Id Bus</label>
                        <input type="text" class="form-control" placeholder="Id Bus" name="id_bus" required="required">
                    </div>

                    <div class="form-group">
                        <label>Id Driver</label>
                        <input type="text" class="form-control" placeholder="Id Driver" name="id_driver" required="required">
                    </div>

                    <div class="form-group">
                        <label>Jumlah Km</label>
                        <input type="text" class="form-control" placeholder="Jumlah Km" name="jumlah_km" required="required">
                    </div>

                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="text" class="form-control" placeholder="Tanggal" name="tanggal" required="required">
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
