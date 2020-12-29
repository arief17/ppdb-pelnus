<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-5 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <img src="<?= base_url() ?>assets/img/pelnus/logo.ico" width="70px" alt="">
                            <h1 class="h4 text-gray-900 mb-4">Buat Akun Baru</h1>
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
                                Register Akun
                            </button>

                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth_siswa'); ?>">Sudah Punya Akun? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>