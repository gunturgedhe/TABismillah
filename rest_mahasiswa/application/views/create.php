<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/logo1.png">
  <title>AdminPelaporanPMW</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
    <img src="../../assets/img/logo1.png" alt="logoBrand" id="logoBrand" width="70" height="70">
    </div>
    <div id="page-wrapper">
        <div class="col-lg-6">
            <h1>Tambah Data Dosen</h1>
        </div>
    </div>
    <!-- <ul class="nav navbar-nav">      
      <li><a href="<?php echo base_url().'index.php/dosen' ?>">DOSEN</a></li>
      <li><a href="<?php echo base_url().'index.php/mahasiswa' ?>">MAHASISWA</a></li>
      <li><a href="<?php echo base_url().'index.php/laporan' ?>">LAPORAN</a></li>
    </ul> -->
  </div>
</nav>

 <section>
 
  <!-- /.row -->
  <div class="row">
      <div class="col-lg-6">
      	<?php echo $this->session->flashdata('hasil'); ?>
              <!-- /.panel-heading -->
              <div class="panel-body">
                  <?php echo form_open('dosen/create');?>
  <div class="container">
   <div class="col-lg-10">
<table>
  <tr>
    <td>Kode Dosen Pembimbing</td>
    <td><?php echo form_input('kddospem');?></td>
  </tr>
	<tr>
		<td>Nama Dosen Pembimbing</td>
		<td><?php echo form_input('nmdospem');?></td>
	</tr>
	<tr>
		<td colspan="2">
			<?php echo form_submit('submit','Simpan');?>
			<?php echo anchor('dosen','Kembali');?></td></tr>
</table>
<?php echo form_close(); ?>

                  <!-- /.table-responsive -->
              </div>
              <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
      </div>
      <!-- /.col-lg-12 -->
 </section>
 <img  src="<?php echo base_url(); ?>assets/img/footer.png" height="80">
 </div>
</body>
</html>


