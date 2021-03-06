<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/img/logo.png">
  <title>PLN ULP MALANG KOTA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
    <img src="https://upload.wikimedia.org/wikipedia/commons/2/20/Logo_PLN.svg" alt="logoBrand" id="logoBrand" width="200" height="100">
     
    </div>
    <ul class="nav navbar-nav">
      
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">General Electric<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url().'index.php/ge_pb' ?>">Pemasangan Baru</a></li>
          <li><a href="<?php echo base_url().'index.php/ge_pd' ?>">Penambahan Daya</a></li>
        </ul>
      </li>
      <li><a href="<?php echo base_url().'index.php/kolektif' ?>">Kolektif</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">3 Phasa<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url().'index.php/tgphasa_pb' ?>">Pemasangan Baru</a></li>
          <li><a href="<?php echo base_url().'index.php/tgphasa_pb' ?>">Penambahan Daya</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
 <div class="clear"></div>
 </header>

 <section>
<div id="page-wrapper">
  <div class="row">
      <div class="col-lg-6">
          <h1 class="page-header">Edit Data</h1>
      </div>
  </div>
 
  <!-- /.row -->
  <div class="row">
      <div class="col-lg-6">
      	<?php echo $this->session->flashdata('hasil'); ?>
          <hr>
              <div class="panel-heading">
                  <i class="fa fa-table"></i> 
              </div>
              <!-- /.panel-heading -->
              <div class="panel-body">
                  <?php echo form_open('kolektif/editk');?>
<?php echo form_hidden('idpel',$kolektif[0]->idpel);?>
<table>
	<tr>
		<td>ID Pelanggan</td>
		<td><?php echo form_input('idpel',$kolektif[0]->idpel);?></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><?php echo form_input('nama',$kolektif[0]->nama);?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><?php echo form_input('alamat',$kolektif[0]->alamat);?></td>
	</tr>
	<tr>
		<td>Tarif</td>
		<td><?php echo form_input('tarif',$kolektif[0]->tarif);?></td>
	</tr>
	<tr>
		<td>Daya</td>
		<td><?php echo form_input('daya',$kolektif[0]->daya);?></td>
	</tr>
	<tr>
		<td>Jumlah</td>
		<td><?php echo form_input('jml',$kolektif[0]->jml);?></td>
	</tr>
	<tr>
		<td>Tanggal Permohonan Surat</td>
		<td><?php echo form_input('tgl_ps',$kolektif[0]->tgl_ps);?></td>
	</tr>
	<tr>
		<td>Kebutuhan Perluasan Material</td>
		<td><?php echo form_input('kpm',$kolektif[0]->kpm);?></td>
	</tr>
	<tr>
		<td>Tanggal Bayar</td>
		<td><?php echo form_input('tgl_byr',$kolektif[0]->tgl_byr);?></td>
	</tr>
	<tr>
		<td>Tanggal Kirim UP3</td>
		<td><?php echo form_input('tgl_krm_up3',$kolektif[0]->tgl_krm_up3);?></td>
	</tr>
	<tr>
		<td>Progress</td>
		<td><?php echo form_input('progress',$kolektif[0]->progress);?></td>
	</tr>
	<tr>
		<td>Tanggal Survey</td>
		<td><input type="date"<?php echo form_input('tgl_survey',$kolektif[0]->tgl_survey);?></td>
	</tr>
	<tr>
		<td>Tanggal PDL</td>
		<td><?php echo form_input('tgl_pdl',$kolektif[0]->tgl_pdl);?></td>
	</tr>
	<tr>
		<td colspan="2">
			<?php echo form_submit('submit','Simpan');?>
			<?php echo anchor('kolektif','Kembali');?></td></tr>
</table>
<?php echo form_close(); ?>
                  <!-- /.table-responsive -->
              </div>
              <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
      </div>
      <!-- /.col-lg-12 -->
  </div>
 </section>
 <footer> 
 <img  src="<?php echo base_url(); ?>assets/img/footer.png" height="80">
 </footer>
 </div>
</body>
</html>


