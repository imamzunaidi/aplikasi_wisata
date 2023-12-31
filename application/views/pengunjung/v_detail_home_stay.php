<main class="main">
    <div class="page-header text-center" style="background: linear-gradient(rgba(20, 20, 31, .7), rgba(20, 20, 31, .2)), url(<?= base_url('assets_pengunjung/')?>assets/images/bg-hero.jpg);">
        <div class="container">
            <h1 class="page-title" style="color: white !important; font-weight: 600; !important">Detail<span style = "color: white !important;"><?= $title?></span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <div class="page-content mt-5">
        <div class="container">
            <div class="product-details-top">
                <div class="row">
                    <div class="col-md-6">
                        <div class="product-gallery product-gallery-vertical">
                            <figure class="product-main-image" >
                                <img style = "width: 127%; !important" id="product-zoom" src="<?= base_url('assets/img/homestay/'.$detail_home_stay->gambar_home_stay)?>" data-zoom-image="<?= base_url('assets/img/homestay/'.$detail_home_stay->gambar_home_stay)?>" alt="product image">

                                <!-- <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                    <i class="icon-arrows"></i>
                                </a> -->
                            </figure><!-- End .product-main-image -->
                            
                        </div><!-- End .product-gallery -->
                    </div><!-- End .col-md-6 -->

                    <div class="col-md-6">
                        <div class="product-details">
                           <div class="row">
                                <div class="col-md-9">
                                    <h1 class="product-title"><?= $detail_home_stay->nama_home_stay?></h1>
                                </div>
                                <div class="col-md-3 text-right">
                                   Max : <b class=""><?= $detail_home_stay->maximal_home_stay?> Orang </b>
                                </div>
                           </div>
                            <!-- End .product-title -->
                            <div class="product-price">
                               Rp. <?= number_format($detail_home_stay->harga_home_stay,0)?>
                            </div><!-- End .product-price -->
                            <b>Alamat</b>
                            <div class="product-content">
                                <p><?= $detail_home_stay->alamat_home_stay?> </p>
                            </div>

                            <b>Deskripsi</b>
                            <div class="product-content">
                                <p><?= $detail_home_stay->deskripsi_home_stay?> </p>
                            </div>
                            <div class="product-details-action">
                               <a href="<?= base_url('pengunjung/Data_pemesanan_homestay/pemesanan/'.$detail_home_stay->id_home_stay)?>"  class="btn btn-sm btn-primary  swalDefaultSuccess">  <i class="fas fa-cart-plus"></i> Pemesanan</a>
                                
                            </div><!-- End .product-details-action -->
                        </div><!-- End .product-details -->
                    </div><!-- End .col-md-6 -->
                </div><!-- End .row -->
            </div><!-- End .product-details-top -->

            
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->