<?php 
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=kolektif.xls");
?>
<h1 align="center">Data Kolektif</h1>
<table border="1" width="100%">
<thead>
<tr>
<th>ID Pelanggan</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Tarif</th>
    <th>Daya </th>
    <th>Jumlah </th>
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
<?php foreach($kolektif as $kolektif) { ?>
<tr>
<td><?php echo $kolektif->idpel ?></td>
 <td><?php echo $kolektif->nama ?></td>
 <td><?php echo $kolektif->alamat ?></td>
 <td><?php echo $kolektif->tarif ?></td>
 <td><?php echo $kolektif->daya?></td>
 <td><?php echo $kolektif->jml ?></td>
 <td><?php echo $kolektif->tgl_ps ?></td>
 <td><?php echo $kolektif->kpm ?></td>
 <td><?php echo $kolektif->tgl_byr ?></td>
 <td><?php echo $kolektif->tgl_krm_up3 ?></td>
 <td><?php echo $kolektif->progress ?></td>
 <td><?php echo $kolektif->tgl_survey ?></td>
 <td><?php echo $kolektif->tgl_pdl ?></td>
 </tr>
<?php } ?>
</tbody>
</table>