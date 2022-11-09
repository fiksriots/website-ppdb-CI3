<?php
header("Content-type:aplication/octet-stream/");
header("Content-Disposition:attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");

?>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No.Telepon</th>
            <th>Gender</th>
            <th>Jurusan</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($sAkun as $cs) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $cs['nama'] ?></td>
                <td><?= $cs['alamat'] ?></td>
                <td><?= $cs['no_telp'] ?></td>
                <td><?= $cs['gender'] ?></td>
                <td><?= $cs['jurusan'] ?></td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>