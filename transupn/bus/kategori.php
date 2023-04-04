<?php 
include('../koneksi.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>TABEL BUS</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        .merah {
            background-color: #ed6e6e;
        }
        .kuning {
            background-color: yellow;
        }
        .hijau {
            background-color: #98f898;
        }
        .atasan{
            display:flex;
            flex-direction: row;
            margin-bottom: 30px;
        }

        .kotak{
            margin-left: 400px;
            height:20px;
        }
        
        .form-group{
            margin-left: 20px;
        }
    </style>
  </head>

  <body>

    <div>
      <div>
        <nav>
          <ul>
          <li><a href="<?php echo "../bus.php"; ?>">Data Bus</a></li>
            <li><a href="<?php echo "../bus.php"; ?>">Tambah Data</a></li>
            <li><a href="<?php echo "../bus.php"; ?>">Update Data</a></li>
            <li><a href="<?php echo "../bus/.php"; ?>">Hapus Data</a></li>
            <li><a href="<?php echo "form.php"; ?>">Tambah Data</a></li>
          </ul>
        </nav>

        <main role="main">
          <?php 
            //mengecek apakah proses update dan delete sukses/gagal
            if (@$_GET['status']!==NULL) {
              $status = $_GET['status'];
              if ($status=='ok') {
                echo '<br><br><div class="alert alert-success" role="alert">Data Bus berhasil di-update</div>';
              }
              elseif($status=='err'){
                echo '<br><br><div class="alert alert-danger" role="alert">Data Bus gagal di-update</div>';
              }

            }
           ?>

          <h2 align="center">Kategori Bus</h2>
          <div>
            <table border="1" align="center">
              <thead>
                <tr>
                  <th>ID Bus</th>
                  <th>Plat</th>
                  <th>Status</th>
                  <th>Jumlah KM</th>
                  <th>Akses</th>
                </tr>
              </thead>
              <tbody>
              
              <?php 
              //proses untuk filter data berdasarkan status bus
              $status = "";
              if(isset($_GET['status'])) {
                $status = $_GET['status'];
                if($status == "semua") {
                  $query = "SELECT bus.id_bus, bus.plat, bus.status, SUM(trans_upn.jumlah_km) as jumlah_km FROM bus LEFT JOIN trans_upn ON bus.id_bus = trans_upn.id_bus GROUP BY bus.id_bus ORDER BY status ASC";
                } else {
                  $query = "SELECT bus.id_bus, bus.plat, bus.status, SUM(trans_upn.jumlah_km) as jumlah_km FROM bus LEFT JOIN trans_upn ON bus.id_bus = trans_upn.id_bus WHERE status = '$status' GROUP BY bus.id_bus";
                }
              } else {
                $query = "SELECT bus.id_bus, bus.plat, bus.status, SUM(trans_upn.jumlah_km) as jumlah_km FROM bus LEFT JOIN trans_upn ON bus.id_bus = trans_upn.id_bus GROUP BY bus.id_bus";
              }
              $result = mysqli_query(connection(),$query);
            ?>


              <!-- Menambahkan dropdown untuk memfilter data berdasarkan status bus -->
              <div class="atasan">
                <form method="get">
                    <div class="form-group">
                        <label for="status">Filter status bus:</label>
                        <select class="form-control" id="status" name="status" onchange="this.form.submit()">
                            <option value="semua" <?php if ($status == 'semua')
                                echo 'selected="selected"'; ?>>Semua
                            </option>
                            <option value="0" <?php if ($status == '0')
                                echo 'selected="selected"'; ?>>0</option>
                            <option value="1" <?php if ($status == '1')
                                echo 'selected="selected"'; ?>>1</option>
                            <option value="2" <?php if ($status == '2')
                                echo 'selected="selected"'; ?>>2</option>
                        </select>
                    </div>
                </form>
                <div class="kotak">
                    <div style="background-color: red; width: 20px; height: 20px; display: inline-block;"></div>
                    <span style="display: inline-block; margin-right: 10px;">bus dalam perbaikan/rusak</span>
                    <div style="background-color: yellow; width: 20px; height: 20px; display: inline-block;"></div>
                    <span style="display: inline-block; margin-right: 10px;">bus cadangan</span>
                    <div style="background-color: green; width: 20px; height: 20px; display: inline-block;"></div>
                    <span style="display: inline-block; margin-right: 10px;">bus beroperasi / aktif</span>
                </div>
            </div>

              <?php while($data = mysqli_fetch_array($result)): ?>
                <tr class="<?php echo $data['status'] == 1 ? 'hijau' : ($data['status'] == 2 ? 'kuning' : 'merah') ?>">
                  <td><?php echo $data['id_bus'];  ?></td>
                  <td><?php echo $data['plat'];  ?></td>
                  <td><?php echo $data['status'];  ?></td>
                  <td><?php echo $data['jumlah_km'];  ?></td>
                  <td>
                    <a href="<?php echo "update.php?id_bus=".$data['id_bus']; ?>" class="btn btn-outline-warning btn-sm"> Update</a>
                    &nbsp;&nbsp;
                    <a href="<?php echo "delete.php?id_bus=".$data['id_bus']; ?>" class="btn btn-outline-danger btn-sm"> Delete</a>
                  </td>
                </tr>
              <?php endwhile ?>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>
  </body>
</html>
