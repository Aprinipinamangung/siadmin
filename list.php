<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>SI Admin</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
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

      <!-- Right navbar links -->
      <ul class="ml-auto navbar-nav">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-user"></i> Arifin Tindi : Admin</a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">Setting Akun</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="mr-2 fas fa-envelope"></i> Edit Profil
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="mr-2 fas fa-users"></i>Ganti Password
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="mr-2 fas fa-file"></i>Logout
            </a>
          </div>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.html" class="brand-link">
        <span class="brand-text font-weight-light">SI <b>Admin</b></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="index.html" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Beranda
                </p>
              </a>
            </li>
            <li class="nav-item ">
              <a href="form.html" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                Forms
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                Tables
              </a>
            </li>
            <li class="nav-item ">
              <a href="card.html" class="nav-link">
                <i class="nav-icon fas fa-address-card"></i>
                Card
              </a>
            </li>
            <li class="nav-header">CONTOH</li>
            <li class="nav-item">
              <a href="list.html" class="nav-link">
                <i class="nav-icon fas fa-university"></i>
                <p>
                  List Data Mahasiswa
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="olah.html" class="nav-link">
                <i class="nav-icon fas fa-user-graduate"></i>
                <p>
                  Olah Data Mahasiswa
                </p>
              </a>
            </li>
            <li class="nav-header">CONTOH MULTI LEVEL</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-circle nav-icon"></i>
                <p>Level 1</p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-circle"></i>
                <p>
                  Level 1
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Level 2</p>
                  </a>
                </li>
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Level 2
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Level 3</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Level 3</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Level 3</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Level 2</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-circle nav-icon"></i>
                <p>Level 1</p>
              </a>
            </li>
            <li class="nav-header">CONTOH WARNA LABELS</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-circle text-danger"></i>
                <p class="text">Bahaya</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>Peringatan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>
                <p>Informatif</p>
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
      <div class="content-header">
        <div class="container-fluid">
          <div class="mb-2 row">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Judul Halaman</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">PNU</a></li>
                <li class="breadcrumb-item active">SI</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="border-0 card-header">
                  <h3 class="card-title">Judul Card</h3>
                  <div class="card-tools">
                    <a href="#" class="btn btn-tool btn-sm">
                      <i class="fas fa-download"></i>
                    </a>
                    <a href="#" class="btn btn-tool btn-sm">
                      <i class="fas fa-bars"></i>
                    </a>
                  </div>
                </div>
                <div class="card-body">
                  <table class="table table-striped table-hover table-valign-middle">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>IPS</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>1905001</td>
                        <td>Lionel Messi</td>
                        <td>
                          <small class="mr-1 text-success"><i class="fas fa-arrow-up"></i>0.51</small>3.51
                        </td>
                        <td>
                          <a href="#" class="text-muted"><i class="fas fa-eye"></i><small>Detail </small></a>
                          <a href="#" class="text-info"><i class="fas fa-edit"></i><small>Edit </small></a>
                          <a href="#" class="text-danger"><i class="fas fa-trash"></i><small>Hapus</small></a>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>1905002</td>
                        <td>Christiano Ronaldo</td>
                        <td>
                          <small class="mr-1 text-danger"><i class="fas fa-arrow-down"></i>0.30</small>3.20
                        </td>
                        <td>
                          <a href="#" class="text-muted"><i class="fas fa-eye"></i><small>Detail </small></a>
                          <a href="#" class="text-info"><i class="fas fa-edit"></i><small>Edit </small></a>
                          <a href="#" class="text-danger"><i class="fas fa-trash"></i><small>Hapus</small></a>
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>1905003</td>
                        <td>Tonny Kroos</td>
                        <td>
                          <small class="mr-1 text-warning"><i class="fas fa-arrows-alt-h"></i>0</small>3.75
                        </td>
                        <td>
                          <a href="#" class="text-muted"><i class="fas fa-eye"></i><small>Detail </small></a>
                          <a href="#" class="text-info"><i class="fas fa-edit"></i><small>Edit </small></a>
                          <a href="#" class="text-danger"><i class="fas fa-trash"></i><small>Hapus</small></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="card-footer">
                  <h5>Data Mahasiswa</h5>
                </div>
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; Arifin Tindi <a href="#">SI Admin</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Versi</b> 1
      </div>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE -->
  <script src="assets/dist/js/adminlte.js"></script>


</body>

</html>