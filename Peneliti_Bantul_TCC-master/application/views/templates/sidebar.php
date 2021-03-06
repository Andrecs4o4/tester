<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('welcome'); ?>">
        <div class="sidebar-brand-icon">
          <i class="fas fa-user-check"></i>
        </div>
        <div class="sidebar-brand-text">PENELITI BANTUL </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('welcome'); ?>">
          <i class="fas fa-fw fa-home"></i>
          <span>Home</span></a>
      </li>




      <!-- Nav Item - Profil -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('/profil'); ?>">
          <i class="fas fa-fw fa-id-card-alt"></i>
          <span>Profil BAPPEDA Bantul</span></a>
      </li>

      <!-- Nav Item - Profil -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('/Kontak'); ?>">
          <i class="fas fa-fw fa-phone-alt"></i>
          <span>Kontak</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        <span>List Peneliti Berdasarkan Instansi</span>
      </div>

      <!-- Nav Item - Pakaian Pria -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('kategori/internal'); ?>">
          <i class="fas fa-fw fa-address-card"></i>
          <span>Internal</span></a>
      </li>
      <!-- Nav Item - Pakaian Wanita -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('kategori/eksternal'); ?>">
          <i class="fas fa-fw fa-address-book"></i>
          <span>Eksternal</span></a>
      </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      <span>List Penelitian Berdasarkan Kategori</span>
    </div>

    <!-- Nav Item - Pakaian Pria -->
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('kategorip/kriya'); ?>">
        <i class="fas fa-fw fa-address-card"></i>
        <span>Kriya</span></a>
    </li>
    <!-- Nav Item - Pakaian Wanita -->
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('/kategorip/kuliner'); ?>">
        <i class="fas fa-fw fa-address-book"></i>
        <span>Kuliner</span></a>
    </li

    <!-- Nav Item - Pakaian Wanita -->
    <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('kategorip/senbud'); ?>">
            <i class="fas fa-fw fa-address-book"></i>
            <span>Seni Budaya</span></a>
        </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

              <div class="navbar">
              <ul class="nav navbar-nav navbar-righ">
                <a href="https://www.instagram.com/bappedabantul/" target='_blank'>Instagram</a>
              </ul>
              </div>
              <div class="navbar">
              <ul class="nav navbar-nav navbar-right">
                <a href="https://twitter.com/bappedabantul2" target='_blank'>Twitter</a>
              </ul>
              </div>
              <div  class="navbar">
              <ul class="nav navbar-nav navbar-right">
                <a href="https://www.facebook.com/bappedakabbantul" target='_blank'>Facebook</a>
              </ul>
              </div>
          </ul>
          <div class="topbar-divider d-none d-sm-block"></div>
          <!-- Navbar User Login -->
          <ul class="na navbar-nav navbar-right">
            <?php if($this->session->userdata('username')) { ?>
            <li><div>Selamat Datang <?= $this->session->userdata('username'); ?></div></li>
            <!-- echo $this->session->userdata('username');     $user['username']--> 
            <li class="ml-2"><?php echo anchor('auth/logout', 'Logout'); ?></li>

            <?php } else { ?>
              <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('auth/login'); ?>">
          <span>Logion</span></a>
      </li>
            <?php } ?>
          </ul>
      </nav>
