<div class="page-wrapper">
        <header class="header header-intro-clearance header-4">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <a href="tel:#"><i class="icon-phone"></i>Call: +62824589334</a>
                    </div><!-- End .header-left -->

                    <div class="header-right">

                        <ul class="top-menu">
                            <li>
                                <a href="#">Links</a>
                                <ul>
                                    <?php if($this->session->userdata('id_member') == ""){ ?>
                                        <li><a href="#signin-modal" data-toggle="modal">Sign in / Sign up</a></li>
                                    <?php }else{ ?>
                                        <li><a href="<?= base_url('profile')?>"><i class="icon-heart-o"></i> <?= $this->session->userdata('nama_member')?></a></li>
                                        <li><a href="<?= base_url('auth/logout')?>"><i class="icon-user"></i>Logout</a></li>
                                    <?php } ?>
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->

                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>
                        
                        <a href="<?= base_url('')?>" class="logo">
                          <h3 class = "mt-2">E-Wisata</h3>
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="<?= base_url('pengunjung/data_souvenir/search')?>" method="POST">
                                <div class="header-search-wrapper search-wrapper-wide">
                                    <label for="q" class="sr-only">Search</label>
                                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                    <input type="search" class="form-control" name="search" id="q" placeholder="Search product ..." required>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                    </div>

                    <div class="header-right">
                    
                    </div>
                </div>
            </div>

            <div class="header-bottom sticky-header">
                <div class="container">
                    <div class="header-left">
                        <div class="dropdown category-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Browse Categories">
                                Browse Categories <i class="icon-angle-down"></i>
                            </a>

                            <div class="dropdown-menu">
                                <nav class="side-nav">
                                    <ul class="menu-vertical sf-arrows">
                                        <li><a href="<?= base_url('home-stay')?>">Home Stay</a></li>
                                        <li><a href="<?= base_url('kuliner')?>">Kuliner</a></li>
                                        <li><a href="<?= base_url('karcis')?>">Karcis</a></li>
                                    </ul><!-- End .menu-vertical -->
                                </nav><!-- End .side-nav -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .category-dropdown -->
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="<?= base_url('')?>">Home</a>

                                    
                                </li>
                                <li>
                                    <a href="" class="sf-with-ul">Layanan</a>

                                    <ul>
                                        <li><a href="<?= base_url('home-stay')?>">Home Stay</a></li>
                                        <li><a href="<?= base_url('kuliner')?>">Kuliner</a></li>
                                        <li><a href="<?= base_url('karcis')?>">Karcis</a></li>
                                    </ul>

                                </li>
                                <li>
                                    <a href="" class="sf-with-ul">Product</a>
                                    <ul>
                                        <li><a href="<?= base_url('souvenir')?>">Souvenir</a></li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="" class="sf-with-ul">Pemesanan</a>

                                    <ul>
                                        <li><a href="<?= base_url('pesanan-homestay')?>">Pemesanan Home Stay</a></li>
                                        <li><a href="<?= base_url('pesanan-karcis')?>">Pemesanan Karcis</a></li>
                                        <li><a href="<?= base_url('pesanan-kuliner')?>">Pemesanan Kuliner</a></li>
                                        <li><a href="<?= base_url('pesanan-souvenir')?>">Pemesanan Souvenir</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?= base_url('pembayaran')?>">Pembayaran</a>

                                    
                                </li>
                                <li>
                                    <a href="" class="sf-with-ul">Riwayat</a>

                                    <ul>
                                        <li><a href="<?= base_url('riwayat-homestay')?>">Riwayat Pemesanan Home Stay</a></li>
                                        <li><a href="<?= base_url('riwayat-pesanan-karcis')?>">Riwayat Pemesanan Karcis</a></li>
                                        <li><a href="<?= base_url('riwayat-pesanan-kuliner')?>">Riwayat Pemesanan Kuliner</a></li>
                                        <li><a href="<?= base_url('riwayat-pesanan-souvenir')?>">Riwayat Pemesanan Souvenir</a></li>
                                     
                                       
                                    </ul>
                                </li>
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-center -->

                    <div class="header-right">
                        <i class="la la-lightbulb-o"></i><p>Discount<span class="highlight">&nbsp;Up to 10%</span></p>
                    </div>
                </div><!-- End .container -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->