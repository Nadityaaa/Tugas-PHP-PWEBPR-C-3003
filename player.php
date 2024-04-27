<?php
$koneksi=mysqli_connect('localhost','root','','user_db');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="flex-column">
            <div class="box-small">
                <img src="Asset/logo.png" alt="" class="logo">
                <h1 class="title">PlayBox</h1>
                <img src="Asset/user.png" alt="" class="user">
                <h1 class="username">Lily Miranda</h1>
                <button class="btn-menu">
                    <a href="dashboard.php" style="color: black; text-decoration: none;">Dashboard</a></button>
                <button class="btn-menu">
                    <a href="player.php" style="color: black; text-decoration: none;">Data Player</a>
                </button>
                <button class="btn-menu">
                    <a href="create.php" style="color: black; text-decoration: none;">Add Data</a>
                </button>
                <button class="btn-menu">
                    <a href="account.php" style="color: black; text-decoration: none;">Account</a>
                </button>
                <button class="btn-logout">
                    <a href="index.php" style="color: black; text-decoration: none;">LogOut</a>
                </button>
            </div>
        </div>
        <div class="flex-row">
            <div class="box-big">
                <!-- <button class="btn-update">Update</button>
                <button class="btn-delete" class="flex-row">Delete</button> -->
                <!-- <h1 style="margin: 40px 0px 0px 40px;">Hello, welcome to PlayBox</h1> -->
                <div class="tabel" style="margin-top: 90px;">
                    <table border="1">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Start</th>
                            <th>End</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        $no = 1;
                        $data_player = mysqli_query($koneksi, "SELECT * FROM player");
                        while ($tampil_data = mysqli_fetch_array($data_player)){
                            ?>
                            <tr>
                                <td><?= $no++ ?>.</td>
                                <td><?= $tampil_data['nama']; ?></td>
                                <td><?= $tampil_data['tanggal']; ?></td>
                                <td><?= $tampil_data['play_time']; ?></td>
                                <td><?= $tampil_data['end_time']; ?></td>
                                <td><?= $tampil_data['harga']; ?></td>
                                <td class="flex-column" style="gap: 5px;">
                                <button class="option">
                                    <a href="update.php" style="color: #000000; text-decoration: none;">Update</a>
                                </button>
                                <button class="option">
                                    <a href="#" style="color: #000000; text-decoration: none;">Delete</a>
                                </button>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
                <!-- <button class="btn-create">+</button> -->
            </div>
        </div>
    </div>
</body>
</html>