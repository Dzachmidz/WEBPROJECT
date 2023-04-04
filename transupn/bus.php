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
        <h1>Data Bus</h1>
            <ul>
                <li><a href="#">Bus</a></li>
                <li><a href="driver.php">Driver</a></li>
                <li><a href="kondektur.php">Kondektur</a></li>
                <li><a href="transupn.php">Trans UPN</a></li>
                <li><a href="../transupn/bus/kategori.php">Kategori</a></li>
            </ul>
    </nav>
    <div class="modifikasidata">
        <ul>
            <li><a href="<?php echo "../transupn/bus/form.php"; ?>"><b>Modifikasi Data</b></a></li>
        </ul>
    </div>
        <div class="container">
        <table>
            <thead>
                <tr>
                    <th>ID Bus</th>
                    <th>Plat</th>
                    <th>Status</th>
                    <th>Modifikasi Data</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM bus";
                $result = mysqli_query(connection(), $query);
                ?>
                    <?php 
                            while($data = mysqli_fetch_array($result)): 
                                ?>                    
                        <tr>
                            <td>
                                <?php echo $data ['id_bus'];?>
                            </td>
                            <td>
                                <?php echo $data['plat']; ?>
                            </td>
                            <td>
                                <?php echo $data['status']; ?>
                            </td>
                            <td>
                            <li><a href="<?php echo "../transupn/bus/update.php?id_bus=".$data['id_bus']; ?>"> Update</a></li>
                           <li><a href="<?php echo "../transupn/bus/delete.php?id_bus=".$data['id_bus']; ?>"> Delete</a></li>
                        </td>
                     <?php endwhile ?>
                </tr>
            </tbody>
        </thead>
    </div>
</body>
</html>