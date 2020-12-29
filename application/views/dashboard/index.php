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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
					<a class="nav-link" href="#info-daftar">Aktivasi Pendaftaran</a>
				</li>
				<li class="nav-item">
					<button class="btn-login btn btn-warning btn-sm" data-toggle="modal" data-target="#loginModal">LOGIN</button>
				</li>
			</ul>
		</div>
		</div>
	</nav>

	<!-- akhir navbar -->
		

	<div class="container-fluid">		
		<div class="row mt-5">
				<div class="col-sm-8 col-xs-8 col-md-8 kiri-dashboard text-center">
				<img src="<?php echo base_url()?>assets/img/slider/pelnus3.jpg">
						<a href="#" class="btn btn-daftar mt-5">DAFTAR</a>
						<a href="#" class="btn btn-login-kiri mt-5">LOGIN</a>
					
				</div>

				<div class="col-sm-4 col-xs-4 col-md-4 kanan-dashboard">
					<div class="row">
						<div class="col-sm-6 col-xs-6 text-center">
							<a href="#" data-toggle="modal" data-target="#alurdaftar">
								<div class="alur-daftar">
									<div class="alur-image">
										<i class="fa fa-line-chart"></i>
									</div>
									<div class="alur-text">
										<h5>Alur Pendaftaran</h5>
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-6 col-xs-6 text-center">
							<a href="#" data-toggle="modal" data-target="#biayadaftar">
								<div class="rincian-biaya">
									<div class="rincian-image">
										<i class="fa fa-money"></i>
									</div>
									<div class="rincian-text">
										<h5>Rincian Biaya</h5>
									</div>
								</div>
							</a>
						</div>

						<div class="col-sm-6 col-xs-6 text-center">
							<a href="#">
								<div class="alur-daftar">
									<div class="alur-image">
										<i class="fa fa-clone"></i>
									</div>
									<div class="alur-text">
										<h5>Persyaratan</h5>
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-6 col-xs-6 text-center">
							<a href="#">
								<div class="rincian-biaya">
									<div class="rincian-image">
										<i class="fa fa-newspaper-o"></i>
									</div>
									<div class="rincian-text">
										<h5>Brosur Online</h5>
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-6 col-xs-6 text-center">
							<a href="#">
								<div class="alur-daftar">
									<div class="alur-image">
										<i class="fa fa-file-pdf-o"></i>
									</div>
									<div class="alur-text">
										<h5>Berkas Online</h5>
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-6 col-xs-6 text-center">
							<a href="#">
								<div class="rincian-biaya">
									<div class="rincian-image">
										<i class="fa fa-calendar"></i>
									</div>
									<div class="rincian-text">
										<h5>Jadwal</h5>
									</div>
								</div>
							</a>
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
		<?= $this->session->flashdata('message'); ?>
			<form action="<?= base_url('auth_siswa'); ?>" method="post">
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


	<!-- Modal Alur Daftar -->
	<div class="modal fade" id="alurdaftar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg dialog-alur">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Alur Pendaftaran</h5>
			</button>
		</div>
		<div class="modal-body">
			
		<!-- isi content alur daftar -->


		<!-- akhir isu content daftar -->

		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
			<button type="button" class="btn btn-primary">Daftar</button>
		</div>
		</div>
	</div>
	</div>
	<!-- akhir modal alur daftar -->

	<!-- Modal biaya daftar -->
	<div class="modal fade" id="biayadaftar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg dialog-alur">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">RINCIAN BIAYA PENDAFTARAN</h5>
			</button>
		</div>
		<div class="modal-body">
			
		<!-- isi content biaya daftar -->
		<table class="table">
		<thead>
			<tr>
			<th scope="col">#</th>
			<th scope="col">Biaya Administrasi</th>
			<th scope="col">Jumlah</th>
			</tr>
		</thead>
		<tbody>
			<tr>
			<th scope="row">1</th>
			<td>Biaya Seragam dan Perlengkapan Sekolah</td>
			<td>Rp. 3. 500.000</td>
			</tr>
			<tr>
			<th scope="row">2</th>
			<td>Biaya Pengembangan Pendidikan</td>
			<td>Rp. 1. 500.000</td>
			</tr>
			<tr>
			<th scope="row">3</th>
			<td>Biaya SPP Bulan Juli 2020</td>
			<td>Rp. 250.000</td>
			</tr>
			<tr>
			<th scope="row">4</th>
			<td>Biaya Ujian Semester Ganjil & Ganjil</td>
			<td>Rp. 600.000</td>
			</tr>
			<tr>
			<th scope="row">5</th>
			<td>Biaya Asuransi Kecelakaan Satu Tahun</td>
			<td>Rp. 30.000</td>
			</tr>
			<tr>
			<th scope="row">6</th>
			<td>Biaya Kegiatan Taruna</td>
			<td>Rp. 1000.000</td>
			</tr>
			<tr>
			<th scope="row"></th>
			<th scope="col">Jumlah</th>
			<th scope="col">Rp. 6.980.000</th>
			</tr>
		</tbody>
		</table>

		<!-- akhir isu biaya daftar -->

		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#caradaftar" data-dismiss="modal"><i class="fa fa-paper-plane"></i>&nbsp Cara Pembayaran</button>
		</div>
		</div>
	</div>
	</div>
	<!-- akhir modal biaya daftar -->


	<!-- Modal biaya daftar -->
	<div class="modal fade" id="caradaftar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg dialog-alur">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">CARA PEMBAYARAN</h5>
			</button>
		</div>
		<div class="modal-body">
			
		<!-- isi content biaya daftar -->
		<table class="table">
		<thead>
			<tr>
			<th scope="col">#</th>
			<th scope="col">Biaya Administrasi</th>
			<th scope="col">Jumlah</th>
			</tr>
		</thead>
		<tbody>
			<tr>
			<th scope="row">1</th>
			<td>Angsuran I dibayar saat pendaftaran</td>
			<td>Rp. 3. 500.000</td>
			</tr>
			<tr>
			<th scope="row">2</th>
			<td>Angsuran II dibayar 23 September 2020</td>
			<td>Rp. 1. 500.000</td>
			</tr>
			<tr>
			<th scope="row">3</th>
			<td>Angsuran III dibayar 23 Desember 2020</td>
			<td>Rp. 1. 000.000</td>
			</tr>
			<tr>
			<th scope="row">4</th>
			<td>Angsuran IV dibayar 20 Februari 2021</td>
			<td>Rp. 830.000</td>
			</tr>
			<tr>
			<th scope="row">5</th>
			<td>SPP Agustus 2020 s/d Juni 2021 dibayar setiap bulan paling lambat s/d tanggal 10</td>
			<td>Rp. 250.000 / Bulan</td>
			</tr>
		</tbody>
		</table>

		<!-- akhir isu biaya daftar -->

		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-window-close"></i>&nbsp	 Tutup</button>
		</div>
		</div>
	</div>
	</div>
	<!-- akhir modal biaya daftar -->

	

	<!-- JS dan JQUERY -->
	<script src="<?php echo base_url()?>assets/js/jquery-3.5.1.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
</body>
</html>
