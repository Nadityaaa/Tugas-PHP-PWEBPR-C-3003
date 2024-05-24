<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayBox | Player</title>
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
                        for ($i=0; $i < count($data); $i++) { ?>
                        <tr>
                            <td><?= (int)$i + 1 ?></td>
                            <td><?= $data[$i]['nama'] ?></td>
                            <td><?= $data[$i]['tanggal'] ?></td>
                            <td><?= $data[$i]['play_time'] ?></td>
                            <td><?= $data[$i]['end_time'] ?></td>
                            <td><?= $data[$i]['harga'] ?></td>
                            <td class="flex-column" style="gap: 5px;">
                                <a href="update/<?= $data[$i]['id']; ?>" style="color: #000000; text-decoration: none;">
                                    <button class="option">Update</button>
                                </a>
                                <a href="delete/<?= $data[$i]['id']; ?>" onclick="return confirm ('Are you sure you want to delete this data?');" style="color: #000000; text-decoration: none;">
                                    <button class="option">Delete</button>
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>