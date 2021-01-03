<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashhboard Utama PPDB SMK Pelnus</title>
    <!-- CSS -->
    
    <link rel="stylesheet" href="<?= base_url()?>assets/css/main.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    
</head>
<body>
<div class="top-bar">
    
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
            <a class="navbar-brand" href="#">PPDB SMK PELNUS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
            <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Pricing</a>
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </div>
        </div>
</div>
  
</nav>


<div class="isi-content">
    <div class="slider-bg">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="<?php echo base_url()?>assets/img/slider/pelnus3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="<?php echo base_url()?>assets/img/slider/pelnus4.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="<?php echo base_url()?>assets/img/slider/pelnus5.jpg" class="d-block w-100" alt="...">
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
    </div>
    



    <div class="card text-center">
        <div class="card-body content-dev">
            <h5 class="card-title">TELAH DI BUKA PENDAFTARAN</h5>
            <p class="card-text">PPDB SMK PELAYARAN NUSANTARA KOTA SERANG</p>
            <a href="#" class="btn btn-primary"><i class="fa fa-send"></i> DAFTAR SEKARANG</a>  
            <a href="#" class="btn btn-success"><i class="fa fa-power-off"></i> LOGIN SEKARANG</a>
        </div>
    </div>
    

    <div class="container mt-3">
        <div class="row box-info">
            <div class="col-xs-6 col-sm col-md box-persyaratan">
                <a href="#">
                    <div class="card persyaratan">
                        <div class="card-header text-center">
                                <h5>ALUR PENDAFTARAN</h5>
                        </div>
                        <div class="card-body text-center">
                            <i class="fa fa-vcard-o"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm col-md">
                <a href="#">
                    <div class="card rincian-biaya">
                        <div class="card-header text-center">
                                <h5>RINCIAN BIAYA PENDAFTARAN</h5>
                        </div>
                        <div class="card-body text-center">
                            <i class="fa fa-money"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm col-md">
                <a href="#">
                    <div class="card rincian-biaya">
                        <div class="card-header text-center">
                                <h5>PERSYARATAN PENDAFTARAN</h5>
                        </div>
                        <div class="card-body text-center">
                            <i class="fa fa-file"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm col-md">
                <a href="#">
                    <div class="card rincian-biaya">
                        <div class="card-header text-center">
                                <h5>JADWAL PENDAFTARAN</h5>
                        </div>
                        <div class="card-body text-center">
                            <i class="fa fa-calendar"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm col-md">
                <a href="#">
                    <div class="card rincian-biaya">
                        <div class="card-header text-center">
                                <h5>KONTAK PERSON</h5>
                        </div>
                        <div class="card-body text-center">
                            <i class="fa fa-address-book"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    
</div>
    
        


    <!-- JS AND JQUERY -->
    
    <!-- JS dan JQUERY -->
		<script src="<?php echo base_url() ?>assets/js/jquery-3.5.1.min.js"></script>
		<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</body>
</html>