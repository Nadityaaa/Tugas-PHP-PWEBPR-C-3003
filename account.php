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
                <form action="index.php" method="post">
                    <h1 style="text-align: center; margin-top: 60px; margin-bottom: 30px;">Profile Account</h1>
                    <div class="profile-pic flex-column">
                        <label class="-label" for="file" style="margin-left: 0px;">
                            <span class="glyphicon glyphicon-camera"></span>
                            <span>Change Image</span>
                        </label>
                        <input id="file" type="file" onchange="loadFile(event)"/>
                        <img src="Asset/user.png" id="output" width="200" />
                        <script>
                            var loadFile = function (event) {
                                var image = document.getElementById("output");
                                image.src = URL.createObjectURL(event.target.files[0]);
                            };
                        </script>
                    </div>
                    <label for="nama">Nama</label>
                    <input id="nama" name="nama" type="text" required>
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" required>
                    <label for="deskripsi">Deskripsi</label>
                    <input id="deskripsi" name="deskripsi" type="text" required>
                    <button class="btn-simpan" id="simpan" name="simpan">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>