<?php 
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=tgphasa_pb.xls");
?>
<h1 align="center">Data 3 Phasa Pemasangan Baru</h1>
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
<?php  foreach($tgphasa_pb as $tgphasa_pb) { ?>
<tr>
<td><?php echo $tgphasa_pb->idpel ?></td>
 <td><?php echo $tgphasa_pb->nama ?></td>
 <td><?php echo $tgphasa_pb->alamat ?></td>
 <td><?php echo $tgphasa_pb->trf_awal ?></td>
 <td><?php echo $tgphasa_pb->daya_awal ?></td>
 <td><?php echo $tgphasa_pb->trf_baru ?></td>
 <td><?php echo $tgphasa_pb->daya_baru ?></td>
 <td><?php echo $tgphasa_pb->tgl_ps ?></td>
 <td><?php echo $tgphasa_pb->kpm ?></td>
 <td><?php echo $tgphasa_pb->tgl_byr ?></td>
 <td><?php echo $tgphasa_pb->tgl_krm_up3 ?></td>
 <td><?php echo $tgphasa_pb->progress ?></td>
 <td><?php echo $tgphasa_pb->tgl_survey ?></td>
 <td><?php echo $tgphasa_pb->tgl_pdl ?></td>
 </tr>
<?php  } ?>
</tbody>
</table>