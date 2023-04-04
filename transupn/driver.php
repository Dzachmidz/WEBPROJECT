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
        <h1>Data Driver</h1>
            <ul>
                <li><a href="bus.php">Bus</a></li>
                <li><a href="#">Driver</a></li>
                <li><a href="kondektur.php">Kondektur</a></li>
                <li><a href="transupn.php">Trans UPN</a></li>
                <li><a href="driver/gaji.php">Pendapatan</a></li>
            </ul>
    </nav>
    <div class="modifikasidata">
        <ul>
            <li><a href="<?php echo "../transupn/driver/form.php"; ?>"><b>Modifikasi Data</b></a></li>
        </ul>
    </div>
        <div class="container">
        <table>
            <thead>
                <tr>
                    <th>ID Driver</th>
                    <th>Nama</th>
                    <th>No SIM</th>
                    <th>Alamat</th>
                    <th>Modifikasi Data</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM driver";
                $result = mysqli_query(connection(), $query);
                ?>
                    <?php 
                        while($data = mysqli_fetch_array($result)): 
                    ?>                    
                <tr>
                            <td>
                                <?php echo $data ['id_driver'];?>
                            </td>
                            <td>
                                <?php echo $data['nama']; ?>
                            </td>
                            <td>
                                <?php echo $data['no_sim']; ?>
                            </td>
                            <td>
                                <?php echo $data['alamat']; ?>
                            </td>
                            <td>
                            <li><a href="<?php echo "../transupn/driver/update.php?id_driver=".$data['id_driver']; ?>"> Update</a></li>
                           <li><a href="<?php echo "../transupn/driver/delete.php?id_driver=".$data['id_driver']; ?>"> Delete</a></li>
                        </td>
                     <?php endwhile ?>
                </tr>
            </tbody>
        </thead>
    </div>
</body>
</html>