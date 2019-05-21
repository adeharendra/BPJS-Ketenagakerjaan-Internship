<!DOCTYPE html>
<html lang="en">

<?php 
    if($this->session->userdata('user_id')){
   
 ?>

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- icon -->
    <link rel="icon" href="<?= base_url() ?>/assets/images/img/logo_crop.png" type="image/gif"> 

    <!-- Title Page-->
    <title>Program Pengarsipan Berkas Jaminan dan Voucher</title>

    <!-- Fontfaces CSS-->
    <link href="<?= base_url();?>assets/dashboard-css/font-face.css" rel="stylesheet" media="all">
    <link href="<?= base_url();?>assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url();?>assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url();?>assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?= base_url();?>assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?= base_url();?>assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url();?>assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?= base_url();?>assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url();?>assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?= base_url();?>assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url();?>assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url();?>assets/dashboard-css/theme.css" rel="stylesheet" media="all">

    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.css')?>" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/css/sb-admin.css')?>" rel="stylesheet">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <!-- <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="dashboard">
                            <img src="assets/images/icon/BPJS.png" alt="BPJS Ketenagakerjaan" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header> -->
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="<?= base_url();?>dashboard">
                    <img src="<?= base_url();?>assets/images/icon/BPJS.png" alt="BPJS Ketenagakerjaan" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                    <?php if($this->session->userdata('akses')=='1'):?>
                        <li>
                            <a href="<?= base_url();?>dashboard">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
						<li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                            <i class="far fa-file-text"></i>Pengarsipan Berkas</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
								<li>
                                    <a href="<?= base_url();?>dashboard/lihatarsip">Lihat Arsip</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= base_url();?>dashboard/daftarpeminjam">
                                <i class="fas fa-envelope"></i>Daftar Pinjaman</a>
                        </li>
                        <li>
                            <a href="<?= base_url();?>dashboard/report">
                                <i class="fas fa-book"></i>Report</a>
                        </li>
						<li>
                            <a href="<?= base_url();?>dashboard/akun">
                                <i class="fas fa-user"></i>Akun</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                            <i class="far fa-list-alt"></i>Management User</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="<?= base_url();?>akun/buatakun">Buat User</a>
                                </li>
								<li>
                                    <a href="<?= base_url();?>akun/lihatakun">Lihat User</a>
                                </li>
                            </ul>
                        </li>
						<li>
                            <a href="<?= base_url();?>dashboard/panduan">
                                <i class="fas fa-question-circle"></i>Panduan Penggunaan</a>
                        </li>
                    <?php elseif($this->session->userdata('akses')=='2'):?>
                        <li>
                            <a href="<?= base_url();?>dashboard">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
						<li class="has-sub">
                            <a class="js-arrow" href="#">
                            <i class="far fa-file-text"></i>Pengarsipan Berkas</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="<?= base_url();?>dashboard/arsipbaru">Buat Baru</a>
                                </li>
								<li>
                                    <a href="<?= base_url();?>dashboard/lihatarsip">Lihat Arsip</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                            <i class="far fas fa-clone"></i>Peminjaman</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="<?= base_url();?>peminjaman/peminjaman_user">Pinjam Arsip</a>
                                </li>
								<li>
                                    <a href="<?= base_url();?>peminjaman/mypeminjam">Peminjaman Saya</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= base_url();?>dashboard/report">
                                <i class="fas fa-book"></i>Report</a>
                        </li>
						<li>
                            <a href="<?= base_url();?>dashboard/akun">
                                <i class="fas fa-user"></i>Akun</a>
                        </li>
                        <li>
                            <a href="<?= base_url();?>dashboard/panduan">
                                <i class="fas fa-question-circle"></i>Panduan Penggunaan</a>
                        </li>
                    <?php endif;?>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
							<form class="form-header" action="" method="POST">
                                <h3 style="color:#0B8E31">PROGRAM PENGARSIPAN BERKAS JAMINAN DAN VOUCHER</h3>
                            </form>
                            <div class="header-button">
                            
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                        <img src="<?php echo base_url('assets/images/icon/fotouser/'.$this->session->userdata('foto_user'))?>"/>
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?= $this->session->userdata("nama_user") ?>&nbsp;</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="<?php echo base_url('assets/images/icon/fotouser/'.$this->session->userdata('foto_user'))?>"/>
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="<?php base_url();?>dashboard/akun"><?= $this->session->userdata("user_name") ?></a>
                                                    </h5>
                                                    <span class="email"><?= $this->session->userdata("email")?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="<?= base_url();?>dashboard/logout">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
            <!-- MAIN CONTENCT -->
            <?php $this->load->view($content); ?>
            <!-- END CONTENT -->
            <!-- MAIN FOOTER -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>
										Copyright &copy; 2019 All rights reserved.<br>UNIVERSITAS DIAN NUSWANTORO&nbsp;&nbsp;|&nbsp;&nbsp;BPJS Ketenagakerjaan<br>
										<a href="<?= base_url() ?>dashboard/about" target="_blank">Tentang Aplikasi Program Pengarsipan Berkas Jaminan dan Voucher</a>
									</p>
                                </div>
                            </div>
                        </div>
            <!-- END FOOTER -->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?= base_url();?>assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?= base_url();?>assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?= base_url();?>assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?= base_url();?>assets/vendor/slick/slick.min.js">
    </script>
    <script src="<?= base_url();?>assets/vendor/wow/wow.min.js"></script>
    <script src="<?= base_url();?>assets/vendor/animsition/animsition.min.js"></script>
    <script src="<?= base_url();?>assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?= base_url();?>assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?= base_url();?>assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?= base_url();?>assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= base_url();?>assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?= base_url();?>assets/js/main.js"></script>

    <!-- Bootstrap core JavaScript-->
   <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.js')?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/js/sb-admin.min.js')?>"></script>

    <!-- Demo scripts for this page-->
    <script src="<?php echo base_url('assets/js/demo/datatables-demo.js')?>"></script>
    <script src="<?php echo base_url('assets/js/demo/chart-area-demo.js')?>"></script>

    


</body>

</html>
<?php }else{

$this->load->view('login/login');
} ?>
<!-- end document-->
