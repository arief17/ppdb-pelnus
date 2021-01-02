<!-- Begin Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?>
        <?php endif; ?>


        <!-- Page Heading -->
        <!-- <h1 class="h3 mb-4 text-primary-800"><?= $title; ?></h1> -->


        <section class="content">

            <div class="row">
                <div class="col-md-12">
                    <nav class="nav nav-fill bg-gray-400">
                        <div class="col-md-2">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Daftar</a>
                            </li>
                        </div>

                        <div class="col-md-4">
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"> Pendaftaran Online</a>
                            </li>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="alert alert-success" role="alert">
                        <strong>Kolom yang ditandai merah* wajid diisi. Periksa Kembali data yang telah diisi sebelum dikirim</strong>
                    </div>
                </div>
            </div>

            <!-- <div class="row mt-3">
                <div class="col-md-12">
                    <ul class="nav nav-tabs nav-stacked">
                        <li class="nav-item">
                            <a href="<?= base_url('user/kelola_data/data_siswa'); ?>" class="nav-link">DATA SISWA</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ">DATA ORANGTUA</a>
                        </li>
                        <li class="nav-item ">
                            <a href="#" class="nav-link ">DATA ASAL SEKOLAH</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">DATA NILAI UNBK/UNKP</a>
                        </li>
                    </ul>
                </div>
            </div> -->
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="card-header ">
                        <h6 class="m-0 font-weight-bold text-primary">
                            <div class="row">
                                <div class="">
                                    DATA ASAL SEKOLAH
                                </div>
                            </div>


                        </h6>
                    </div>
                </div>

                <div class="col-md-6">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">Nama Sekolah</label>
                            <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">NPSN</label>
                            <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat Sekolah</label>
                            <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for=""></label>
                            <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Pekerjaan</label>
                            <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">Nama Ibu</label>
                            <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">NIK</label>
                            <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Pekerjaan</label>
                            <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>

                    </form>

                </div>



            </div>
            <div class="row">
                <div class="col-md-10">
                    <a href="<?= base_url('user/kelola_data/daftar') ?>" class="btn btn-outline-warning "><i class="fas fa-arrow-left mr-1"></i>Sebelumya</a>
                </div>
                <div class="col-md-2">
                    <a href="<?= base_url('user/kelola_data/data_asal_sekolah') ?>" class="btn btn-outline-primary "><i class="fas fa-arrow-right mr-1"></i>Selanjutnya</a>
                </div>
            </div>









        </section>
        <!-- section content -->





    </div>
    <!-- /.container-fluid -->

</div>
</div>
<!-- End of Main Content -->