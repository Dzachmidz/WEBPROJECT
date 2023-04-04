<?php
include ('../koneksi.php');

$status = '';
$result = '';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id_trans_upn'])) {
        //query untuk mengupdate data
        $id_trans_upn_upd = $_GET['id_trans_upn'];
        $query = "SELECT * FROM trans_upn WHERE id_trans_upn = '$id_trans_upn_upd'";

        //eksekusi query
        $result = mysqli_query(connection(),$query);
      }
  }

  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_trans_upn = $_POST['id_trans_upn'];
    $id_kondektur = $_POST['id_kondektur'];
    $id_bus = $_POST['id_bus'];
    $id_driver = $_POST['id_driver'];
    $jumlah_km = $_POST['jumlah_km'];
    $tanggal = $_POST['tanggal'];
    
    //query SQL
    $sql = "UPDATE trans_upn SET id_trans_upn='$id_trans_upn', id_kondektur ='$id_kondektur', id_bus='$id_bus', id_driver='$id_driver', 
    jumlah_km='$jumlah_km', tanggal='$tanggal'
    WHERE id_trans_upn='$id_trans_upn'";

    //eksekusi query
    $result = mysqli_query(connection(),$sql);
    if ($result) {
        $status = 'ok';
    }
    else {
        $status = 'err';
    }

    //redirect ke halaman lain
    header('Location: ../transupn.php?status='.$status);
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
            <li><a href="<?php echo "../transupn.php"; ?>">Data Trans UPN</a></li>
            <li><a href="<?php echo "../transupn/form.php"; ?>">Tambah Data</a></li>
            <li><a href="<?php echo "../transupn/update.php"; ?>">Update Data</a></li>
            <li><a href="<?php echo "../transupn/delete.php"; ?>">Hapus Data</a></li>
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
                    <h2>Update Data Trans UPN</h2>
                    <form action="update.php" method="POST">
                <?php while($data = mysqli_fetch_array($result)) : ?>
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
