<html>

<head>
    <title>Form Input Mahasiswa</title>
</head>

<body>
    <center>
        <form action="<?= base_url('mahasiswa/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="9">
                        Form Input Data Mata Kuliah
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
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>Nis</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nis" id="nis">
                    </td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="kls" id="kls">
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="tgl" id="tgl">
                    </td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="tmp" id="tmp">
                    </td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="alamat" id="alamat">
                    </td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <th>:</th>
                    <td>
                        <input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki<br>
                        <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan<br>
                    </td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <th>:</th>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Khonghucu">Khonghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="9" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>