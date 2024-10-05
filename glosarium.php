<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Abstack - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- third party css -->
        <link href="assets/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
 
        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/bg-2a.png" alt="user-image" class="rounded-circle">
                            <span class="ml-1">Dio ganteng<i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>
                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.html" class="logo text-center">
                        <span class="favicon.ico">
                            <img src="assets/images/favicon.ico" alt="" height="50">
                            <!-- <span class="logo-lg-text-light">UBold</span> -->
                        </span>
                       
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="fe-menu"></i>
                        </button>
                    </li>
        
                    <li class="d-none d-sm-block">
                        <form class="app-search">
                            <div class="app-search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit">
                                            <i class="fe-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li>

                </ul>
            </div>
            <!-- end Topbar -->

            
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">Dio Ganteng</li>

                            <li>
                                <a href="dashboard.php">
                                    <i class="fe-airplay"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-briefcase"></i>
                                    <span> Data Master </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="data_admin.php">Data Admin</a></li>
                                    <li><a href="#">Cards</a></li>
                                    <li><a href="#">Buttons</a></li>
                                </ul>
                            </li>
                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    
                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title">Tambah Data</h4>
                                    <p class="sub-header">
                                     Silahkan tambah data yang valid ! <code>Terima</code>, <code>Kasih</code>,
                                    </p>

                                    <div class="row">
                                        <div class="col-12">
                                            <div>
                                                <form class="form-horizontal" role="form" method="POST" action="proses_tambah_data.php" enctype="multipart/form-data">
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Input Kode</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"name="kode" placeholder="Masukkan Kode">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Input Nama Bahan</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"name="nama_bahan" placeholder="Masukkan Nama Bahan">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Input Sumber</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"name="sumber" placeholder="Masukkan Sumber">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Input Air(g)</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"name="air" placeholder="Masukkan Air(g)">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Input Energi(kal)</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"name="energi" placeholder="Masukkan Energi(kal)">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Input Protein(g)</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"name="protein" placeholder="Masukkan Protein(g)">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Input Lemak(g)</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"name="lemak" placeholder="Masukkan lemak(g)">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Input Kh(g)</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"name="kh" placeholder="Masukkan kh(g)">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Input Serat(g)</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"name="serat" placeholder="Masukkan Serat(g)">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Input Abu(g)</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"name="abu" placeholder="Masukkan Abu(g)">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Input Kalsium(mg)</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"name="kalsium" placeholder="Masukkan Kalsium(mg)">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Input Fosfor(mg)</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"name="fosfor" placeholder="Masukkan Fosfor(mg)">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Input Besi(mg)</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"name="besi" placeholder="Masukkan Besi(mg)">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Input Natrium(mg)</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"name="natrium" placeholder="Masukkan Natrium(mg)">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Input Kalium(mg)</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"name="kalium" placeholder="Masukkan kalium(mg)">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Input Tembaga(mg)</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"name="tembaga" placeholder="Masukkan Tembaga">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Input Seng(mg)</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"name="seng" placeholder="Masukkan Seng(mg)">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Input Retinol(mcg)</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"name="retinol" placeholder="Masukkan Retinol(mcg)">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Input B-Kar(mcg)</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"name="b_kar" placeholder="Masukkan B-Kar(mcg)">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Input Kar-Total(mcg)</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"name="kar_total" placeholder="Masukkan Kar-Total">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Input Thiamin(mg)</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"name="thiamin" placeholder="Masukkan Thiamin(mg)">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Input Riboflavin(mg)</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"name="riboflavin" placeholder="Masukkan Riboflavin(mg)">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Input Niasin(mg)</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"name="niasin" placeholder="Masukkan Niasin(mg)">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Input Vit-C(mg)</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"name="vit_c" placeholder="Masukkan Vit-C(mg)">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Input BDD</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"name="bdd" placeholder="Masukkan BDD">
                                                        </div>
                                                    </div>
                                                    <div class="button-list f-flex justify content-end">
                                                        <button type="submit" class="btn btn-primary wafes-light waves-effect width-md">Tambahkan</button>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end row -->

                                </div> <!-- end card-box -->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->


                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                2024 &copy; Aplikasi Made by <a href="https://www.instagram.com/aldigultom_20/">Aldi</a>
                            </div>            
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- Required datatable js -->
        <script src="assets/libs/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/libs/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/jszip/jszip.min.js"></script>
        <script src="assets/libs/pdfmake/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/vfs_fonts.js"></script>
        <script src="assets/libs/datatables/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables/buttons.print.min.js"></script>

        <!-- Responsive examples -->
        <script src="assets/libs/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Datatables init -->
        <script src="assets/js/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>
</html>