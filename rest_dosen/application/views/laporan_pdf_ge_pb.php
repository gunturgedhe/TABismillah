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
						foreach ($ge_pb as $m){
							echo "<tr>
								<td>$m->idpel</td>
								<td>$m->nama</td>
								<td>$m->alamat</td>
								<td>$m->trf_awal</td>
								<td>$m->daya_awal</td>
								<td>$m->trf_baru</td>
                <td>$m->daya_baru</td>
                <td>$m->tgl_ps</td>
                <td>$m->kpm</td>
                <td>$m->tgl_byr</td>
                <td>$m->tgl_krm_up3</td>
                <td>$m->progress</td>
                <td>$m->tgl_survey</td>
                <td>$m->tgl_pdl</td>
								</tr>";
							}
						?>
	</table>
</body></html>