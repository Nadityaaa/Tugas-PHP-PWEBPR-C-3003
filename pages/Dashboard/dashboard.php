
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayBox | Dashboard</title>
    <link rel="stylesheet" href="/PlayBox/pages/style/play-box.css">
</head>
<body>
    <div class="container">
        <div class="flex-column">
            <div class="box-small">
                <img src="/PlayBox/pages/Asset/logo.png" alt="" class="logo">
                <h1 class="title">PlayBox</h1>
                <img src="/PlayBox/pages/Asset/user.png" alt="" class="user">
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
                <h1 style="margin: 40px 0px 0px 40px;">Hello, welcome to PlayBox</h1>
                <div class="tabel">
                    <table border="1">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Start</th>
                            <th>End</th>
                            <th>Price</th>
                        </tr>
                        <?php
                        for ($i=0; $i < count($data); $i++) { ?>
                        <tr>
                            <td><?= (int)$i + 1 ?></td>
                            <td><?= $data[$i]['nama'] ?></td>
                            <td><?= $data[$i]['tanggal'] ?></td>
                            <td><?= $data[$i]['play_time'] ?></td>
                            <td><?= $data[$i]['end_time'] ?></td>
                            <td><?= $data[$i]['harga'] ?></td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>