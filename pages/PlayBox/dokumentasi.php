<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
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
        <div class="flex-row">
            <div class="box-big">
                <form action="/PlayBox/dokumentasi" method="post" enctype="multipart/form-data">
                    <h1 style="text-align: center; margin-top: 60px; margin-bottom: 30px;">Drop Image Here !</h1>
                    <div class="profile-pic flex-column">
                        <label class="-label" for="file" style="margin-left: 0px;">
                            <span class="glyphicon glyphicon-camera"></span>
                            <span>Change Image</span>
                        </label>
                        <input id="file" name="file" type="file" onchange="loadFile(event)"/>
                        <img src="/PlayBox/pages/Asset/user.png" id="output" width="200" />
                        <script>
                            var loadFile = function (event) {
                                var image = document.getElementById("output");
                                image.src = URL.createObjectURL(event.target.files[0]);
                            };
                        </script>
                    </div>
                    <label for="deskripsi">Deskripsi</label>
                    <input id="deskripsi" name="deskripsi" type="text" required>
                    <button type="submit" class="btn-simpan" id="submit" name="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>