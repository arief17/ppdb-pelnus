<!-- Begin Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?>
        <?php endif; ?>


        <!-- Page Heading -->
        <!-- <h1 class="h3 mb-4 text-primary-800"><?= $title; ?></h1> -->


        <section class="content">

            <div class="content-wrapper">
                <section class="content">
                    <h4><strong>DATA PENDAFTARAN PPDB 2021</strong></h4>
                    <table class="table bg-white">
                        <tr>
                            <th class="h5 m-0 font-weight-bold text-primary">DATA SISWA</th>
                        </tr>
                        <tr>
                            <th>Nama Lengkap</th>
                            <td>Nurul Hotimah</td>
                        </tr>
                        <tr>
                            <th>Tempat Lahir</th>
                            <td>Pandeglang</td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir</th>
                            <td>17-02-2004</td>
                        </tr>
                        <tr></tr>
                        <tr>
                            <th class="h5 m-0 font-weight-bold text-primary">DATA ORANGTUA</th>
                        </tr>
                        <tr>
                            <th>Nama Ayah</th>
                            <td>Zainal Arifin</td>
                        </tr>
                        <tr>
                            <th>Pekerjaan</th>
                            <td>Petani</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>Menes Pandeglang</td>
                        </tr>

                        <tr>
                            <th class="h5 m-0 font-weight-bold text-primary">DATA ASAL SEKOLAH</th>
                        </tr>
                        <tr>
                            <th>Nama Sekolah</th>
                            <td>SMPN 2 Menes</td>
                        </tr>
                        <tr>
                            <th>NPSN</th>
                            <td>1234567</td>
                        </tr>
                        <tr>
                            <th>Alamat Sekolah</th>
                            <td>Jl. Labuan Km.1</td>
                        </tr>

                        <tr>
                            <th class="h5 m-0 font-weight-bold text-primary">DATA NILAI UNBK/UNKP</th>
                        </tr>
                        <tr>
                            <th>Bahasa Indonesia</th>
                            <td>78</td>
                        </tr>
                        <tr>
                            <th>Matematika</th>
                            <td>47</td>
                        </tr>
                        <tr>
                            <th>Bahasa Inggris</th>
                            <td>62</td>
                        </tr>
                        <tr>
                            <th>Ilmu Pengetahuan Alam</th>
                            <td>60</td>
                        </tr>
                    </table>



                    <a href="<?php echo base_url('siswa/index'); ?>" class='btn btn-primary'>Kembali</a>

                </section>
            </div>








        </section>
        <!-- section content -->





    </div>
    <!-- /.container-fluid -->

</div>
</div>
<!-- End of Main Content -->