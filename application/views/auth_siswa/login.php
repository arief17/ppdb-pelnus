<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
<div class="container mt-5">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class=" col-lg-4">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col-lg">
                            <div class="p-4 login">
                                <div class="text-center mb-3">
                                    <img class="img-fluid" src="<?php echo base_url()?>assets/img/logo.png" alt="">
                                    <h5 class=" text-gray-900 mb-2 mt-2">LOGIN</h5>
                                    <h6 class="mt-2"> PPDB SMK PELNUS SERANG</h6>
                                </div>
                                <?= $this->session->flashdata('message'); ?>
                                <form class="user" method="post" action="<?= base_url('auth_siswa'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="user_name" aria-describedby="emailHelp" placeholder="Masukan Username Anda/NISN" value="<?= set_value('email'); ?>">
                                        <?= form_error('user_name', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" placeholder="Password/NISN">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        <i class="fas fa-arrow-right mr-1"></i>Login
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center mb-5">
                                    <p>Anda Belum Punya Akun?</p><a class="small" href="<?= base_url('auth_siswa/registration'); ?>">Buat Akun Baru disini..!</a>
                                    <p class="mt-3"><a href="<?php echo base_url()?>dashboard_utama"><i class="fas fa-arrow-circle-right mr-1"></i>Kembali Ke Dashboard</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>