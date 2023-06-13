<?php
    include ('conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nama = "FIK&SNEAK";?></title>
    <link rel="stylesheet" type="text/css" href="css2.css">
    <script src="https://kit.fontawesome.com/2365b8dab9.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="header">
      <div class="logo" ></div>
      <div class="link">
            <nav>
                <ul>
                    <a href="Home.php">HOME</a>
                    <a href="Collection.php">COLLECTION</a>
                    <a href="About.php">ABOUT</a>
                    <a href="Contact.php">CONTACT</a>
                    <a href="Cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
                </ul>
            </nav>
        </div>
    </div>
    <div class="body">
        <a href="homeAdidas.php"><img class="back" src ="back.png"></a>
        <img class="foto" src ="samba.png">
        <div class ="data">
            <p>Adidas Samba</p>
            <table border="0" cellpadding="20">
                <thead>
                    <tr>
                        <th>Size</th>
                        <th>Stock</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>9</td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>21</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>7</td>
                    </tr>
                </tbody>
            </table>
            <p>Rp.2.700.000,00</p><br>
            <a href="Cart.php"><img src="buy.png"></a>
        </div>
    </div>
</html>