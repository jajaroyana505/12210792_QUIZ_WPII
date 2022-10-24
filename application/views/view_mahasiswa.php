<html>

<head>
    <title>Tampil Data Siswa</title>
</head>

<body>
    <center>
        <table border="1">
            <tr>
                <th colspan="4">
                    Tampil Data Mahasiswa
                </th>
            </tr>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($mahasiswa as $row) : ?>
                <tr>
                    <td><?= $row->nim; ?></td>
                    <td><?= $row->nama; ?></td>
                    <td><?= $row->prodi; ?></td>
                    <td>
                        <a href="<?= base_url('controllermahasiswa/hapus/');
                                    echo $row->id; ?>">hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </center>
</body>

</html>