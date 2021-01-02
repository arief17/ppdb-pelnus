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
            $querySiswa = "SELECT * FROM siswa";
            $Siswa = $this->db->query($querySiswa)->result_array();
            $i = 1;
            ?>

            <!-- looping berita -->



            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <div class="row">
                            <div class="col-md-10">
                                DATA SISWA
                                <a href="<?= base_url('admin/data_siswa/belum_diverifikasi/pdf') ?>" class="btn btn-primary btn-sm ml-3"> eksport pdf</a>
                                <a href="<?= base_url('admin/data_siswa/belum_diverifikasi/excel') ?>" class="btn btn-primary btn-sm ml-3"> eksport excel</a>
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
                                    <th>NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>Asal Sekolah</th>
                                    <th>Status</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>Asal Sekolah</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($Siswa as $S) : ?>
                                    <tr>


                                        <td><?php echo $i++ ?></td>
                                        <td><?php echo character_limiter($S['nisn'], 20) ?></td>
                                        <td><?php echo character_limiter($S['nama'], 20) ?></td>
                                        <td><?php echo $S['asal_sekolah'] ?></td>
                                        <td><?php echo $S['id_status'] ?></td>
                                        <!-- <td><img src="<?php echo base_url(); ?>assets/foto/berita/<?php echo $B['gambar']; ?>" width="60" height="50"></td> -->
                                        <td>
                                            <a href="<?php echo base_url(); ?>berita/detail/<?= $S['id']; ?>" class="btn btn-success btn-icon-split btn-sm">
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