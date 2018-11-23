<?php
error_reporting(0);
  include('../koneksi/koneksi.php');
  session_start();

  if (empty($_SESSION ["akses"])) {
    header("location: ../user/index.php");

  
  }else{
    include('../koneksi/koneksi.php');
  }

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Data Wisata</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" type="text/css" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.js">
  <!-- jQuery 3 -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SIP</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="img/user2.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php
                if ($_SESSION['akses']=='Admin'){
                  echo "Admin";
                }else{
                  echo"Anda Admin?";
                }
                ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="img/user2.png" class="img-circle" alt="User Image">

                <p>
                 <?php
                if ($_SESSION['akses']=='Admin'){
                  echo "Admin";
                }else{
                  echo"Anda Admin?";
                }
                ?>
                  <small></small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="../koneksi/logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="img/user2.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Selamat Datang <?php
                if ($_SESSION['akses']=='Admin'){
                  echo "Admin";
                }else{
                  echo"Anda Admin?";
                }
                ?></p>
          <a href="index.php"><i class="fa fa-circle text-success"></i></a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
     <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="index.php">
            <i class="fa fa-tachometer text-light-blue"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="data_admin.php">
            <i class="fa fa-user"></i> <span>Data Admin</span>
          </a>
        </li>
        <li>
          <a href="data_wisata.php">
            <i class="fa fa-th"></i> <span>Data Wisata</span>
          </a>
        </li>
        <li>
          <a href="data_kategori.php">
            <i class="fa fa-pie-chart"></i> <span>Data Kategori</span>
          </a>
        </li>
        <li>
          <a href="data_biro_perjalanan.php">
            <i class="fa fa-table"></i> <span>Data Biro Perjalanan</span>
          </a>
        </li>
        <li>
          <a href="data_berita.php">
            <i class="fa fa-folder"></i> <span>Data Berita</span>
          </a>
        </li>
        <li>
          <a href="data_kontak.php">
            <i class="fa fa-envelope"></i> <span>Data Kontak</span>
          </a>
        </li>
        <li>
          <a href="data_bukutamu.php">
            <i class="fa fa-th"></i> <span>Buku Tamu</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Wisata
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Wisata</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
             <div class="box-header">
               <a href="#myModal" data-toggle="modal" class="btn btn-primary"><i class="icon_plus_alt2"></i> Tambah </a>
                        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Form Tambah Wisata</h4>
                      </div>
                      <div class="modal-body">
                        <form role="form" action="proses_tambah_wisata.php" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                            <label>Nama Wisata</label>
                            <input type="text" class="form-control" name="nama_wisata" required>
                          </div>
                          <div class="form-group">
                            <label>Kategori</label>
                            <select type="text" class="form-control" name="id_kategori" required>
                            <option>Choose option</option>
                            <?php 
                            include '../koneksi/koneksi.php';

                            $sql = "SELECT * FROM tb_kategori "; 
                            $result = mysqli_query($con,$sql);

                            while ($data=mysqli_fetch_array($result)) {       
                            ?>  
                            <option value='<?php echo $data['id_kategori']; ?>'>

                            <?php echo $data['kategori'];?>
                            </option>
                            <?php } ?>

                          </select>
                          </div>
                          <!-- <div class="form-group">
                            <label>Peta (Masukan Koordinat Peta)</label>
                            <input type="text" class="form-control" name="peta" required>
                          </div> -->
                          <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea type="text" class="form-control" name="deskripsi" required></textarea>
                          </div>
                          <div class="form-group">
                            <label>Fasilitas</label>
                            <input type="text" class="form-control" name="fasilitas" required>
                          </div>
                          <div class="form-group">
                            <label>Harga Tiket</label>
                            <input type="text" class="form-control" name="tiket" required>
                          </div>
                          <div class="form-group">
                            <label>Latitude</label>
                            <input type="text" class="form-control" name="lat" required>
                          </div>
                          <div class="form-group">
                            <label>Longitude</label>
                            <input type="text" class="form-control" name="long" required>
                          </div>
                          <div class="form-group">
                            <label>Foto 1</label>
                            <input type="file" name="foto[]">
                          </div>
                          <div class="form-group">
                            <label>Foto 2</label>
                            <input type="file" name="foto[]">
                          </div>
                          <div class="form-group">
                            <label>Foto 3</label>
                            <input type="file" name="foto[]">
                          </div>
                          <div class="form-group">
                            <label>Foto 4</label>
                            <input type="file" name="foto[]">
                          </div>
						 
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-responsive datat">
                <thead>
                <tr>
                  <th>AKSI</th>
                  <th>NO</th>
                  <th>NAMA WISATA</th>
                  <!-- <th>PETA</th> -->
                  <th>DESKRIPSI</th>
                  <th>GAMBAR</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                include '../koneksi/koneksi.php';
                error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

                $sql = "SELECT * FROM tb_wisata"; 
                $no=0;
                $result = mysqli_query($con,$sql);

                while ($data=mysqli_fetch_array($result)) {

                    $id_wisata  = $data['id_wisata'];
                    $id_kategori= $data['id_kategori'];
                    $nama_wisata= $data['nama_wisata'];
                    $deskripsi= $data['deskripsi'];
                    $fasilitas = $data['fasilitas'];
                    $tiket = $data['tiket'];
                    $lat = $data['lat'];
                    $long = $data['long'];
                    $foto1= $data['foto1'];
                    $foto2= $data['foto2'];
                    $foto3= $data['foto3'];
                    $foto4= $data['foto4'];
                    $peta= $data['peta'];
                    $no++;
                ?>
                <tr>
                  <td style="width: 100px;"><a href="#edit<?php echo $data['id_wisata'] ?>" data-toggle="modal" class="btn btn-outline-success btn-sm"><li class="fa fa-pencil highlight-icon"></li></a>
                  <a href="hapus_wisata.php?id_wisata=<?php echo $data['id_wisata'] ?>" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash-o highlight-icon"></i></a></td>
                  <td style="width: 50px;"><?php echo $no?></td>
                  <td style="width: 200px;"><?php echo $nama_wisata ?></td>
                  <!-- <td><?php echo $peta ?></td> -->
                  <td><?php echo $deskripsi ?></td>
                  <td style="width: 200px;"><img src="../user/img/<?php echo $foto1; ?>" style="max-width: 150px;"><hr><img src="../user/img/<?php echo $foto2; ?>" style="max-width: 150px;"><hr><img src="../user/img/<?php echo $foto3; ?>" style="max-width: 150px;"><hr><img src="../user/img/<?php echo $foto4; ?>" style="max-width: 150px;"></td>

                </tr>
                <!-- Modal -->

                  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit<?php echo $data['id_wisata'] ?>" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Form Edit Wisata</h4>
                        </div>
                        <div class="modal-body">
                          <form role="form" action="proses_edit_wisata.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                            <div class="form-group">
                              <input type="hidden" class="form-control" value="<?php echo $id_wisata ?>" name="id_wisata" readonly>
                            </div>
                            <div class="form-group">
                              <label>Nama Wisata</label>
                              <input type="text" class="form-control" value="<?php echo $nama_wisata ?>" name="nama_wisata" required>
                            </div>
                            <div class="form-group">

                              <label>Kategori</label>
                              <select type="text" class="form-control" name="id_kategori" required>
                              <?php
                                include '../koneksi/koneksi.php';
                                $sql=mysqli_query($con,"SELECT * FROM tb_kategori");
                                while ( $data=mysqli_fetch_array($sql) ) {
                                  if ($data['id_kategori'] == $id_kategori) {
                                    echo "<option value='$data[id_kategori]' selected>$data[kategori]</option>";
                                  } else {
                                    echo "<option value='$data[id_kategori]'>$data[kategori]</option>";
                                  }
                                }                              
                               ?>
                            </select>
                            </div>
                            <!-- <div class="form-group">
                              <label>Peta (Masukan Koordinat Peta)</label>
                              <input type="text" class="form-control" value="<?php echo $peta ?>" name="peta" required>
                            </div> -->
                            <div class="form-group">
                              <label>Deskripsi</label>
                              <textarea type="text" class="form-control" name="deskripsi" required><?php echo $deskripsi ?></textarea>
                            </div>
                            <div class="form-group">
                            <label>Fasilitas</label>
                            <input type="text" class="form-control" name="fasilitas" value="<?php echo $fasilitas ?>" required>
                            </div>
                            <div class="form-group">
                              <label>Harga Tiket</label>
                              <input type="text" class="form-control" name="tiket" value="<?php echo $tiket ?>" required>
                            </div>
                            <div class="form-group">
                              <label>Latitude</label>
                              <input type="text" class="form-control" name="lat" value="<?php echo $lat ?>" required>
                            </div>
                            <div class="form-group">
                              <label>Longitude</label>
                              <input type="text" class="form-control" name="long" value="<?php echo $long ?>" required>
                            </div>
                            <div class="form-group">
                              <label>Foto 1</label>
                              <input type="file" name="fotoo[]">
                            </div>
                            <div class="form-group">
                              <label>Foto 2</label>
                              <input type="file" name="fotoo[]">
                            </div>
                            <div class="form-group">
                              <label>Foto 3</label>
                              <input type="file" name="fotoo[]">
                            </div>
                            <div class="form-group">
                              <label>Foto 4</label>
                              <input type="file" name="fotoo[]">
                            </div>
							<input type="text" class="form-group" value="<?php echo $alamat_kontak ?>" name="alamat_kontak" required>
                          </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
              <?php } ?>
              </tbody>  
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
    <strong>Copyright &copy; 2018<a href="https://adminlte.io"></strong> All rights
    reserved.
  </footer>

<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script>
  $(document).ready(function() {
    $('.datat').dataTable({
              "bPaginate": true,
              "bLengthChange": false,
              "bFilter": true,
              "bInfo": false,
              "bAutoWidth": false,
    });
  });
</script>
</body>
</html>
