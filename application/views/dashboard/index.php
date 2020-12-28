<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PPDB SMK PELNUS 2020</title>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,200;1,300&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
	
	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-nav mb-5">
		<div class="container">
			<img src="<?php echo base_url()?>assets/img/logo-baru.png" alt="">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#info-daftar">Info Pendaftaran</a>
				</li>
				<li class="nav-item">
					<button class="btn-login btn btn-warning btn-sm" data-toggle="modal" data-target="#loginModal">LOGIN</button>
				</li>
			</ul>
		</div>
		</div>
	</nav>

	<!-- akhir navbar -->
		

	<div class="container">		
		<div class="row mt-5">
				<div class="col-sm-6 kiri-dashboard">
					<div class="text-kiri">
						<!-- text ppdb -->
						<h1>Penerimaan Siswa Baru Gel - I<br>T.A 2021/2022</h1>
						<h2>SMK PELAYARAN NUSANTARA KOTA SERANG</h2>
					</div>
					<h5>Mari Bergabung Bersama Kami dan Sukses Bersama Kami</h5>
					<p><i class="fas fa-globe"></i> ppdb.smkpelnusserang.sch.id</p>
					<p><i class="fas fa-phone"></i> 081906261187 (Mustafa Muchtar)</p>
					<p><i class="fas fa-phone"></i> 0817708675 (Burhanudin)</p>
					<p><i class="fas fa-phone"></i> 087775689777 (Saproi)</p>
					<div class="btn-action mt-4">
						<a href="#" class="btn-daftar" data-toggle="modal" data-target="#registerModal">Daftar Sekarang</a>
						<a href="#" class="btn-login-kiri" data-toggle="modal" data-target="#loginModal">Login Sekarang</a>
					</div>
				</div>

				<div class="col-sm-6 kanan-dashboard mt-5 mb-5">
					<div class="container">
						<div class="row">
							<div class="col-xs-7">
								<a href="#">
								<div class="alur-daftar image text-center">
										<i class="fas fa-coffee"></i>
									<div class="text-image">
										<h3>Alur daftar</h3>
									</div>
								</div>
								</a>
							</div>
							<div class="col-xs-5">
								<a href="#">
								<div class="alur-daftar image text-center">
										<i class="fas fa-coffee"></i>
									<div class="text-image">
										<h3>Alur daftar</h3>
									</div>
								</div>
								</a>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>














	<!-- Modal login -->
	<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Modal Login</h5>
		</div>
		<div class="modal-body modal-login">
			<form action="#">
				<div class="form-group">
					<label for="inoutusername">Username</label>
					<input type="text" class="form-control" placeholder="Masukan Username Anda">
				</div>
				<div class="form-group">
					<label for="inoutusername">Password</label>
					<input type="text" class="form-control" placeholder="Masukan Username Anda">
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
			<button type="button" class="btn btn-primary">Login</button>
		</div>
		</div>
	</div>
	</div>
	<!-- akhir modal login -->

	<!-- Modal login -->
	<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Modal Register</h5>
			</button>
		</div>
		<div class="modal-body">
			<form action="#">
				<div class="form-group">
					<label for="inoutusername">Username</label>
					<input type="text" class="form-control" placeholder="Masukan Username Anda">
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
			<button type="button" class="btn btn-primary">Daftar</button>
		</div>
		</div>
	</div>
	</div>
	<!-- akhir modal login -->

	<!-- JS dan JQUERY -->
	<script src="<?php echo base_url()?>assets/js/jquery-3.5.1.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
</body>
</html>
