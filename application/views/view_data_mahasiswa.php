<html>

<head>
    <title>Tampil Data Mahasiswa</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="9">
                    Tampil Data Mahasiswa
                </th>
            </tr>
            <tr>
                <td colspan="9">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama Siswa</th>
                <th>:</th>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <th>Nis</th>
                <th>:</th>
                <td>
                    <?= $nis; ?>
                </td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>:</td>
                <td>
                    <?= $kls; ?>
                </td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>:</td>
                <td>
                    <?= $tgl; ?>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <td>:</td>
                <td>
                    <?= $tmp; ?>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>:</td>
                <td>
                    <?= $alamat; ?>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>:</td>
                <td>
                    <?php
                    if (isset($_POST['jenis_kelamin'])) {

                        $jenis_kelamin = $_POST['jenis_kelamin'];
                        echo "<br>" . $jenis_kelamin;
                    } ?>
            </tr>
            <tr>
                <th>Agama</th>
                <td>:</td>
                <td>
                    <?= $agama; ?>
                </td>
            </tr>
            <tr>
                <td colspan="9" align="center">
                    <a href="<?= base_url('mahasiswa'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>