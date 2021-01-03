<!-- Begin Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?>
        <?php endif; ?>


        <!-- Page Heading -->
        <!-- <h1 class="h3 mb-4 text-primary-800"><?= $title; ?></h1> -->


        <section class="content">







            <!-- looping berita -->



            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <div class="row">
                            <div class="col-md-10">
                                DATA AKUN SISWA
                            </div>
                            <div class="col-md-2">
                                <a href="<?= base_url('menu_utama/menu_utama/index'); ?>" class="btn btn-danger btn-sm ml-2" target="_blank">Lihat Web</a>
                            </div>

                        </div>


                    </h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Status</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($siswa as $S) : ?>
                                    <tr>


                                        <td><?php echo $i++ ?></td>
                                        <td><?php echo $S->user_name ?></td>
                                        <td><?php echo $S->is_active ?></td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-icon-split btn-sm" data-toggle="modal" data-target="#exampleModal<?= $S->id; ?>">
                                                <span class="text"><i class="fas fa-eye"></i></span>
                                            </a> |
                                            <a href="#" class="btn btn-warning btn-icon-split btn-sm" data-toggle="modal" data-target="#edit<?= $S->id ?>">
                                                <span class="text"><i class="fas fa-edit"></i></span>
                                            </a> |
                                            <a href="<?php echo base_url(); ?>berita/hapus/<?= $S->id; ?>" class="btn btn-danger btn-icon-split btn-sm tombol-hapus">
                                                <span class="text"><i class="fas fa-trash"></i></span>
                                            </a>

                                        </td>






                                    </tr>
                                <?php endforeach; ?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Modal View-->
            <div class="modal fade" id="exampleModal<?= $S->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Detail Akun Siswa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="<?= base_url('assets_admin/img/profile/') . $S->image; ?>" class="card-img">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $S->name ?></h5>
                                            <p class="card-text"><?= $S->user_name ?></p>
                                            <p class="card-text"><small class="text-muted">Daftar Pada <?= date('d F Y', $S->date_created); ?></small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Edit-->
            <div class="modal fade" id="edit<?= $S->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Form Edit</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php foreach ($siswa as $S) { ?>
                                <?php echo form_open_multipart('berita/update'); ?>
                                <form action="<?php echo base_url() . 'berita/update'; ?>" method="post">
                                    <div class="form-group">
                                        <label>Nama Siswa</label>
                                        <input type="hidden" name="id" class="form-control" value="<?php echo $S->id ?>">
                                        <input type="text" name="judul" class="form-control" value="<?php echo $S->name ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Username</label>

                                        <textarea type="text" class="form-control form-control-sm" name="mapel"><?php echo $S->user_name; ?> </textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Status</label>
                                        <input type="text" name="tanggal" class="form-control" value="<?php echo $S->is_active ?>">
                                    </div>




                                </form>
                            <?php } ?>
                        </div>

                    </div>
                </div>
            </div>




        </section>
        <!-- section content -->







    </div>
    <!-- /.container-fluid -->

</div>
</div>
<!-- End of Main Content -->