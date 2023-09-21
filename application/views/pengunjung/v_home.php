<style>
    .owl-theme.owl-light .owl-nav [class*='owl-'] {
        border-color: rgba(255,255,255,0.7);
        background: transparent !important;
        color: #ccc;
    }
</style>
<main class="main">
    <?php echo $this->session->flashdata('pesan') ?>
    <div class="intro-slider-container mb-5">
        <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl" 
            data-owl-options='{
                "dots": true,
                "nav": false, 
                "responsive": {
                    "1200": {
                        "nav": true,
                        "dots": false
                    }
                }
            }'>
            <div class="intro-slide" style=" background: linear-gradient(rgba(20, 20, 31, .7), rgba(20, 20, 31, .2)), url(<?= base_url('assets_pengunjung/')?>assets/images/gambar1.jpeg);">
                <div class="container intro-content">
                    <div class="row justify-content-end">
                        <div class="col-auto col-sm-7 col-md-6 col-lg-5">
                            <h3 class="intro-subtitle text-third"  style = "color: white;">Paket Wisata</h3><!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title" style = "color: white;">Cintai</h1>
                            <h1 class="intro-title"  style = "color: white;">Pariwisata di Sekitar Kita</h1><!-- End .intro-title -->

                            <a href="<?= base_url('home-stay')?>" class="btn btn-primary btn-round">
                                <span>Home Stay</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                        </div><!-- End .col-lg-11 offset-lg-1 -->
                    </div><!-- End .row -->
                </div><!-- End .intro-content -->
            </div><!-- End .intro-slide -->

            <div class="intro-slide" style=" background: linear-gradient(rgba(20, 20, 31, .7), rgba(20, 20, 31, .2)), url(<?= base_url('assets_pengunjung/')?>assets/images/bg-hero1.jpg);">
                <div class="container intro-content">
                    <div class="row justify-content-end">
                        <div class="col-auto col-sm-7 col-md-6 col-lg-5">
                            <h3 class="intro-subtitle text-primary">Dapatkan</h3><!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title"  style = "color: white;">Souvenir Cantik  </h1><!-- End .intro-title -->
                            <h1 class="intro-title"  style = "color: white;">Segera Beli</h1>
                            <a href="<?= base_url('souvenir')?>" class="btn btn-primary btn-round">
                                <span>Souvenir</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                        </div><!-- End .col-md-6 offset-md-6 -->
                    </div><!-- End .row -->
                </div><!-- End .intro-content -->
            </div><!-- End .intro-slide -->
        </div><!-- End .intro-slider owl-carousel owl-simple -->

        <span class="slider-loader"></span><!-- End .slider-loader -->
    </div><!-- End .intro-slider-container -->

    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-3 mb-lg-0">
                <h2 class="title">Our Vision</h2><!-- End .title -->
                <p><?= $profile->visi?> </p>
            </div><!-- End .col-lg-6 -->
            
            <div class="col-lg-6">
                <h2 class="title">Our Mission</h2><!-- End .title -->
                <p><?= $profile->misi?> </p>
            </div><!-- End .col-lg-6 -->
        </div>
        <div class="mb-5"></div><!-- End .mb-4 -->
    </div><!-- End .container -->
    <div class="bg-light-2 pt-6 pb-5 mb-6 mb-lg-8">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mb-3 mb-lg-0">
                    <h2 class="title">Abot Me</h2><!-- End .title -->
                    <p class="mb-2"> <?= $profile->deskripsi ?> </p>

                    <!-- <a href="blog.html" class="btn btn-sm btn-minwidth btn-outline-primary-2">
                        <span>VIEW OUR NEWS</span>
                        <i class="icon-long-arrow-right"></i>
                    </a> -->
                </div><!-- End .col-lg-5 -->

                <div class="col-lg-6 offset-lg-1">
                    <div class="about-images">
                        <img src="<?= base_url('assets/img/profile/'.$profile->gambar)?>" alt="" class="about-img-front">
               
                    </div><!-- End .about-images -->
                </div><!-- End .col-lg-6 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .bg-light-2 pt-6 pb-6 -->

    <div class="container">
        <h2 class="title text-center mb-4">Data Home Stay</h2><!-- End .title text-center -->
        
        <div class="cat-blocks-container">
            <div class="row">
                <?php foreach ($data_homestay as $key => $value) { ?>
                    <div class="col-6 col-sm-4 col-lg-2">
                        <a href="<?= base_url('pengunjung/Data_pemesanan_homestay/pemesanan/'.$value->id_home_stay)?>" class="cat-block">
                            <figure>
                                <span>
                                    <img src="<?= base_url()?>assets/img/homestay/<?= $value->gambar_home_stay?>" alt="Category image">
                                </span>
                            </figure>
                            <h3 class="cat-block-title"><?= $value->nama_home_stay?></h3>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="mb-5"></div><!-- End .mb-5 -->

    <div class="container for-you">
        <div class="heading heading-flex mb-3">
            <div class="heading-left">
                <h2 class="title">Data Souvenir</h2><!-- End .title -->
            </div><!-- End .heading-left -->

            <div class="heading-right">
                <a href="#<?= base_url('data-souvenir')?>" class="title-link">View All Souvenir <i class="icon-long-arrow-right"></i></a>
            </div><!-- End .heading-right -->
        </div><!-- End .heading -->

        <div class="products">
            <div class="row justify-content-center">
                <?php foreach ($data_souvenir as $key => $value) { ?>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product product-2">
                            <figure class="product-media">
                        
                                <a href="<?= base_url('pengunjung/data_souvenir/detail/'.$value->id_souvenir)?>">
                                    <img src="<?= base_url()?>assets/img/souvenir/<?= $value->gambar_souvenir?>" alt="Product image" class="product-image" style = "height: 200px; !important">
                                </a>
    
                              
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                    <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>Detail</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->
    
                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Headphones</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="<?= base_url('pengunjung/data_souvenir/detail/'.$value->id_souvenir)?>"><?= $value->nama_souvenir?></a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">Rp. <?= number_format($value->harga_souvenir)?></span>
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                   
                <?php } ?>

            </div><!-- End .row -->
        </div><!-- End .products -->
    </div><!-- End .container -->
    <hr class="mt-3 mb-5">
    
    <div class="container">
        <div class="heading heading-flex mb-3">
            <div class="heading-left">
                <h2 class="title">Data Kuliner</h2><!-- End .title -->
            </div><!-- End .heading-left -->
    
            <div class="heading-right">
                <a href="<?= base_url('data-kuliner')?>" class="title-link">View All Kuliner <i class="icon-long-arrow-right"></i></a>
            </div><!-- End .heading-right -->
        </div><!-- End .heading -->
        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
            data-owl-options='{
                "nav": false, 
                "dots": false,
                "margin": 20,
                "loop": false,
                "responsive": {
                    "0": {
                        "items":2
                    },
                    "480": {
                        "items":2
                    },
                    "992": {
                        "items":3
                    },
                    "1200": {
                        "items":4
                    }
                }
            }'>
            <?php foreach ($data_kuliner as $key => $value) { ?>
                <div class="product product-2">
                    <figure class="product-media">
                        <a href="<?= base_url('pengunjung/data_kuliner/detail/'.$value->id_kuliner)?>">
                            <img src="<?= base_url()?>assets/img/kuliner/<?= $value->gambar_kuliner?>" alt="Product image" class="product-image">
                        </a>
        
                 
                        <div class="product-action product-action-dark">
                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            <a href="<?= base_url('pengunjung/data_kuliner/detail/'.$value->id_kuliner)?>" class="btn-product " title="Quick view"><span>Detail</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->
        
                    <div class="product-body">
                       
                        <h3 class="product-title"><a href="<?= base_url('pengunjung/data_kuliner/detail/'.$value->id_kuliner)?>"><?= $value->nama_kuliner?></a></h3><!-- End .product-title -->
                        <div class="product-price">
                            Rp. <?= number_format($value->harga_kuliner)?>
                        </div><!-- End .product-price -->
                        
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
            
            <?php } ?>

        
        </div><!-- End .owl-carousel -->
    </div>
    <div class="container new-arrivals mt-3">
        <div class="heading-left">
            <h2 class="title">Data Tiket</h2><!-- End .title -->
        </div><!-- End .heading-left -->
        <div class="heading heading-flex mb-3">
        
            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                data-owl-options='{
                    "nav": true, 
                    "dots": true,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":2
                        },
                        "480": {
                            "items":2
                        },
                        "768": {
                            "items":3
                        },
                        "992": {
                            "items":4
                        },
                        "1200": {
                            "items":5
                        }
                    }
                }'>
            <?php foreach ($data_karcis as $key => $value) { ?>
                <div class="product product-2">
                    <figure class="product-media">
                       
                        <a href="<?= base_url('pengunjung/data_karcis/detail/'.$value->id_karcis)?>">
                            <img src="<?= base_url()?>assets/img/karcis/<?= $value->gambar_karcis?>" alt="Product image" class="product-image">
                        </a>
    
                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->
    
                    <div class="product-body">
                        <h3 class="product-title"><a href="product.html"><?= $value->nama_karcis?></a></h3><!-- End .product-title -->
                        <div class="product-price">
                            Rp. <?= number_format($value->harga_karcis)?>
                        </div><!-- End .product-price -->
                        
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
                
            <?php } ?>
        </div><!-- End .owl-carousel -->
    </div><!-- End .container -->



    <div class="container">
        <hr class="mb-0">
    </div><!-- End .container -->

</main><!-- End .main -->