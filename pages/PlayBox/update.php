
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayBox | Update</title>
    <link rel="stylesheet" href="/Playbox/pages/style/play-box.css">
</head>
<body>
    <div class="container">
        <div class="flex-column">
            <div class="box-small">
                <img src="/Playbox/pages/Asset/logo.png" alt="" class="logo">
                <h1 class="title">PlayBox</h1>
                <img src="/Playbox/pages/Asset/user.png" alt="" class="user">
                <h1 class="username">Lily Miranda</h1>
                <a href="/PlayBox" style="color: black; text-decoration: none;">
                    <button class="btn-menu">Dashboard</button>
                </a>
                <a href="player" style="color: black; text-decoration: none;">
                    <button class="btn-menu">Data Player</button>
                </a>
                <a href="create" style="color: black; text-decoration: none;">
                    <button class="btn-menu">Add Data</button>
                </a>
                <a href="dokumentasi" style="color: black; text-decoration: none;">
                    <button class="btn-menu">Dokumentasi</button>
                </a>
                <a href="signin" style="color: black; text-decoration: none;">
                    <button class="btn-logout">LogOut</button>
                </a>
            </div>
        </div>
        <div class="flex-row">
            <div class="box-big">
                <form action="PlayBox/update" method="post">
                    <h1 style="text-align: center; margin-top: 60px; margin-bottom: 30px;">Update data player</h1>
                    <label for="nama">Nama player</label>
                    <input id="nama" name="nama" type="text" placeholder="Input nama ..." value="<?= $data[0]['nama'] ?>" required>
                    <label for="tanggal">Tanggal</label>
                    <input style="text-align: center; display: inline-block;" type="date" id="tanggal" name="tanggal" placeholder="Pilih tanggal" value="<?= $data[0]['tanggal']?>" required/>
                    <label for="play_time">Waktu mulai</label>
                    <input style="text-align: center; display: inline-block;" type="time" name="play_time" id="play_time" value="<?= $data[0]['play_time'] ?>" required>
                    <script>
                        $(document).ready( function() {
                            var now = new Date();
                            var now2 = new Date(now.getFullYear(), now.getMonth(), now.getDate(), now.getHours(), now.getMinutes(), now.getSeconds());
                            $('#play_time')[0].valueAsDate = now2;
                        });
                    </script>
                    <label for="end_time">Waktu selesai</label>
                    <input style="text-align: center; display: inline-block;" type="time" name="end_time" id="end_time" value="<?= $data[0]['end_time'] ?>" required>
                    <script>
                        $(document).ready( function() {
                            var now = new Date();
                            var now2 = new Date(now.getFullYear(), now.getMonth(), now.getDate(), now.getHours(), now.getMinutes(), now.getSeconds());
                            $('#end_time')[0].valueAsDate = now2;
                        });
                    </script>
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" id="harga" placeholder="Bayar" minlength="4" maxlength="6" value="<?= $data[0]['harga'] ?>" required>
                    <button type="submit" class="btn-simpan" id="submit" name="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>