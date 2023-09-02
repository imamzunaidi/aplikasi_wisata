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
                                <img style = "width: 127%; !important" id="product-zoom" src="<?= base_url('assets/img/souvenir/'.$detail_souvenir->gambar_souvenir)?>" data-zoom-image="<?= base_url('assets/img/souvenir/'.$detail_souvenir->gambar_souvenir)?>" alt="product image">

                                <!-- <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                    <i class="icon-arrows"></i>
                                </a> -->
                            </figure><!-- End .product-main-image -->
                            
                        </div><!-- End .product-gallery -->
                    </div><!-- End .col-md-6 -->

                    <div class="col-md-6">
                        <div class="product-details">
                           <div class="row">
                                <div class="col-md-12">
                                    <h1 class="product-title"><?= $detail_souvenir->nama_souvenir?></h1>
                                </div>
                                <!-- <div class="col-md-3 text-right">
                                   Max : <b class=""><?= $detail_souvenir->maximal_souvenir?> Orang </b>
                                </div> -->
                           </div>
                            <!-- End .product-title -->
                            <div class="product-price">
                               Rp. <?= number_format($detail_souvenir->harga_souvenir,0)?>
                            </div><!-- End .product-price -->
                        
                            <div class="product-content">
                                <p><?= $detail_souvenir->deskripsi_souvenir?> </p>
                            </div>
                            <div class="product-details-action">
                                <?php 
                                    echo form_open('pembeli/barang/add_keranjang');
                                    echo form_hidden('id', $detail_souvenir->id_souvenir );
                                    echo form_hidden('qty', 1);
                                    echo form_hidden('price', $detail_souvenir->harga_souvenir);
                                    echo form_hidden('name', $detail_souvenir->nama_souvenir);
                                    echo form_hidden('redirect_page', str_replace('index.php/','', current_url()));
                                ?>
                                <button type = "submit" class="btn btn-sm btn-primary  swalDefaultSuccess">
                                    <i class="fas fa-cart-plus"></i> Pemesanan
                                </button>
                                <?php echo form_close();?>
                            </div><!-- End .product-details-action -->
                        </div><!-- End .product-details -->
                    </div><!-- End .col-md-6 -->
                </div><!-- End .row -->
            </div><!-- End .product-details-top -->

            
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->