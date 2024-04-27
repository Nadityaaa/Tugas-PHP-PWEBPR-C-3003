<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
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
                <form action="dashboard.php" method="post">
                    <h1 style="text-align: center; margin-top: 60px; margin-bottom: 30px;">Update data player</h1>
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
                    <input type="tel" name="harga" id="harga" placeholder="Bayar" minlength="4" maxlength="6" required>
                    <button class="btn-simpan" id="simpan" name="simpan">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>