<?php

require_once("Halaman/conn/config.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $id_user = filter_input(INPUT_POST, 'id_user', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);


    // menyiapkan query
    $sql = "INSERT INTO user (id_user, email,username, password) 
            VALUES (:id_user, :email, :username, :password)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":id_user" => $id_user,
        ":email" => $email
        ":username" => $username,
        ":password" => $password,
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css1.css">
    <title><?php echo $nama = "FIK&SNEAK";?></title>
    <link rel='icon' type='image/x-icon' href='Gambar/logo/fiksneak.png' />
</head>
<body><br><br><br><br><br><br><br><br><br><br><br><br>
<main>
    <form action="login.php" method="POST">
        <h1 class="logo"></h1>
        <div>
            <input type="text" class="logo3" placeholder="EMAIL" name="email" required="required">
        </div><br>
        <div>
            <input type="text" class="logo1" placeholder="USERNAME" name="username" required="required">
        </div><br>
        <div>
            <input type="text" class="logo2" placeholder="PASSWORD" name="password" required="required">
        </div><br>
        <div>
            <input type="text" class="logo2" placeholder="CONFIRM PASSWORD" name="password" required="required">
        </div><br>
        <a href="login.php">
            <button type="submit" name="sign_up" required="required">
        </a>    
    </form>
</main><br>
</body>
</html>