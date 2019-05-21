<html>
<head> 
<title>Program Pengarsipan Berkas Jaminan dan Voucher</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	
	
	<!--Bootsrap 4 CDN-->
	<link href="<?= base_url();?>assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    
    <!--Fontawesome CDN-->
		<link href="<?= base_url();?>assets/dashboard-css/font-face.css" rel="stylesheet" media="all">
    <link href="<?= base_url();?>assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url();?>assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url();?>assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

	<!--Custom styles-->
	<link href="<?= base_url();?>assets/css/styles-home.css" rel="stylesheet" media="all">

	<!-- icon -->
	<link rel="icon" href="<?= base_url() ?>/assets/images/img/logo_crop.png" type="image/gif"> 
	
</head>

<body> 
	<!-- NAVBAR -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light rounded fixed-top">
	  <a class="navbar-brand" href="<?=base_url()?>">
		<img src="<?= base_url() ?>assets/images/logo-bpjs.png" width="200">
	  </a>
	  <ul class="navbar-nav ml-auto text-success">
		<li class="nav-item">
			<a class="nav-link" href="<?=base_url()?>"> <font face="Arial" color="gray"> &nbsp;Beranda </font> </a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#login"> <font face="Arial" color="gray"> &nbsp;Login </font> </a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#tentang"> <font face="Arial" color="gray"> &nbsp;Tentang Arsip </font> </a>
		</li>
	  </ul>
	</nav>
	
	<!-- CAROUSEL -->
	<section id="beranda">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	  <div class="carousel-inner">
		<div class="carousel-item active">
		  <img class="d-block w-100" src="<?= base_url() ?>assets/images/bpjs4.jpg" alt="First slide">
		</div>
		<div class="carousel-item">
		  <img class="d-block w-100" src="<?= base_url() ?>assets/images/bpjs5.jpg" alt="Second slide">
		</div>
		<div class="carousel-item">
		  <img class="d-block w-100" src="<?= base_url() ?>assets/images/bpjs6.jpg" alt="Third slide">
		</div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div>
	</section>
	
	<!-- KOLOM 2 - LOGIN -->
	<br>
	<section id="login">
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="col-md-12">
				<img class="w-100" src="<?= base_url() ?>assets/images/tim.jpg">
			</div>
		</div>
	</div>
		<br>
		<div class="bg-row">
			<div class="row">
				<div class="col-8">
					<div class="welcome">
						<div class="card-body">
						  <h2 class="card-title">Selamat Datang di Sistem Informasi Arsip!</h2>
						  <p class="card-text" style="text-align: justify;">
							Arsip adalah setiap catatan yang tertulis, tercetak atau ketikan dalam bentuk huruf,
							angka atau gambar yang mempunyai arti dan tujuan tertentu sebagai bahan 
							komunikasi dan informasi yang terekam pada kertas (kartu, formulir), kertas film dan
							media komputer. <br>
							Dengan kemajuan teknologi di masa sekarang diusulkan sebuah solusi perubahan pada
							sistem informasi arsip yang diharapkan dapat mempermudah pegawai dalam memasukkan data-data
							peserta, melakukan rekap data peserta dan sebagainya. <br>
						  </p>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card">
						<div class="card-header">
							<h3>Log In</h3>
						</div>
						<div class="card-body">
						<?php if(isset($error)) { echo $error; }; ?>   
						<form method="POST" action="<?= base_url() ?>login">
								<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-user"></i></span>
									</div>
									<input type="text" class="form-control" name="username" id="username" placeholder="Username">
									
								</div>
								<?= form_error('username'); ?>
								<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-key"></i></span>
									</div>
									<input type="password" class="form-control" name="password" id="password" placeholder="Password">
									
								</div>
								<?= form_error('password'); ?>
								<div class="form-group">
								<button type="submit" class="btn btn-warning btn-block font-weight-bold">Login</button>
									<!-- <input type="submit" value="Login" class="btn float-right login_btn"> -->
								</div>
							</form>
						</div>
						<div class="card-footer">
							<div class="d-flex justify-content-center links">
								Tidak Punya Akun?<a data-toggle="modal" data-target="#exampleModalCenter" href="#">Klik di sini</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<br>
	
	<!-- KOLOM 3 - MAPS 
	<h2 class="text-center"> LOKASI
	<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2492344140833!2d110.41270071477324!3d-6.979890394957613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b5326f3c515%3A0x5a7d787163dea4e1!2sBPJS+Ketenagakerjaan+Semarang!5e0!3m2!1sen!2sid!4v1551942671130" width="1000" height="600" frameborder="0" style="border:0" allowfullscreen></iframe> </center>
	</h2> -->
	
	<!-- KOLOM 4 - TENTANG ARSIP -->
	<div class="container-doang" style="background-color:#f8f8f8" id="tentang">
	<br>
	<br>
	</div>
	<div class="container-tentang">
		<div class="container">
			<div class="narasi-tentang text-center">
				<h2 style="color:black"> Tentang Arsip </h2>
				<p style="color: #666666"> </p>
			</div>
			<div class="row" style="margin:0;">
				<div class="col-md-4 col-xs-12 text-center">
					<div class="tentang-box">
						<div class="tentang-text">
							<h3> Apa Itu Arsip? </h3>
							<div class="margin-tentang-box">
								<img class="icon-tentang wow fadeInUp" src="<?= base_url() ?>assets/images/arsip1.jpeg">
								<p class="tentang-info wow fadeInUp" style="color: #666666">
									Arsip adalah mesin ingatan manusia.
									Mengarsip adalah sebuah kegiatan untuk mengabadikan sebuah peristiwa.
									Arsip membawa mereka menjelajahi waktu, membantu mereka menemukan apa yang mereka cari.
									Dengan mengarsip, kita sedang mewariskan cerita di hari ini untuk mereka yang hidup di masa depan.
									Karena itulah, meskipun hanya memilah hal-hal sederhana, menatanya ke tempat seharusnya dan
									kemudian merawatnya dengan baik, mengarsip sudah menjadi kebutuhan.
								</p>
								<br>
								<br>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-xs-12 text-center">
					<div class="tentang-box">
						<div class="tentang-text">
							<h3> Apa Itu Aturan Arsip? </h3>
							<div class="margin-tentang-box">
								<img class="icon-tentang wow fadeInUp" src="<?= base_url() ?>assets/images/arsip2.jpeg">
								<p class="tentang-info wow fadeInUp" style="color: #666666">
									Aturan arsip adalah kampanye untuk meningkatkan kesadaran
									dan kewaspadaan terhadap keamanan informasi, data dan dokumen institusi.
									Hal tersebut diharapkan dapat membantu dalam mengurangi tingkat insiden yang
									kemungkinan muncul seperti minuman membasahi dokumen atau arsip,
									api yang dapat membakar dokumen atau arsip. Pegawai di lingkungan BPJS Ketenagakerjaan
									Kanwil Jateng & DIY harus memiliki kesadaran untuk mau mengarsip dokumen/arsip
									mereka masing-masing. 
								</p>
								<br>
								<br>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-xs-12 text-center">
					<div class="tentang-box">
						<div class="tentang-text">
							<h3> Peraturan Arsip </h3>
							<div class="margin-tentang-box">
								<img class="icon-tentang wow fadeInUp" src="<?= base_url() ?>assets/images/arsip3.jpeg">
								<p class="tentang-info wow fadeInUp" style="color: #666666">
									&nbsp; 1. ARSIP & NON ARSIP <br>
									Pastikan dokumen yang disimpan adalah dokumen yang perlu untuk disimpan dan diarsipkan.
									<br>
									&nbsp; 2. PENUMPUKAN DOKUMEN <br>
									Hindari melakukan penumpukan dokumen pada meja atau ruang kerja.
									<br>
									&nbsp; 3. SAAT MENINGGALKAN RUANGAN <br>
									Saat meninggalkan ruangan, pastikan berkas atau arsip sudah dimasukkan ke tempat 
									penyimpanan berkas atau arsip.
									<br>
									&nbsp; 4. MAKANAN, MINUMAN & API <br>
									Dilarang membawa makanan, minuman dan api ke area dekat berkas atau arsip.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<br>
	
	<!-- FOOTER -->
	<div class="bg-footer">
    <div class="container-fluid">
      <div class="row">
		<div class="col-md-3">
		</div>
        <div class="col-md-4">
			<h5 class="font-weight-bold text-uppercase mb-4">Alamat Kantor</h5>
				<ul class="list-unstyled">
					<li>
						<p>
							<i class="fas fa-home mr-3"> </i> 
							Jl. Pemuda No.130, Kota Semarang, Jawa Tengah
						</p>
					</li>
					<li>
						<p>
							<i class="fas fa-phone mr-3"> </i> 
							(024)-3559563
						</p>
					</li>
					<li>
						<p>
							<i class="fas fa-fax mr-3"> </i> 
							(024)-553712
						</p>
					</li>
				</ul>
        </div>
        <div class="col-md-4">
			<h5 class="font-weight-bold text-uppercase mb-4"> CONTACT US </h5>

			  <!-- Facebook -->
			  <!-- <a type="button" class="btn-floating btn-fb">
				<i class="fab fa-facebook-f"></i>
			  </a>
			  Twitter
			  <a type="button" class="btn-floating btn-tw">
				<i class="fab fa-twitter"></i>
			  </a>
			  Google +
			  <a type="button" class="btn-floating btn-gplus">
				<i class="fab fa-google-plus-g"></i>
			  </a>
			  Dribbble
			  <a type="button" class="btn-floating btn-dribbble">
				<i class="fab fa-dribbble"></i>
			  </a> -->
        </div>
      </div>
    </div>
	</div>
	
    <!-- Copyright -->
	
	
	<!-- PANAH SCROLL KE ATAS -->
	<a class="go-top show" href="#beranda">
		<i class="fa fa-angle-up"> </i>
	</a>

	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog">
		  <div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Mengalami Masalah?</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				<h5>Belum Punya Akun</h5>
				<p>
					1. Hubungi Admin untuk membuatkan akun baru<br>
					2. Akun baru akan dibuatkan oleh admin<br>
					3. Anda akan mendapat username dan password<br>
					4. Login menggunakan data tersebut<br>
					5. Lakukan pengubahan password demi keamanan akun<br>
				</p><br>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
			  </div>
			</div>
		  </div>
		</div>
	</div>
   

	<script src="<?= base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/popper.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>

</html>