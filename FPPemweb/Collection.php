<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nama = "FIK&SNEAK";?></title>
    <link rel="stylesheet" type="text/css" href="css.css">
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
            <h1>COLLECTION</h1>
        
    </div>

    <table border="0" cellpadding="35" width="2200">
        <tr>
            <th><img src="Logo Nike.png"></th>
            <th><img src="Logo Jordan.png"></th>
            <th><img src="Logo NB.png"></th>
            <th><img src="Logo Adidas.png"></th>
        </tr><br>

        <tr class="brand">
            <td><a href="homeNike.php">Nike</a></td>
            <td><a href="homeJordan.php">Jordan</a></td>
            <td><a href="homeNB.php">NB</a></td>
            <td><a href="homeAdidas.php">Adidas</a></td>
        </tr>
    </table> 
</body>
</html>