<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Admin | Dashboard</title>
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
                            <img src="assets/images/favicon.ico" alt="" class="rounded-circle">
                            <span class="ml-1">Dio kiasta<i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-log-out"></i>
                                <a href="logout.html">Logout</a>
                                
                  
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

                            <li class="menu-title">Admin</li>

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
                                    <li><a href="data_admin.php">Data Admin</a></li>
                                    <li><a href="#">Cari</a></li>
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
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Tabel Data</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                                <div class="col-12">
                                    <div class="card-box table-responsive">
                                        <h4 class="header-title"><b>TABEL KOMPOSISI PANGAN INDONESIA</b></h4>
                                        
                                        <div class="button-list d-flex justify-content-end">
                                            <a href="glosarium.php" class="btn btn-danger waves-effect width-md" style=" font-weight:bold;">Tambah Data KPI</a>
                                        </div>
                                        <br>
                    
                                        <table id="datatable" class="table table-bordered  " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th style="background-color: #64717d; color: #fff;" rowspan="2">NO</th>
                                                <th style="background-color: #64717d; color: #fff;" rowspan="2">KODE</th>
                                                <th style="background-color: #64717d; color: #fff;" rowspan="2">NAMA BAHAN</th>
                                                <th style="background-color: #64717d; color: #fff;" rowspan="2">SUMBER</th>
                                                <th style="background-color: #64717d; color: #fff; text-align: center;" colspan="21">KOMPOSISI ZAT GIZI MAKANAN PER 100 GRAM BDD</th>
                                                <th style="background-color: #64717d; color: #fff;" rowspan="2">DBB (%)</th>
                                                <th style="background-color: #64717d; color: #fff;" rowspan="2">AKSI</th>
                                                
                                            </tr>
                                            <tr>
                                                <th style="background-color: #64717d; color: #fff; text-align: center;">AIR(g)</th>
                                                <th style="background-color: #64717d; color: #fff; text-align: center;">ENERGI(kal)</th>
                                                <th style="background-color: #64717d; color: #fff; text-align: center;">PROTEIN(g)</th>
                                                <th style="background-color: #64717d; color: #fff; text-align: center;">LEMAK(g)</th>
                                                <th style="background-color: #64717d; color: #fff; text-align: center;">KH(g)</th>
                                                <th style="background-color: #64717d; color: #fff; text-align: center;">SERAT(g)</th>
                                                <th style="background-color: #64717d; color: #fff; text-align: center;">ABU(g)</th>
                                                <th style="background-color: #64717d; color: #fff; text-align: center;">KALSIUM(mg)</th>
                                                <th style="background-color: #64717d; color: #fff; text-align: center;">FOSFOR(mg)</th>
                                                <th style="background-color: #64717d; color: #fff; text-align: center;">BESI(mg)</th>
                                                <th style="background-color: #64717d; color: #fff; text-align: center;">NATRIUM(mg)</th>
                                                <th style="background-color: #64717d; color: #fff; text-align: center;">KALIUM(mg)</th>
                                                <th style="background-color: #64717d; color: #fff; text-align: center;">TEMBAGA(mg)</th>
                                                <th style="background-color: #64717d; color: #fff; text-align: center;">SENG(mg)</th>
                                                <th style="background-color: #64717d; color: #fff; text-align: center;">RETINOL(mcg)</th>
                                                <th style="background-color: #64717d; color: #fff; text-align: center;">B-KAR(mcg)</th>
                                                <th style="background-color: #64717d; color: #fff; text-align: center;">KAR-TOTAL(mcg)</th>
                                                <th style="background-color: #64717d; color: #fff; text-align: center;">THIAMIN(mg)</th>
                                                <th style="background-color: #64717d; color: #fff; text-align: center;">RIBOFLAVIN(mg)</th>
                                                <th style="background-color: #64717d; color: #fff; text-align: center;">NIASIN(mg)</th>
                                                <th style="background-color: #64717d; color: #fff; text-align: center;">VIT_C(mg)</th>
                                            </tr>
                                            </thead>

                                            <?php
                                            include "koneksi.php";
                                            $query_mysql = mysqli_query($conn, "SELECT * FROM tabel_data_KPI") or die (mysql_error($conn));
                                            $nomor = 1;
                                            ?>

                                            <tbody>
                                                <?php while($data = mysqli_fetch_array($query_mysql)) { ?>
                                            <tr>
                                                <td><?php echo $nomor++; ?></td>
                                                <td style="width: 200px text-align: center;"><?php echo $data['kode']; ?></td>
                                                <td style="width: 200px text-align: center;"><?php echo $data['nama_bahan']; ?></td>
                                                <td style="width: 200px text-align: center;"><?php echo $data['sumber']; ?></td>
                                                <td style="width: 200px text-align: center;"><?php echo $data['air']; ?></td>
                                                <td style="width: 200px text-align: center;"><?php echo $data['energi']; ?></td>
                                                <td style="width: 200px text-align: center;"><?php echo $data['protein']; ?></td>
                                                <td style="width: 200px text-align: center;"><?php echo $data['lemak']; ?></td>
                                                <td style="width: 200px text-align: center;"><?php echo $data['kh']; ?></td>
                                                <td style="width: 200px text-align: center;"><?php echo $data['serat']; ?></td>
                                                <td style="width: 200px text-align: center;"><?php echo $data['abu']; ?></td>
                                                <td style="width: 200px text-align: center;"><?php echo $data['kalsium']; ?></td>
                                                <td style="width: 200px text-align: center;"><?php echo $data['fosfor']; ?></td>
                                                <td style="width: 200px text-align: center;"><?php echo $data['besi']; ?></td>
                                                <td style="width: 200px text-align: center;"><?php echo $data['natrium']; ?></td>
                                                <td style="width: 200px text-align: center;"><?php echo $data['kalium']; ?></td>
                                                <td style="width: 200px text-align: center;"><?php echo $data['tembaga']; ?></td>
                                                <td style="width: 200px text-align: center;"><?php echo $data['seng']; ?></td>
                                                <td style="width: 200px text-align: center;"><?php echo $data['retinol']; ?></td>
                                                <td style="width: 200px text-align: center;"><?php echo $data['b_kar']; ?></td>
                                                <td style="width: 200px text-align: center;"><?php echo $data['kar_total']; ?></td>
                                                <td style="width: 200px text-align: center;"><?php echo $data['thiamin']; ?></td>
                                                <td style="width: 200px text-align: center;"><?php echo $data['riboflavin'];?></td>
                                                <td style="width: 200px text-align: center;"><?php echo $data['niasin']; ?></td>
                                                <td style="width: 200px text-align: center;"><?php echo $data['vit_c']; ?></td>
                                                <td style="width: 200px text-align: center;"><?php echo $data['bdd']; ?></td>
                                                <td class="d-flex justify-content-center">
                                                    <a class="edit btn-md btn waves-light waves-effect"style="margin-right:15px;background-color:blue;" href="edit_glosarium.php?id=<?php echo $data['id_admin'];?>">Edit</a>
                                                    <a class="hapus btn-md btn waves-light waves effect" style="background-color:red;" href="hapus_data_glosarium.php?id=<?php echo $data['id_admin'];?>">Hapus</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end row -->        
                    </div> <!-- end container-fluid -->

                </div> <!-- end content -->

                

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                2024 &copy; Aplikasi Buatan  <a href="https://www.instagram.com/diokiasta_/">Dio kiasta</a>
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