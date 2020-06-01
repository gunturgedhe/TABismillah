<?php 
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=tgphasa_pd.xls");
?>
<h1 align="center">Data 3 Phasa Penambahan Daya</h1>
<table border="1" width="100%">
<thead>
<tr>
<th>ID Pelanggan</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Tarif Awal</th>
    <th>Daya Awal</th>
    <th>Tarif Baru</th>
    <th>Daya Baru</th>
    <th>Tanggal Permohonan Surat</th>
    <th>Kebutuhan Perluasan Material</th>
    <th>Tanggal Bayar</th>
    <th>Tanggal Kirim UP3</th>
    <th>Progress</th>
    <th>Tanggal Survey</th>
    <th>Tanggal PDL</th>
 </tr>
</thead>
<tbody>
<?php  foreach($tgphasa_pd as $tgphasa_pd) { ?>
<tr>
<td><?php echo $tgphasa_pd->idpel ?></td>
 <td><?php echo $tgphasa_pd->nama ?></td>
 <td><?php echo $tgphasa_pd->alamat ?></td>
 <td><?php echo $tgphasa_pd->trf_awal ?></td>
 <td><?php echo $tgphasa_pd->daya_awal ?></td>
 <td><?php echo $tgphasa_pd->trf_baru ?></td>
 <td><?php echo $tgphasa_pd->daya_baru ?></td>
 <td><?php echo $tgphasa_pd->tgl_ps ?></td>
 <td><?php echo $tgphasa_pd->kpm ?></td>
 <td><?php echo $tgphasa_pd->tgl_byr ?></td>
 <td><?php echo $tgphasa_pd->tgl_krm_up3 ?></td>
 <td><?php echo $tgphasa_pd->progress ?></td>
 <td><?php echo $tgphasa_pd->tgl_survey ?></td>
 <td><?php echo $tgphasa_pd->tgl_pdl ?></td>
 </tr>
<?php  } ?>
</tbody>
</table>