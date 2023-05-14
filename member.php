<?php
require('koneksi.php');
require('model.php');

// fetch data from database
$member = new model();
$data = $member->getMember();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Data</title>
</head>

<body>
    <div>
        <h1 style="margin-left: 30px;">Data Mahasiswa</h1>
        <table>
            <tr>
                <th>Nama</th>
                <th>Nomor</th>
                <th>Alamat</th>
                <th>Tanggal Mendaftar</th>
                <th>Tanggal Terakhir Bayar</th>
            </tr>
            <?php foreach ($data as $baris): ?>
                <tr>
                    <td>
                        <?= $baris['nama_member'] ?>
                    </td>
                    <td>
                        <?= $baris['nomor_member'] ?>
                    </td>
                    <td>
                        <?= $baris['alamat'] ?>
                    </td>
                    <td>
                        <?= $baris['tgl_mendaftar'] ?>
                    </td>
                    <td>
                        <?= $baris['tgl_terakhir_bayar'] ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <form action="FormMember.php" method="post">
            <button type="submit">Tambah Data</button>
        </form>
    </div>
</body>

</html>