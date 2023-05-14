<?php
require("koneksi.php");
include_once("model.php");

$member = new model();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Member</title>
    <style>
        ::placeholder {
            color: black;
        }
    </style>
</head>

<body>
    <div>
        <form action="" method="post">
            <table>
                <tr>
                    <td>
                        <label for="nama_member">Nama</label>
                    </td>
                    <td>
                        <input type="text" name="nama_member" id="nama_member">
                    </td>
                </tr>
                <tr>
                    <td> <label for="nomor_member">Nomor</label></td>
                    <td><input type="text" name="nomor_member" id="nomor_member"></td>
                </tr>
                <tr>
                    <td><label for="alamat">Alamar</label></td>
                    <td><input type="text" name="alamat" id="alamat"></td>
                </tr>
                <!-- <tr>
                    <td><label for="tgl_mendaftar">Tanggal Mendaftar</label></td>
                    <td><input type="datetime" name="tgl_mendaftar" id="tgl_mendaftar" placeholder="dd/mm/yyyy"></td>
                </tr> -->
                <tr>
                    <td><label for="tgl_terakhir_bayar">Tanggal Terakhir Bayar</label></td>
                    <td><input type="date" name="tgl_terakhir_bayar" id="tgl_terakhir_bayar" style="width: 98%"></td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="submit">Tambah</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <?php
    if (isset($_POST['submit']) && isset($_POST['nama_member']) && isset($_POST['nomor_member']) && isset($_POST['alamat']) && isset($_POST['tgl_mendaftar']) && isset($_POST['tgl_terakhir_bayar'])) {
        $nama = $_POST['nama_member'];
        $nomor = $_POST['nomor_member'];
        $alamat = $_POST['alamat'];
        $tgl_mendaftar = $_POST['tgl_mendaftar'];
        $tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];

        $hasil = $member->setMember($nama, $nomor, $alamat, $tgl_terakhir_bayar);

        if ($hasil) {
            header("Location: member.php");
        } else {
            echo "data gagal ditambahkan";
        }
    }
    ?>
</body>

</html>