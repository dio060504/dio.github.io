<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Admin - Edit data Glosarium</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/dance-dancing-baby.gif">

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

                    <li class="dropdown d-none d-lg-block">
                        <a class="nav-link dropdown-toggle mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                           
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           

                            <!-- item-->
                            

                        </div>
                    </li>

        
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                           
                           
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                            <!-- item-->
                            

                           
                            </div>

                           

                    <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/dance-dancing-baby.gif" alt="user-image" class="rounded-circle">
                            <span class="ml-1">Aldi<i class="mdi mdi-chevron-down"></i> </span>
                            </a>    
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                            <div class="logout">
                                <h6><a href="logout.html">LOGOUT!!</a></h6>
                            </div>
                            </div>

                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="edit_data_glosarium.php" class="logo text-center">
                        <span class="logo-lg">
                            <img src="assets/images/favicon.ico" alt="" height="70" style="border-radius: 50%;">
                            <!-- <span class="logo-lg-text-light">UBold</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">U</span> -->
                            <img src="assets/images/logo-sm.png" alt="" height="28">
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

                            <li class="menu-title">Navigation</li>

                            <li>
                                <a href="dashboard.php">
                                    <i class="fe-airplay"></i>
                                    
                                    <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-briefcase"></i>
                                    <span> Data Mahasiswa </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="">Data Admin</a></li>
                                    <li><a href="ui-cards.html">Cari</a></li>
                                    
                                </ul>
                            </li>

                            <li>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="icons-materialdesign.html">Material Design</a></li>
                                    <li><a href="icons-dripicons.html">Dripicons</a></li>
                                    <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                    <li><a href="icons-feather.html">Feather Icons</a></li>
                                </ul>
                            </li>

                            <li>
                              
                                </ul>
                            </li>
                          
                        </ul>

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
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Edit Data</a></li>
                                            <li class="breadcrumb-item active">Glosarium</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Edit Data Glosarium</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title">Edit Data Glosarium</h4>
                                    <p class="sub-header">
                                        Silahkan Tambah data yang valid ! <code>Terima kasih</code>
                                    </p>


                                    <?php
                                    include "koneksi.php";
                                    
                                    $id = $_GET['id'];

                                    $query = mysqli_query($conn, "SELECT * FROM tabel_data_kpi WHERE id_admin='$id'") or die (mysqli_error($conn));
                                    $data = mysqli_fetch_assoc($query);
                                    ?>

                                    <div class="row">
                                        <div class="col-12">
                                            <div>
                                                <form class="form-horizontal" role="form" method="POST" action="proses_update_data.php" enctype="multipart/form-data">

                                                    <input type="hidden" name="id" value="<?php echo $data['id_admin'];?>">

                                                    <div class="form-group row" >
                                                        <label class="col-2 col-form-label">Input Kode : </label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="kode" value="<?php echo $data['kode']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row" >
                                                        <label class="col-2 col-form-label">Input Nama Bahan : </label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="nama_bahan" value="<?php echo $data['nama_bahan']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row" >
                                                        <label class="col-2 col-form-label">Input Sumber : </label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="sumber" value="<?php echo $data['sumber']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row" >
                                                        <label class="col-2 col-form-label">Input Air(g) : </label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="air" value="<?php echo $data['air']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row" >
                                                        <label class="col-2 col-form-label">Input Energi(kal) : </label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="energi" value="<?php echo $data['energi']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row" >
                                                        <label class="col-2 col-form-label">Input Protein(g) : </label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="protein" value="<?php echo $data['protein']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row" >
                                                        <label class="col-2 col-form-label">Input Lemak(g) : </label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="lemak" value="<?php echo $data['lemak']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row" >
                                                        <label class="col-2 col-form-label">Input Kh(g) : </label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="kh" value="<?php echo $data['kh']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row" >
                                                        <label class="col-2 col-form-label">Input Serat(g) : </label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="serat" value="<?php echo $data['serat']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row" >
                                                        <label class="col-2 col-form-label">Input Abu(g): </label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="abu" value="<?php echo $data['abu']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row" >
                                                        <label class="col-2 col-form-label">Input Kalsium(mg) : </label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="kalsium" value="<?php echo $data['kalsium']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row" >
                                                        <label class="col-2 col-form-label">Input Fosfor(mg) : </label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="fosfor" value="<?php echo $data['fosfor']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row" >
                                                        <label class="col-2 col-form-label">Input Besi(mg) : </label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="besi" value="<?php echo $data['besi']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row" >
                                                        <label class="col-2 col-form-label">Input Natrium(mg) : </label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="natrium" value="<?php echo $data['natrium']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row" >
                                                        <label class="col-2 col-form-label">Input Kalium(mg) : </label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="kalium" value="<?php echo $data['kalium']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row" >
                                                        <label class="col-2 col-form-label">Input Tembaga(mg) : </label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="tembaga" value="<?php echo $data['tembaga']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row" >
                                                        <label class="col-2 col-form-label">Input Seng(mg) : </label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="seng" value="<?php echo $data['seng']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row" >
                                                        <label class="col-2 col-form-label">Input Retinol(mcg) : </label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="retinol" value="<?php echo $data['retinol']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row" >
                                                        <label class="col-2 col-form-label">Input B-Kar(mcg) : </label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="b_kar" value="<?php echo $data['b_kar']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row" >
                                                        <label class="col-2 col-form-label">Input Kar-Total(mcg) : </label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="kar_total" value="<?php echo $data['kar_total']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row" >
                                                        <label class="col-2 col-form-label">Input Thiamin(mg) : </label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="thiamin" value="<?php echo $data['thiamin']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row" >
                                                        <label class="col-2 col-form-label">Input Riboflavin(mg) : </label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="riboflavin" value="<?php echo $data['riboflavin']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row" >
                                                        <label class="col-2 col-form-label">Input Niasin(mg) : </label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="niasin" value="<?php echo $data['niasin']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row" >
                                                        <label class="col-2 col-form-label">Input Vit-C(mg) : </label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="vit_c" value="<?php echo $data['vit_c']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row" >
                                                        <label class="col-2 col-form-label">Input BDD(%) : </label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="bdd" value="<?php echo $data['bdd']; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="button-list f-flex justify content-end">
                                                        <button type="submit" class="btn btn-primary waves-light waves-effect width-md">Simpan</button>
                                                    </div>
                                                
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end row -->

                                </div> <!-- end card-box -->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end container-fluid -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                2024 &copy; Aplikasi Made by <a href="https://www.instagram.com/diokiasta_?igsh=NjVmdXFoc3A3NTVu"></a>
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

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close"></i>
                </a>
                <h5 class="m-0 text-white">Settings</h5>
            </div>
            <div class="slimscroll-menu">
                <hr class="mt-0">
                <h5 class="pl-3">Basic Settings</h5>
                <hr class="mb-0" />
    

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