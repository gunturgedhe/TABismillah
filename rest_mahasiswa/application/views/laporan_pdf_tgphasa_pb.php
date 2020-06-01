<!DOCTYPE html>
<html><head>
	<title></title>
</head><body>
	<table>
		<tr>
			<!-- <th>NO</th> -->
			<th>ID Pelanggan</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Tarif Awal</th>
			<th>Daya Awal</th>
			<th>Tarif Baru</th>
			<th>Daya Baru</th>
			<th>Tanggal Permohonana Surat</th>
			<th>Kebutuhan Perluasan Material</th>
			<th>Tanggal Bayar</th>
			<th>Tanggal Kirim UP3</th>
			<th>Progress</th>
			<th>Tanggal Survey</th>
			<th>Tanggal PDL</th>
		</tr>
        
        <?php
        foreach ($tgphasa_pb as $p) {
            echo "<tr>
            <td>$p->idpel</td>
            <td>$p->nama</td>
            <td>$p->alamat</td>
            <td>$p->trf_awal</td>
            <td>$p->daya_awal</td>
            <td>$p->trf_baru</td>
            <td>$p->daya_baru</td>
            <td>$p->tgl_ps</td>
            <td>$p->kpm</td>
            <td>$p->tgl_byr</td>
            <td>$p->tgl_krm_up3</td>
            <td>$p->progress</td>
            <td>$p->tgl_survey</td>
            <td>$p->tgl_pdl</td>
        </tr>";
        }
						?>
	</table>
</body></html>