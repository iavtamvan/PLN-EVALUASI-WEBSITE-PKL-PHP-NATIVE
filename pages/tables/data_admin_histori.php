<?php
session_start();
include '../api/config.php';
$username = "". $_SESSION["username"];
$idUser = "". $_SESSION["id_user"];
if (!$username) {
  header('Location: ../examples/500.html');
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PLN Evaluasi | DataTables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3" hidden>
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto" hidden>
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index_admin.php" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">PLN Evaluasi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo "".$username?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../index_admin.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home Admin</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview" hidden>
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/edit_komentar_admin_pak.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/edit_komentar_admin_user.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../pages/tables/data_pak.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PAK</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../pages/tables/data_lab.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>LAB</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../pages/tables/data_jar.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>JAR</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../pages/tables/data_pmk.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PMK</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../pages/tables/data_admin_histori.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Histori</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="../api/logout.php" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data JAR</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Histori</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
          </div>
          <!-- /.card -->

          <div class="card">
<!--            <div class="card-header">-->
<!--              <h3 class="card-title">DataTable with default features</h3>-->
<!--            </div>-->
            <!-- /.card-header -->

            <div class="card-body">
              <div class="form-group">
                <label>Cari Berdasarkan Tanggal</label>
                <form action="data_admin_histori.php" method="post">
                <select name="SUDAH" class="form-control">
                  <option>Pilih</option>
                  <?php
                  $sqlSelectTanggal = mysqli_query($db, "SELECT DISTINCT SUDAH FROM pln_evaluasi;");
                  $ambilTgl = mysqli_fetch_assoc($sql);
                  $tglSudah = "".$ambilTgl['SUDAH'];

                  while ($ambilArray = mysqli_fetch_array($sqlSelectTanggal)){
                    echo "<option name='SUDAH'>".$ambilArray['SUDAH']."</option>";
                  }

                  ?>


<!--                  <option>option 2</option>-->
<!--                  <option>option 3</option>-->
<!--                  <option>option 4</option>-->
<!--                  <option>option 5</option>-->
                </select>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Cari</button>
                </div>
                </form>
                <a href="data_admin_histori.php"> <button type="submit" class="btn btn-primary ">Tampilkan Semua</button></a>

                <p>
                  <form action="../api/data_export.php" method="post" hidden>
                  <input name="SUDAH" value="<?php echo ''.$tglSudah?>"/>
                  <button class="btn btn-dark">Export Data ke Excel</button>
                </form>
                </p>


                <form action="../api/data_export.php" method="post">
                  <select name="SUDAH" class="form-control">
                    <option class="form-control">Pilih Tanggal Export</option>
                    <?php
                    $sqlSelectTanggal = mysqli_query($db, "SELECT DISTINCT SUDAH FROM pln_evaluasi;");
                    $ambilTgl = mysqli_fetch_assoc($sql);
                    $tglSudah = "".$ambilTgl['SUDAH'];

                    while ($ambilArray = mysqli_fetch_array($sqlSelectTanggal)){
                      echo "<option name='SUDAH'>".$ambilArray['SUDAH']."</option>";
                    }

                    ?>
                  </select>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Excel</button>
                  </div>
                </form>


              </div>
<!--              --><?php
//              //memasukkan data dari file data.php
//              include('../api/data_export.php');
//              ?>



              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Komentar Tebuka</th>
                  <th>PIC</th>
                  <th>Tindak Lanjut</th>
                  <th>Sudah</th>
                  <th>In Progress</th>
                  <th>Belum</th>
                  <th>Link Foto</th>
<!--                  <th>Action</th>-->
                </tr>
                </thead>
                <tbody>
                <?php
                include "../api/config.php";
                error_reporting(0);
                if ($_POST) {

                  $tanggal = $_POST['SUDAH'];
                  $sqlViewByTanggal = mysqli_query($db, "Select * from pln_evaluasi where SUDAH='$tanggal'");

                  while ($ambil = mysqli_fetch_array($sqlViewByTanggal)){
                    echo "<tr>";
                    echo "<td>".$ambil['KOMENTAR_TERBUKA']."</td>";
                    echo "<td>".$ambil['PIC']."</td>";
                    echo "<td>".$ambil['TINDAK_LANJUT']."</td>";
                    echo "<td>".$ambil['SUDAH']."</td>";
                    echo "<td>".$ambil['IN_PROGRESS']."</td>";
                    echo "<td>".$ambil['BELUM']."</td>";
                    echo "<td>";
//                  echo "<a href='../../api/telkom_apps/controller/delete_user.php?id_user=" . $ambil['id_user'] . "'>Hapus Teknisi | </a>";
                  echo "<a href='../api/file/" . $ambil['LINK_FOTO'] . "'>Download Files</a>";
//                  echo "<a href='../../api/telkom_apps/controller/update_api.php?pindah=updateUserAktif&id_user=" . $ambil['id_user'] . "'>Aktifkan</a>";
                  echo "</td>";
//                    echo "<td>";
//                  echo "<a href='../../api/telkom_apps/controller/delete_user.php?id_user=" . $ambil['id_user'] . "'>Hapus Teknisi | </a>";
//                    echo "<a href='../forms/edit_komentar_admin_jar?ID_EVALUASI=" . $ambil['ID_EVALUASI'] . "'>Edit Komentar</a>";
//                  echo "<a href='../../api/telkom_apps/controller/update_api.php?pindah=updateUserAktif&id_user=" . $ambil['id_user'] . "'>Aktifkan</a>";
//                    echo "</td>";



                    echo "<tr>";
                  }

                }
                else{
                  $sql = mysqli_query($db, "select * from pln_evaluasi");

                  while ($ambil = mysqli_fetch_array($sql)){
                    echo "<tr>";
                    echo "<td>".$ambil['KOMENTAR_TERBUKA']."</td>";
                    echo "<td>".$ambil['PIC']."</td>";
                    echo "<td>".$ambil['TINDAK_LANJUT']."</td>";
                    echo "<td>".$ambil['SUDAH']."</td>";
                    echo "<td>".$ambil['IN_PROGRESS']."</td>";
                    echo "<td>".$ambil['BELUM']."</td>";
                    echo "<td>";
//                  echo "<a href='../../api/telkom_apps/controller/delete_user.php?id_user=" . $ambil['id_user'] . "'>Hapus Teknisi | </a>";
                  echo "<a href='../api/file/" . $ambil['LINK_FOTO'] . "'>Download Files</a>";
//                  echo "<a href='../../api/telkom_apps/controller/update_api.php?pindah=updateUserAktif&id_user=" . $ambil['id_user'] . "'>Aktifkan</a>";
                  echo "</td>";
//                    echo "<td>";
//                  echo "<a href='../../api/telkom_apps/controller/delete_user.php?id_user=" . $ambil['id_user'] . "'>Hapus Teknisi | </a>";
//                    echo "<a href='../forms/edit_komentar_admin_jar?ID_EVALUASI=" . $ambil['ID_EVALUASI'] . "'>Edit Komentar</a>";
//                  echo "<a href='../../api/telkom_apps/controller/update_api.php?pindah=updateUserAktif&id_user=" . $ambil['id_user'] . "'>Aktifkan</a>";
//                    echo "</td>";



                    echo "<tr>";
                  }

                }



                ?>
                </tbody>
                
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.1.1 build 1774
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://TIM IT PLN">TIM IT PLN</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap4.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
