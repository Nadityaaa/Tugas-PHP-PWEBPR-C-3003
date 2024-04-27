<?php
$koneksi=mysqli_connect('localhost','root','','user_db');
if (isset($_POST['simpan'])){
    // $id = 1;
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $tanggal = mysqli_real_escape_string($koneksi, $_POST['tanggal']);
    $play_time = mysqli_real_escape_string($koneksi, $_POST['play_time']);
    $end_time = mysqli_real_escape_string($koneksi, $_POST['end_time']);
    $harga = mysqli_real_escape_string($koneksi, $_POST['harga']);
    $simpan = mysqli_query($koneksi,"INSERT INTO player(nama, tanggal, play_time, end_time, harga) VALUES('$nama', '$tanggal',' $play_time', '$end_time', '$harga')");
    if ($simpan){
        echo "<script>window.alert('Data berhasil disimpan')window.location'index.php'</script>";
    }
    else{
        echo "<script>window.alert('Data tidak berhasil disimpan')window.location'index.php'</script>";
    }
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
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
        <form action="dashboard.php" method="post">
            <div class="flex-row">
                <div class="box-big">
                    <h1 style="text-align: center; margin-top: 60px; margin-bottom: 30px;">Input data player</h1>
                    <label for="nama">Nama player</label>
                    <input id="nama" name="nama" type="text" placeholder="Input nama ..." required>
                    <label for="tanggal">Tanggal</label>
                    <input style="text-align: center; display: inline-block;" type="date" id="tanggal" name="tanggal" placeholder="Pilih tanggal" required/>
                    <label for="play_time">Waktu mulai</label>
                    <input style="text-align: center; display: inline-block;" type="time" name="play_time" id="play_time" required>
                    <script>
                        $(document).ready( function() {
                            var now = new Date();
                            var now2 = new Date(now.getFullYear(), now.getMonth(), now.getDate(), now.getHours(), now.getMinutes(), now.getSeconds());
                            $('#play_time')[0].valueAsDate = now2;
                        });
                    </script>
                    <label for="end_time">Waktu selesai</label>
                    <input style="text-align: center; display: inline-block;" type="time" name="end_time" id="end_time" required>
                    <script>
                        $(document).ready( function() {
                            var now = new Date();
                            var now2 = new Date(now.getFullYear(), now.getMonth(), now.getDate(), now.getHours(), now.getMinutes(), now.getSeconds());
                            $('#end_time')[0].valueAsDate = now2;
                        });
                    </script>
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" id="harga" placeholder="Bayar" minlength="4" maxlength="6" required>
                    <input type="submit" id="simpan" name="simpan" value="Simpan" class="btn-simpan">
                </div>
            </div>
        </form>
    </div>
</body>
</html>
