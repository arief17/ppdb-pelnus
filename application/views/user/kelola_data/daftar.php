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

            <div class="row mt-3 mb-3">
                <div class="col-md-12">
                    <div class="card-header ">
                        <h6 class="m-0 font-weight-bold text-primary">
                            <div class="row">
                                <div class="">
                                    DATA SISWA
                                </div>
                            </div>
                        </h6>
                    </div>
                </div>

                <div class="col-md-6">
                    <?php echo form_open_multipart('user/kelola_data/daftar/tambah'); ?>
                    <form action="<?php echo base_url() . 'user/kelola_data/daftar/tambah'; ?>" method="post">
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="jenis_kelamin" value="Laki-Laki">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Laki-Laki
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="jenis_kelamin" value="Perempuan">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">NISN</label>
                            <input type="text" name="nisn" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="">Nomor Seri Ijazah SMP/MTS</label>
                            <input type="text" name="no_seri_ijazah_smp" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="">Nomor Seri SHUN</label>
                            <input type="text" name="no_seri_shun" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="">Nomor UN SMP/MTS</label>
                            <input type="text" name="no_un_smp_mts" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="">NIK</label>
                            <input type="text" name="nik_siswa" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="">Tempat Tanggal Lahir</label>
                            <input type="text" name="ttl" class="form-control" placeholder="Contoh:Serang,04,Januari,2020" required>
                        </div>

                        <div class="form-group">
                            <label for="">Agama</label>
                            <select class="custom-select" name="agama">
                                <option selected>--Silahkan Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                            </select>
                        </div>

                </div>
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="">Berkebutuhan Khusus</label>
                        <input type="text" name="berkebutuhan_khusus" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Alamat Tempat Tinggal</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat_tempat_tinggal"></textarea>
                    </div>

                    <div class="form-row">
                        <div class="col-7">
                            <label for="">Dusun</label>
                            <input type="text" class="form-control" name="dusun">
                        </div>
                        <div class="col">
                            <label for="">Rt</label>
                            <input type="text" class="form-control" name="rt">
                        </div>
                        <div class="col">
                            <label for="">Rw</label>
                            <input type="text" class="form-control" name="rw">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-7">
                            <label for="">Kelurahan/Desa</label>
                            <input type="text" class="form-control" name="kelurahan_desa">
                        </div>
                        <div class="col">
                            <label for="">Kode Pos</label>
                            <input type="text" class="form-control" name="kd_pos">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-4">
                            <label for="">Kecamatan</label>
                            <input type="text" class="form-control" name="kecamatan">
                        </div>
                        <div class="col-4">
                            <label for="">Kabupaten</label>
                            <input type="text" class="form-control" name="kabupaten_kota">
                        </div>
                        <div class="col-4">
                            <label for="">Provinsi</label>
                            <input type="text" class="form-control" name="provinsi">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Alat Transportasi ke Sekolah</label>
                        <input type="text" name="alat_transportasi" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Jenis Tinggal</label>
                        <input type="text" name="jenis_tinggal" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">No Telpon Rumah / HP</label>
                        <input type="text" name="no_telp_rumah" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="form-row">
                        <div class="col-7">
                            <label for="">Penerima KPS</label>
                            <input type="text" class="form-control" name="penerima_kps" placeholder="Tulis ya/tidak">
                        </div>
                        <div class="col">
                            <label for="">No KPS</label>
                            <input type="text" class="form-control" name="no_kps">
                        </div>
                    </div>



                </div>
            </div>

            <div class="row">
                <div class="col-md-10">
                    <button href="" class="btn btn-outline-warning "><i class="fas fa-arrow-left mr-1"></i>Sebelumya</button>
                </div>
                <div class="col-md-2">
                    <button type="submit" href="<?= base_url('user/kelola_data/data_ayah_kandung') ?>" class="btn btn-outline-primary "><i class="fas fa-arrow-right mr-1"></i>Selanjutnya</button>
                </div>
            </div>

            </form>















        </section>
        <!-- section content -->





    </div>
    <!-- /.container-fluid -->

</div>
</div>
<!-- End of Main Content -->