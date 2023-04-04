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
        <h1>Data Kondektur</h1>
            <ul>
                <li><a href="bus.php">Bus</a></li>
                <li><a href="driver.php">Driver</a></li>
                <li><a href="#">Kondektur</a></li>
                <li><a href="transupn.php">Trans UPN</a></li>
                <li><a href="../transupn/kondektur/gaji.php">Pendapatan</a></li>
            </ul>
    </nav>
    <div class="modifikasidata">
        <ul>
            <li><a href="<?php echo "../transupn/kondektur/form.php"; ?>"><b>Modifikasi Data</b></a></li>
        </ul>
    </div>
        <div class="container">
        <table>
            <thead>
                <tr>
                    <th>ID Kondektur</th>
                    <th>Nama</th>
                    <th>Modifikasi Data</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM kondektur";
                $result = mysqli_query(connection(), $query);
                ?>
                    <?php 
                        while($data = mysqli_fetch_array($result)): 
                    ?>                    
                <tr>
                            <td>
                                <?php echo $data ['id_kondektur'];?>
                            </td>
                            <td>
                                <?php echo $data['nama']; ?>
                            </td>
                            <td>
                            <li><a href="<?php echo "kondektur/update.php?id_kondektur=".$data['id_kondektur']; ?>"> Update</a></li>
                           <li><a href="<?php echo "kondektur/delete.php?id_kondektur=".$data['id_kondektur']; ?>"> Delete</a></li>
                        </td>
                     <?php endwhile ?>
                </tr>
            </tbody>
        </thead>
    </div>
</body>
</html>