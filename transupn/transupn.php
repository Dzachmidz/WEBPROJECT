<?php
include('../transupn/koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>UTS</title>
</head>
<body>
    <nav>
        <h1>Data Trans UPN</h1>
            <ul>
                <li><a href="bus.php">Bus</a></li>
                <li><a href="driver.php">Driver</a></li>
                <li><a href="kondektur.php">Kondektur</a></li>
                <li><a href="#">Trans UPN</a></li>
            </ul>
    </nav>
    <div class="modifikasidata">
        <ul>
            <li><a href="<?php echo "trans_upn/form.php"; ?>"><b>Modifikasi Data</b></a></li>
        </ul>
    </div>
        <div class="container">
        <table>
            <thead>
                <tr>
                    <th>ID Trans UPN</th>
                    <th>ID Kondektor</th>
                    <th>ID Bus</th>
                    <th>ID Driver</th>
                    <th>Jumlah KM</th>
                    <th>Tanggal</th>
                    <th>Modifikasi Data</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM trans_upn";
                $result = mysqli_query(connection(), $query);
                ?>
                            <?php 
                                    while($data = mysqli_fetch_array($result)): 
                                ?>
                      
                        <tr>
                            <td>
                                <?php echo $data ['id_trans_upn'];?>
                            </td>
                            <td>
                                <?php echo $data['id_kondektur']; ?>
                            </td>
                            <td>
                                <?php echo $data['id_bus']; ?>
                            </td>
                            <td>
                                <?php echo $data ['id_driver'];?>
                            </td>
                            <td>
                                <?php echo $data['jumlah_km']; ?>
                            </td>
                            <td>
                                <?php echo $data['tanggal']; ?>
                            </td>
                            <td>
                            <li><a href="<?php echo "trans_upn/update.php?id_trans_upn=".$data['id_trans_upn']; ?>"> Update</a></li>
                           <li><a href="<?php echo "trans_upn/delete.php?id_trans_upn=".$data['id_trans_upn']; ?>"> Delete</a></li>
                            </td>
                     <?php endwhile ?>
                </tr>
                
            </tbody>
        </thead>
    </div>
</body>
</html>