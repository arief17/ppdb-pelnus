<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-12 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row mt-4 mr-2 ml-2 register">
                <div class="col-lg d-none d-sm-block">
                    <img class="img-fluid" src="<?php echo base_url()?>assets/img/pelnus4.jpg" alt="">
                </div>
                <div class="col-lg">
                        <div class="text-center">
                            <h4>PPDB SMK PELAYARAN NUSANTARA KOTA SERANG</h4>
                            <h3 class="h4 text-gray-900 mb-4">Form Pendaftaran Siswa Baru</h3>
                        </div>
                        <form class="user" method="post" action="<?= base_url('auth_siswa/registration'); ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="name" placeholder="Nama Lengkap" value="<?= set_value('name') ?>">
                                <?= form_error('name', '<small class="text-danger pl">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="user_name" placeholder="NISN" value="<?= set_value('name') ?>">
                                <?= form_error('user_name', '<small class="text-danger pl">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="no_hp" name="no_hp" placeholder="No Handphone" value="<?= set_value('no_hp') ?>">
                                <?= form_error('user_name', '<small class="text-danger pl">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" name="password1" id="password1" placeholder="Password/NISN">
                                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" name="password2" id="password2" placeholder="Ulangi Password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Daftar
                            </button>

                        </form>
                        <hr>
                        <div class="text-center mb-4">
                            <a class="small" href="<?= base_url('auth_siswa'); ?>">Sudah Punya Akun? Login!</a>
                            <p class="mt-3"><a href="<?php echo base_url()?>dashboard_utama"><i class="fas fa-arrow-circle-right mr-1"></i>Kembali Ke Dashboard</a></p>
                        </div>
                        
                </div>
            </div>
        </div>
    </div>

</div>