<?php
    require_once ("../../controllers/UserController.php");
    require_once ("../../helper/config.php");
    // $data = UserController::detail($_GET['id']);
    session_start();

    if (isset($_COOKIE['submit'])) {
        // $nama = $_POST['nama'];
        // $email = $_POST['email'];
        // $password = $_GET['password'];
        $deskripsi = $_POST["deskripsi"];
        // $Bukti = $_FILES["Bukti"];
        
            $file = $_FILES['file']['name'];
            $file_tmp = $_FILES['file']['tmp_name'];
            move_uploaded_file($file_tmp, './image/' . $file);
    
            $query = "INSERT INTO user (nama, email, deskripsi, file) VALUES (?, ?, ?, ?)";
            $query_run = mysqli_query($koneksi, $query);
    
            if($query_run){
                $_SESSION['message'] = "Data berhasil ditambahkan";
                header("Location: dashboard.php");
            } else {
                $_SESSION['Gagal menambahkan data'];
                header("Location: account.php");
            }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="../style/play-box.css">
</head>
<body>
    <div class="container">
        <div class="flex-column">
            <div class="box-small">
            <img src="../../pages/Asset/logo.png" alt="" class="logo">
                <h1 class="title">PlayBox</h1>
                <img src="../../pages/Asset/user.png" alt="" class="user">
                <h1 class="username">Lily Miranda</h1>
                <a href="../../pages/Dashboard/dashboard.php" style="color: black; text-decoration: none;">
                    <button class="btn-menu">Dashboard</button>
                </a>
                <a href="../../pages/PlayBox/player.php" style="color: black; text-decoration: none;">
                    <button class="btn-menu">Data Player</button>
                </a>
                <a href="../../pages/PlayBox/create.php" style="color: black; text-decoration: none;">
                    <button class="btn-menu">Add Data</button>
                </a>
                <a href="../../pages/PlayBox/account.php" style="color: black; text-decoration: none;">
                    <button class="btn-menu">Account</button>
                </a>
                <a href="../../pages/Auth/signin.php" style="color: black; text-decoration: none;">
                    <button class="btn-logout">LogOut</button>
                </a>
            </div>
        </div>
        <div class="flex-row">
            <div class="box-big">
                <form action="../../controllers/UserController.php?action=update" method="post">
                    <h1 style="text-align: center; margin-top: 60px; margin-bottom: 30px;">Profile Account</h1>
                    <div class="profile-pic flex-column">
                        <label class="-label" for="file" style="margin-left: 0px;">
                            <span class="glyphicon glyphicon-camera"></span>
                            <span>Change Image</span>
                        </label>
                        <input id="file" name="image" type="file" onchange="loadFile(event)"/>
                        <img src="Asset/user.png" id="output" width="400" height="400" />
                        <script>
                            var loadFile = function (event) {
                                var image = document.getElementById("output");
                                image.src = URL.createObjectURL(event.target.files[0]);
                            };
                        </script>
                    </div>
                    <!-- <label for="nama">Nama</label>
                    <input id="nama" name="nama" type="text" required>
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" required> -->
                    <label for="deskripsi">Deskripsi</label>
                    <input id="deskripsi" name="deskripsi" type="text" required>
                    <button class="btn-simpan" id="submit" name="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>