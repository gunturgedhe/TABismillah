<!DOCTYPE html>
<html><head>
	<title></title>
</head><body>
	<table>
    <tr>
        <th>ID Pelanggan</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tarif</th>
        <th>Daya</th>
        <th>Jumlah</th>
        <th>Tanggal Permohonan Surat</th>
        <th>Kebutuhan Perluasan Material</th>
        <th>Tanggal Bayar</th>
        <th>Tanggal Kirim UP3</th>
        <th>Progress</th>
        <th>Tanggal Survey</th>
        <th>Tanggal PDL</th>
		</tr>
        
        <?php
        foreach ($kolektif as $k){
            echo "<tr>
          <td>$k->idpel</td>
                <td>$k->nama</td>
                <td>$k->alamat</td>
                <td>$k->tarif</td>
                <td>$k->daya</td>
                <td>$k->jml</td>
                <td>$k->tgl_ps</td>
                <td>$k->kpm</td>
                <td>$k->tgl_byr</td>
                <td>$k->tgl_krm_up3</td>
                <td>$k->progress</td>
                <td>$k->tgl_survey</td>
                <td>$k->tgl_pdl</td>
        </tr>";
        }
	    ?>
	</table>
</body></html>