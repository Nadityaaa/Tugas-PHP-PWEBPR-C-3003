<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayBox | Create</title>
    <link rel="stylesheet" href="/PlayBox/pages/style/play-box.css">
</head>
<body>
    <div class="container">
        <div class="flex-column">
            <div class="box-small">
                <img src="/PlayBox/pages/Asset/logo.png" alt="" class="logo">
                <h1 class="title">PlayBox</h1>
                <img src="/PlayBox/pages/Asset/user.png" alt="" class="user">
                <h1 class="username">Naditya Putri Lestari</h1>
                <a href="dashboard" style="color: black; text-decoration: none;">
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
                <a href="logout" onclick="return confirm('Apakah anda yakin untuk keluar?');">
                    <button type="submit" class="btn-logout" name="logout" id="logout">LogOut</button>
                </a>
            </div>
        </div>
        <form action="PlayBox/create" method="POST">
            <div class="flex-row">
                <div class="box-big">
                    <h1 style="text-align: center; margin-top: 60px; margin-bottom: 30px;">Input data player</h1>
                    <label for="nama">Nama player</label>
                    <input id="nama" name="nama" type="text" placeholder="Input nama ..." require>
                    <label for="tanggal">Tanggal</label>
                    <input style="text-align: center; display: inline-block;" type="date" id="tanggal" name="tanggal" placeholder="Pilih tanggal" require/>
                    <label for="play_time">Waktu mulai</label>
                    <input style="text-align: center; display: inline-block;" type="time" name="play_time" id="play_time" require>
                    <script>
                        $(document).ready( function() {
                            var now = new Date();
                            var now2 = new Date(now.getFullYear(), now.getMonth(), now.getDate(), now.getHours(), now.getMinutes(), now.getSeconds());
                            $('#play_time')[0].valueAsDate = now2;
                        });
                    </script>
                    <label for="end_time">Waktu selesai</label>
                    <input style="text-align: center; display: inline-block;" type="time" name="end_time" id="end_time" require>
                    <script>
                        $(document).ready( function() {
                            var now = new Date();
                            var now2 = new Date(now.getFullYear(), now.getMonth(), now.getDate(), now.getHours(), now.getMinutes(), now.getSeconds());
                            $('#end_time')[0].valueAsDate = now2;
                        });
                    </script>
                    <label for="harga">Harga</label>
                    <input type="tel" name="harga" id="harga" placeholder="Bayar" minlength="4" maxlength="6" require>
                    <button type="submit" class="btn-simpan" id="submit" name="submit">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
