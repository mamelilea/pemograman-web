<html>

<head></head>

<body>
    <h2>Daftar Program Kerja BEM</h2>
    <table border="1" cellpadding="5">
        <tbody>
            <tr>
                <td>No</td>
                <td>Nama Program Kerja</td>
                <td>Surat Keterangan</td>
            </tr>
        </tbody>
        <?php
        foreach ($proker as $row) {
            echo "<tr>";
            echo "<td>" . $row['nomor_program'] . "</td>";
            echo "<td>" . $row['nama_program'] . "</td>";
            echo "<td>" . $row['surat_keterangan'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>