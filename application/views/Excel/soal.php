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
            <th>Soal</th>
                    <th>A</th>
                    <th>B</th>
                    <th>C</th>
                    <th>D</th>
                    <th>E</th>
                    <th>Kunci Jawaban</th>
                    <th>jurusan</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($sSoal as $cs) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $cs['soal'] ?></td>
                <td><?= $cs['a'] ?></td>
                <td><?= $cs['b'] ?></td>
                <td><?= $cs['c'] ?></td>
                <td><?= $cs['d'] ?></td>
                <td><?= $cs['e'] ?></td>
                <td><?= $cs['knc_jawaban'] ?></td>
                <td><?= $cs['jurusan'] ?></td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>