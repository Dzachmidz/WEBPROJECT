<?php

require_once("config.php");

if(isset($_POST['login'])){
    $username = filter_input(INPUT_POST, 'id_user', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM user WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":id_user" => $id_user,
        ":email" => $email,
        ":username" => $username,
        ":password" => $password
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if($user){
        // verifikasi password
        if(password_verify($password, $username["password"])){
            // buat Session
            session_start();
            $_SESSION["username"] = $username;
            // login sukses, alihkan ke halaman timeline
            header("Location: home.php");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css1.css">
    <title>Login</title>
</head>
<body><br><br><br><br><br><br><br><br><br><br><br><br>
<main>
    <form action="login2.php" method="post">
        <h1 class="logo"></h1>
        <div>
            <input type="text" class="logo1" placeholder="username" name="username" required="required">
        </div><br>
        <div>
            <input type="text" class="logo2" placeholder="password" name="password" required="required">
        </div>
    </form>
</main><br>
<a href="home.php">LOGIN</a><br><br>
<a href="menusignup.php">SIGN UP</a>
</body>
</html>