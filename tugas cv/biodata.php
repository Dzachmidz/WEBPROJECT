<?php
require "variabel.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Saya</title>
</head>
<style>
body {
  background-image: url('bg3.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<body>
    <h1 align="center">Biodata Saya</h1>
    <hr width="600px">
    <table align="center" cellpadding="5" align="center" width="700">
        <?php foreach ($biodata as $bio) : ?>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?php echo $bio ['nama']; ?></td>
        <td rowspan="5" align="center"><img src="foto.jpeg" width="150px"  style="display: block;border-radius: 50%;border-color:white;margin-right:30px" border="2px"></td>
    </tr>
    <tr>
        <td>NPM</td>
        <td>:</td>
        <td><?php echo $bio ['npm']; ?></td>
    </tr>
    <tr>
        <td>Tempat, Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo $bio ['ttl']; ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $bio ['alamat']; ?></td>
    </tr>
    <tr>
        <td>Hobi</td>
        <td>:</td>
        <td><?php echo $bio ['hobi']; ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td>:</td>
        <td><?php echo $bio ['email']; ?></td>
    </tr>
    </table>
    <footer>
        <p align="center" ><a href="https://instagram.com/fahmialhafidz._?igshid=YmMyMTA2M2Y="> <img src="ig.jpeg" width="25" align="center"></a><a href="https://api.whatsapp.com/send/?phone=6282233254044&text&type=phone_number&app_absent=0"> <img src="wa.jpeg" width="25" align="center"><a href="https://line.me/ti/p/rjSN83aLLT"> <img src="line.png" width="25" align="center"></p>
    </footer>
</body>
</html>