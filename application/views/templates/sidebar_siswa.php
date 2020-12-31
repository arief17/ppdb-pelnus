<!-- Sidebar -->
<ul class="navbar-nav bg-gradient sidebar sidebar-dark accordion " id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon ">
            <img src="<?= base_url() ?>assets_admin/img/pelnus/logo.ico" width="60px" alt="">
        </div>
        <div class="text-dark ml-2">SMK PELNUS</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">



    <!-- Heading -->
    <div class="sidebar-heading text-dark">
        User
    </div>

    <!-- Nav Item -Profile -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/user'); ?>">
            <i class="fas fa-fw fa-user text-black-50"></i>
            <span class="text-black-50">My Profile</span></a>
    </li>
    <!-- <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/edit'); ?>">
            <i class="fas fa-fw fa-user-edit"></i>
            <span> Edit My Profile</span></a>
    </li> -->

    <hr class="sidebar-divider ">
    <!-- Heading -->
    <div class="sidebar-heading text-dark">
        Menu
    </div>

    <li class="nav-item active">
        <a href="<?= base_url('user/kelola_data/data_saya') ?>" class="nav-link">
            <i class="fas fa-fw fa-user text-black-50"></i>
            <span class="text-black-50">Data Saya</span>
        </a>
    </li>

    <li class="nav-item active">
        <a href="<?= base_url('siswa/kelola_data/daftar') ?>" class="nav-link">
            <i class="fa fa-fw fa-file text-black-50"></i>
            <span class="text-black-50">Daftar</span>
        </a>
    </li>

    <li class="nav-item active">

        <a href="<?php echo base_url(); ?>siswa/kelola_data/daftar/pdf" class="nav-link">
            <i class="fa fa-fw fa-print text-black-50"></i>
            <span class="text-black-50">Eksport Pdf</span>
        </a>
    </li>







    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('login_siswa/login_registrasi/logout'); ?>">
            <i class="fas fa-fw fa-sign-out-alt  text-black-50"></i>
            <span class=" text-black-50">Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->