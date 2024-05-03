<?php
require_once ("D:/xampp/htdocs/Play Box/helper/config.php");

session_start();

if(isset($_SESSION['id'])) {
    global $url;
    header("Location:".$url."pages/Dashboard/dashboard.php");
    exit;
}

$error = array();

if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email = mysqli_real_escape_string($koneksi, $email);
    $password = mysqli_real_escape_string($koneksi, $password);

    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = $koneksi->query($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        $_SESSION['id'] = $user['id'];
        exit;
    }else {
        $error[] = "Invalid username or password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayBox | Sign In</title>
    <link rel="stylesheet" href="../style/sign-in.css">
</head>
<body>
    <div class="container">
        <div class="box-form">
            <form action="../../pages/Auth/signin.php" method="post">
                <img src="../../pages/Asset/logo.png" alt="" class="logo">
                <h1 class="title">PlayBox</h1>
                <h1 class="heading">Sign in to your account</h1>
                <p class="desc">Enter your email and password</p>
                <label for="email">Email address</label>
                <input class="input" id="email" name="email" type="email" placeholder="Enter your email address" required autofocus>
                <label for="password">Password</label>
                <input class="input" id="password" name="password" type="password" placeholder="Enter your password" required>
                <button class="btn-submit" id="submit" name="submit">Submit</button>
                <p class="question">Don't have an account?
                    <a href="../../pages/Auth/signup.php" style="color: #998F38;">Sign Up</a>
                </p>
                <img src="../../pages/Asset/pic.png" alt="" class="pic">
                <?php
                if(!empty($error)) {
                    foreach($error as $errMsg){
                        echo '<div class="error-msg">'.$errMsg.'</div>';
                    }
                }
                ?>
            </form>
        </div>
    </div>
</body>
</html>





