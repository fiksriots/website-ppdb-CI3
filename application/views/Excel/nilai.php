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
            <th>Nomor Pendaftaran</th>
            <th>Nama</th>
            <th>Nilai Seleksi</th>
            
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($sNilai as $cs) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $cs['id_akun'] ?></td>
                <td><?= $cs['nama'] ?></td>
                <td><?= $cs['ujian'] ?></td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>