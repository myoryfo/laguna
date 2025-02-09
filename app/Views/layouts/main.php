<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>
    <!-- Custom icon page -->
    <link rel="icon sekolah" href="<?= base_url(); ?>assets/img/iconS.png">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
    <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/stylesheet.css" rel="stylesheet">

    <!-- DataTable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.bootstrap5.min.css" />

</head>

<body id="page-top">




    <!-- Page Wrapper -->

    <div id="wrapper">


        <!-- Modal Navbar -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('your_route'); ?>" method="post">
                            <div class="row g-3">
                                <!-- First Column -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="firstName" class="form-label">Isi Barang</label>
                                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Masukkan Ket Isi Barang">
                                    </div>
                                    <div class="mb-3">
                                        <label for="namaPenerima" class="form-label">Nama Penerima</label>
                                        <input type="text" class="form-control" id="namaPenerima" name="namaPenerima" placeholder="Masukkan Nama Penerima">
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamatPenerima" class="form-label">Alamat Penerima</label>
                                        <input type="text" class="form-control" id="alamatPenerima" name="alamatPenerima" placeholder="Masukkan Alamat Penerima">
                                    </div>
                                    <div class="mb-3">
                                        <label for="noTlpPenerima" class="form-label">Nomor Telepon Penerima</label>
                                        <input type="text" class="form-control" id="noTlpPenerima" name="noTlpPenerima" placeholder="Masukan No Telepon Penerima">
                                    </div>
                                </div>

                                <!-- Second Column -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="kotaTujuan" class="form-label">Kota Tujuan</label>
                                        <div class="input-group">
                                            <select class="form-control" id="kotaTujuan" name="kotaTujuan">
                                                <option value="">Pilih Kota Tujuan</option>
                                                <option value="Parepare">Parepare</option>
                                                <option value="Pinrang">Pinrang</option>
                                                <option value="Barru">Barru</option>
                                                <option value="Pangkep">Pangkep</option>
                                                <option value="Sengkang">Sengkang</option>
                                            </select>
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fas fa-caret-down"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="namaPengirim" class="form-label">Nama Pengirim</label>
                                        <input type="text" class="form-control" id="namaPengirim" name="namaPengirim" placeholder="Masukkan Nama Pengirim">
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamatPengirim" class="form-label">Alamat Pengirim</label>
                                        <input type="text" class="form-control" id="alamatPengirim" name="alamatPengirim" placeholder="Masukan Nama Pengirim">
                                    </div>
                                    <div class="mb-3">
                                        <label for="noTlpPengirim" class="form-label">Nomor Telepon Pengirim</label>
                                        <input type="text" class="form-control" id="noTlpPengirim" name="noTlpPengirim" placeholder="Masukan No Telepon Pengirim">
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <?php if (session()->get('logged_in')): ?>

                <div class="alert alert-success" role="alert" id="login-alert">
                    You are logged in!
                </div>
            <?php endif; ?>

        </div>


        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
                <div class="sidebar-brand-icon logo">
                    <img src="<?= base_url('assets/img/iconS.png'); ?>">
                </div>
                <div class="sidebar-brand-text mx-3" style="text-transform:uppercase">LAGUNA <?php echo session()->get('lokasi_name'); ?></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Navbar Barang -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-list-alt"></i>
                    <span>Barang</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('dashboard'); ?>">List Entry</a>
                        <a class="collapse-item" href="<?= base_url('dashboard'); ?>" data-toggle="modal" data-target="#exampleModal">Tambah Entry</a>
                        <a class="collapse-item" href="<?= base_url('daftar/delivery'); ?>">List Delivery</a>
                        <a class="collapse-item" href="<?= base_url('daftar/delivery'); ?>">Tambah Delivery</a>
                        <a class="collapse-item" href="<?= base_url('daftar/delivery'); ?>">On Delivery Departour</a>
                        <a class="collapse-item" href="<?= base_url('daftar/delivery'); ?>">On Delivery Arrived</a>
                    </div>
                </div>
            </li>
            <!-- Navbar Kurir -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities2" aria-expanded="true" aria-controls="collapseUtilities2">
                    <i class="fas fa-list-alt"></i>
                    <span>Kurir</span>
                </a>
                <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('daftar/tambah'); ?>">List Barang Kurir</a>
                        <a class="collapse-item" href="<?= base_url('daftar/delivery'); ?>">Tambah Barang Kurir</a>
                        <a class="collapse-item" href="<?= base_url('daftar/delivery'); ?>">List Barang</a>
                    </div>
                </div>
            </li>
            <!-- Navbar User Management -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities3" aria-expanded="true" aria-controls="collapseUtilities3">
                    <i class="fas fa-list-alt"></i>
                    <span>User Management</span>
                </a>
                <div id="collapseUtilities3" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('daftar/tambah'); ?>">List User</a>
                        <a class="collapse-item" href="<?= base_url('daftar/delivery'); ?>">Tambah User</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Profile</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>logout</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->


        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Log Out</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Tekan Ya jika ingin Log Out!.</div>
                    <div class="modal-footer">

                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                        <a class="btn btn-primary" href="/logout">Ya</a>

                    </div>
                </div>
            </div>
        </div>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= session()->get('name'); ?></span>
                                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/default.jpg'); ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                    <?php
                    if (isset($_POST['logout'])) {
                        session_destroy();
                        header("Location: " . base_url('login'));
                        exit();
                    }
                    ?>

                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <?= $this->renderSection('content') ?>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2019</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
        <!-- End of Page Wrapper -->

    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/script.js"></script>

    <!-- DataTable -->
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap5.js"></script>



    <script>
        setTimeout(function() {
            var alert = document.getElementById('login-alert');
            if (alert) {
                alert.style.transition = 'opacity 1s ease-out';
                alert.style.opacity = '0';
                setTimeout(function() {
                    alert.style.display = 'none';
                }, 500);
            }
        }, 1000);
    </script>

</body>

</html>