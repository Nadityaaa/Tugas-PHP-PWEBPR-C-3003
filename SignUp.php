<?php
$koneksi=mysqli_connect('localhost','root','','user_db');
if (isset($_POST['simpan'])){
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $tanggal = mysqli_real_escape_string($koneksi, $_POST['tanggal']);
    $play_time = mysqli_real_escape_string($koneksi, $_POST['play_time']);
    $end_time = mysqli_real_escape_string($koneksi, $_POST['end_time']);
    $harga = mysqli_real_escape_string($koneksi, $_POST['harga']);
    $simpan = mysqli_query($koneksi,"INSERT INTO player (nama, tanggal, play_time, end_time, harga)VALUES('$nama', '$tanggal',' $play_time', '$end_time', '$harga')");
    if($password == $cpassword){
        echo "<script>window.alert(password no matched')window.location'singup.php'</script>";
    }else{
        $submit = "INSERT INTO user_form (nama, email, password) VALUES('$name','$email','$password')";
        mysqli_query($conn, $submit);
        header('location:index.php');
    }
}
?>
<?php
@include 'config.php';

if(isset($_POST['submit'])){
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$password' ";
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        // $error[] = 'user alredy exist!';
        echo "<script>window.alert('user alredy exist!')window.location'singup.php'</script>";
    }else{
        
    }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="container">
        <div class="box-form">
            <form action="signup.html" method="post">
                <img src="Asset/logo.png" alt="" class="logo">
                <h1 class="title">PlayBox</h1>
                <h1 class="heading">Create to your account</h1>
                <p class="desc">Make your own account</p>
                <label for="nama">Name</label>
                <input class="input" id="nama" name="nama" type="text" placeholder="Enter your full name" required autofocus>
                <label for="email">Email address</label>
                <input class="input" id="email" name="email" type="email" placeholder="Enter your email address" required>
                <label for="password">Password</label>
                <input class="input" id="password" name="password" type="password" placeholder="Enter your password" required>
                <input class="input" id="cpassword" name="cpassword" type="password" placeholder="Confirm your password" required>
                <!-- <input class="btn-submit" id="submit" name="submit" type="submit" value='Create an account'> -->
                <button class="btn-submit" id="submit" name="submit">
                    <a href="dashboard.php" style="color: #000000; text-decoration: none;">Create an account</a>
                </button>
                <p class="question">Already have an account?
                    <a href="index.php" style="color: #998F38;">Sign In</a>
                </p>
                <img style="gap: 0px;" src="Asset/pic.png" alt="" class="pic">
            </form>
        </div>
    </div>
</body>
</html>