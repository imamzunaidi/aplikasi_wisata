<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
            <!-- menu drop down sebelah kanan untuk lougout -->
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
   
            <div class="d-sm-none d-lg-inline-block">Hi, <?= $this->session->userdata('nama') ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title"><?= $this->session->userdata('is_aktif') ?></div>
           
              <div class="dropdown-divider"></div>
              <a href="<?= base_url('logout') ?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <!-- custom menu dalam dashboard -->
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <!-- <img src="<?= base_url() ?>assets/img/logotk.jpeg" width = "80px" alt="" class = "mt-3"> -->
            <br>
            <a href="" class = "">Aplikasi Desa Wisata</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">RA</a>
          </div>
          <!-- Sidebar Untuk Admin -->
            <?php if($this->session->userdata('hak_akses') == 'admin'){?>
              <ul class="sidebar-menu mt-3">
                <li class="menu-header">Dashboard</li>
                <?php $halaman = $this->uri->segment('1'); ?>
                <li><a class="nav-link" href="<?= base_url('dashboard')?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
                <li class="menu-header">Data Master</li>
                <li class="nav-item dropdown <?php if($halaman == 'data-profile' || $halaman == 'data-galeri' || $halaman == 'data-alur' || $halaman == 'data-informasi'){echo 'active';}?>">
                  <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cogs"></i> <span>Data Profile</span></a>
                  <ul class="dropdown-menu">
                    <li class="<?php if($halaman == 'data-profile'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-profile')?>">Data Profile</a></li>
                    <li class="<?php if($halaman == 'data-galeri'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-galeri')?>">Data Galeri</a></li>
                    <!-- <li class="<?php if($halaman == 'data-alur'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-alur')?>">Data Alur</a></li> -->
                    <!-- <li class="<?php if($halaman == 'data-informasi'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-informasi')?>">Data Informasi</a></li> -->
                  </ul>
                </li>
                <li class="nav-item dropdown <?php if($halaman == 'data-admin' ||$halaman == 'data-admin-desa' ||  $halaman == 'data-member' ){echo 'active';}?>">
                  <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i> <span>Data Users</span></a>
                  <ul class="dropdown-menu">
                    <li class="<?php if($halaman == 'data-admin'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-admin')?>">Data Admin</a></li>
                    <li class="<?php if($halaman == 'data-admin-desa'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-admin-desa')?>">Data Admin Desa</a></li>
                    <li class="<?php if($halaman == 'data-member'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-member')?>">Data Member</a></li>
                  </ul>
                </li>
                <li class = "<?php if($halaman == 'data-bank'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-bank')?>"><i class="fas fa-file"></i> <span>Data Bank</span></a></li>
                <li class = "<?php if($halaman == 'data-home-stay-admin'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-home-stay-admin')?>"><i class="fas fa-bed"></i> <span>Data Home Stay</span></a></li>
                <li class = "<?php if($halaman == 'data-kuliner-admin'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-kuliner-admin')?>"><i class="fas fa-hamburger"></i><span>Data Kuliner</span></a></li>
                <li class = "<?php if($halaman == 'data-souvenir-admin'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-souvenir-admin')?>"><i class="fas fa-shopping-bag"></i></i> <span>Data Souvenir</span></a></li>
                <li class = "<?php if($halaman == 'data-karcis-admin'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-karcis-admin')?>"><i class="fas fa-money-check"></i> <span>Data Karcis</span></a></li>
                <li class="menu-header">Pengolahan Data Pemesanan</li>
                <li class="nav-item dropdown <?php if($halaman == 'data-pemesanan-homestay' || $halaman == 'data-pemesanan-souvenir' || $halaman == 'data-pemesanan-kuliner' || $halaman == 'data-pemesanan-karcis'){echo 'active';}?>">
                  <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-file"></i> <span>Data Pemesanan</span></a>
                  <ul class="dropdown-menu">
                    <li class="<?php if($halaman == 'data-pemesanan-homestay'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-pemesanan-homestay')?>">Pemesanan Home Stay</a></li>
                    <li class="<?php if($halaman == 'data-pemesanan-souvenir'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-pemesanan-souvenir')?>">Pemesanan Souvenir</a></li>
                    <li class="<?php if($halaman == 'data-pemesanan-kuliner'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-pemesanan-kuliner')?>">Pemesanan Kuliner</a></li>
                    <li class="<?php if($halaman == 'data-pemesanan-karcis'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-pemesanan-karcis')?>">Pemesanan Karcis</a></li>
                  </ul>
                </li>
                <!-- <li class = "<?php if($halaman == 'data-checkin-admin'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-checkin-admin')?>"><i class="fas fa-bell"></i> <span>Data Check In</span></a></li>
                <li class = "<?php if($halaman == 'data-checkout-admin'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-chcekout-admin')?>"><i class="fas fa-calendar-check"></i> <span>Data Check Out</span></a></li> -->
                <li class = "<?php if($halaman == 'data-pembayaran-admin'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-pembayaran-admin')?>"><i class="fas fa-credit-card"></i><span>Data Pembayaran</span></a></li>
                <li class="menu-header">Data Laporan</li>
                <li class="nav-item dropdown <?php if($halaman == 'laporan-pemesanan' ||$halaman == 'laporan-kunjungan'){echo 'active';}?>">
                  <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-file"></i> <span>Data Laporan</span></a>
                  <ul class="dropdown-menu">
                    <li class="<?php if($halaman == 'laporan-pembayaran'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('laporan-pembayaran')?>">Laporan Pembayaran</a></li>
                    <!-- <li class="<?php if($halaman == 'laporan-kunjungan'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('laporan-kunjungan')?>">Laporan Kunjungan</a></li> -->
                  </ul>
                </li>
              </ul>

            <?php }else{ ?>
              <ul class="sidebar-menu mt-3">
                <li class="menu-header">Dashboard</li>
                <?php $halaman = $this->uri->segment('1'); ?>
                <li><a class="nav-link" href="<?= base_url('dashboard')?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
                <li class="menu-header">Pengolahan Data Pemesanan</li>
                <li class="nav-item dropdown <?php if($halaman == 'data-pemesanan-homestay' || $halaman == 'data-pemesanan-souvenir' || $halaman == 'data-pemesanan-kuliner' || $halaman == 'data-pemesanan-karcis'){echo 'active';}?>">
                  <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-file"></i> <span>Data Pemesanan</span></a>
                  <ul class="dropdown-menu">
                    <li class="<?php if($halaman == 'data-pemesanan-homestay'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-pemesanan-homestay')?>">Pemesanan Home Stay</a></li>
                    <li class="<?php if($halaman == 'data-pemesanan-souvenir'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-pemesanan-souvenir')?>">Pemesanan Souvenir</a></li>
                    <li class="<?php if($halaman == 'data-pemesanan-kuliner'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-pemesanan-kuliner')?>">Pemesanan Kuliner</a></li>
                    <li class="<?php if($halaman == 'data-pemesanan-karcis'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-pemesanan-karcis')?>">Pemesanan Karcis</a></li>
                  </ul>
                </li>
                <!-- <li class = "<?php if($halaman == 'data-checkin-admin'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-checkin-admin')?>"><i class="fas fa-bell"></i> <span>Data Check In</span></a></li>
                <li class = "<?php if($halaman == 'data-checkout-admin'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-chcekout-admin')?>"><i class="fas fa-calendar-check"></i> <span>Data Check Out</span></a></li> -->
                <li class = "<?php if($halaman == 'data-pembayaran-admin'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('data-pembayaran-admin')?>"><i class="fas fa-credit-card"></i><span>Data Pembayaran</span></a></li>
                <li class="menu-header">Data Laporan</li>
                <li class="nav-item dropdown <?php if($halaman == 'laporan-pemesanan' ||$halaman == 'laporan-kunjungan'){echo 'active';}?>">
                  <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-file"></i> <span>Data Laporan</span></a>
                  <ul class="dropdown-menu">
                    <li class="<?php if($halaman == 'laporan-pembayaran'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('laporan-pembayaran')?>">Laporan Pembayaran</a></li>
                    <!-- <li class="<?php if($halaman == 'laporan-kunjungan'){echo 'active';}?>"><a class="nav-link" href="<?= base_url('laporan-kunjungan')?>">Laporan Kunjungan</a></li> -->
                  </ul>
                </li>
              </ul>
            <?php } ?>
        </aside>
      </div>
