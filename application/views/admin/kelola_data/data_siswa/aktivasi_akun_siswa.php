<!-- Begin Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?>
        <?php endif; ?>


        <!-- Page Heading -->
        <!-- <h1 class="h3 mb-4 text-primary-800"><?= $title; ?></h1> -->


        <section class="content">





            <?php
            $queryuser = "SELECT * FROM user";
            $user = $this->db->query($queryuser)->result_array();
            $i = 1;
            ?>

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
                                    <th>Password</th>
                                    <th>Status</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($user as $S) : ?>
                                    <tr>


                                        <td><?php echo $i++ ?></td>
                                        <td><?php echo $S['user_name'] ?></td>
                                        <td><?php echo $S['password'] ?></td>
                                        <td><?php echo $S['is_active'] ?></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>user/kelola_data//<?= $S['id']; ?>" class="btn btn-warning btn-icon-split btn-sm">
                                                <span class="text"><i class="fas fa-eye"></i></span>
                                            </a> |
                                            <a href="<?php echo base_url(); ?>user/kelola_data//<?= $S['id']; ?>" class="btn btn-warning btn-icon-split btn-sm">
                                                <span class="text"><i class="fas fa-edit"></i></span>
                                            </a> |
                                            <a href="<?php echo base_url(); ?>berita/hapus/<?= $S['id']; ?>" class="btn btn-danger btn-icon-split btn-sm tombol-hapus">
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




        </section>
        <!-- section content -->







    </div>
    <!-- /.container-fluid -->

</div>
</div>
<!-- End of Main Content -->