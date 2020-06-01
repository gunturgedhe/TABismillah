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
    <img src="../assets/img/logo1.png" alt="logoBrand" id="logoBrand" width="70" height="70">
    </div>
    <ul class="nav navbar-nav">      
      <li><a href="<?php echo base_url().'index.php/dosen' ?>">DOSEN</a></li>
      <li><a href="<?php echo base_url().'index.php/mahasiswa' ?>">MAHASISWA</a></li>
      <li><a href="<?php echo base_url().'index.php/laporan' ?>">LAPORAN</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <li><a  href="http://localhost/PLN/login/index.php/login"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<div class="navbar-form">
<?php echo form_open('search/search')?>
<input type="text" name="keyword" id="keyword" class="form-control"
 placeholder="NIM / Nama">
 <button type="submit" class="btn btn-info">Cari</button>

<?php echo form_close()?>

<!-- Table -->
<div class="table-responsive">
    <table class="table table-bordered">
 
  <!-- /.row -->
  <div class="row">
      <div class="col-lg-6">
      	<?php echo $this->session->flashdata('hasil'); ?>
 
          <h1>Data Mahasiswa PMW</h1>
      
          <a class="btn btn-primary" href="<?php echo base_url('index.php/ge_pb/create') ?>"><i class="fa fa file"></i>Create</a>
          <!-- <a class="btn btn-danger" href="<?php echo base_url('index.php/ge_pb/print') ?>"><i class="fa fa file"></i>Print</a> -->
          <!-- <a class="btn btn-success" href="<?php echo base_url('index.php/ge_pb/pdf') ?>"><i class="fa fa file"></i>Export To PDF</a> -->
          <!-- <a class="btn btn-success" href="<?php echo base_url('index.php/ge_pb/export') ?>"><i class="fa fa file"></i>Export To Excel</a> -->
                  <table width="150%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                          <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>No. HP</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Jurusan</th>
                            <th>Program Studi</th>
                            <th>Kode Dosen Pembimbing</th>
                            <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php
                        foreach ($mahasiswa as $m){
                          echo "<tr>
                          <td>$m->nim</td>
                          <td>$m->nama</td>
                          <td>$m->no_hp</td>
                          <td>$m->username</td>
                          <td>$m->password</td>
                          <td>$m->jurusan</td>
                          <td>$m->prodi</td>                                
                          <td>$m->kddospem</td>
                            <td>".anchor('mahasiswa/edit/'.$m->nim,'Edit')."
                            ".anchor('mahasiswa/delete/'.$m->nim,'Delete')."</td>
                          </tr>";                                  }
                        ?>
                      </tbody>
                  </table>
                  <!-- /.table-responsive -->
              </div>
              <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
      </div>
      <!-- /.col-lg-12 -->
  </div>
 </section>
 </div>
 <footer class = "footer-area" id = "kontak">
 <div class = "container">
  <div class = "row justify-content-between">
    <div class = "col-sm-6 col-md-4 col-xl-3">
      <div class = "single-footer-widget footer_1">
        <a href="#Beranda">
        <img src="http://pmw.etupolinema.org/assets/img/logo1.png" alt="img"></a>
        <p>Enterpreneur Trining Unit</p>
        <p>Politeknik Negeri Malang</p>
      </div>
    </div>
    <div class = "col-sm-6 col-md-4 col-xl-4">
    <div class = "single-footer-widget footer_2">
        <h4>Sosial Media</h4>
        <p>Stay updated with our latest trends Seed heaven so said place winged over given forth fruit.</p>
        <p>Politeknik Negeri Malang</p>
      </div>
    </div>
    <div class = "col-xl-3 col-sm-6 col-md-4">
      <div class = "single-footer-widget footer_2">
        <h4>Kontak</h4>
        <div class= "contact_info">
          <p><span>Alamat : </span>Gedung AX (Kantin) Lt.3</p>
          <p><span>Telepon : </span>+2 36 265 (8060)</p>
          <p><span>Email : etupolinema@gmail.com</span></p>
        </div>
      </div>
    </div>    
  </div>
 </div>
 </footer>
</body>
</html>


  