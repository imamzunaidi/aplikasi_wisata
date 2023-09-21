<style>
    .product-image1{
        display: block;
        width: 100%;
        height: 194px;
    }
</style>

<main class="main">
    <div class="page-header text-center" style="background: linear-gradient(rgba(20, 20, 31, .7), rgba(20, 20, 31, .2)), url(<?= base_url('assets_pengunjung/')?>assets/images/gambar4.jpeg);">
        <div class="container">
            <h1 class="page-title" style="color: white !important; font-weight: 600; !important">Data <span style = "color: white !important;"><?= $title?></span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <div class="page-content mt-4">
        <div class="container">
                <form action="<?= base_url('pengunjung/data_kuliner/search')?>" method="post">
                    <div class="toolbox-info">
                        <div class="row">
                           <div class="col-md-8">
                                <input type="text" name = "search" class = "form-control" placeholder = "search .. ">
                           </div>
                           <div class="col-md-2">
                                <button type ="submit" class = "btn btn-primary">Search</button>
                           </div>
                           <div class="col-md-2">
                                <a href="<?= base_url('kuliner')?>" class = "btn btn-danger">Reset</a>
                           </div>
                        </div>
                </form>
            </div><!-- End .toolbox -->

            <div class="products mt-2">
                <div class="row">
                    <?php foreach ($data_kuliner as $key => $value) { ?>
                        <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="<?= base_url('assets/img/kuliner/'.$value->gambar_kuliner)?>" alt="Product image" class="product-image1">
                                    </a>
    
                                    <div class="product-action action-icon-top">
                                        <a href="<?= base_url('pengunjung/data_kuliner/detail/'.$value->id_kuliner)?>" class="btn-product" title="Quick view"><span><?= $value->nama_kuliner?></span></a>
                                        <a href="<?= base_url('pengunjung/data_kuliner/detail/'.$value->id_kuliner)?>" class="btn-product" title="Compare"><span>Detail</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->
                                
                                <div class="product-body">
                     
                                    <h3 class="product-title"><a href="<?= base_url('pengunjung/data_kuliner/detail/' . $value->id_kuliner) ?>"><?= $value->nama_kuliner?></a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        Rp. <?= number_format($value->harga_kuliner, 0)?>
                                    </div><!-- End .product-price -->
                                    <div class="text-center">
                                        <form action="<?= base_url('pengunjung/data_pemesanan_kuliner/add_kuliner')?>" method="post">
                                            <input type="hidden" name = "id_kuliner" value = "<?= $value->id_kuliner?>">
                                            <input type="hidden" name = "qty" value = "1">
                                            <button type="submit" class="btn btn-sm btn-primary swalDefaultSuccess">
                                                <i class="fas fa-cart-plus"></i> Pemesanan
                                            </button>
                                            
                                        </form>
                                    </div>
                                    
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        
                        </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->
                    <?php  }?>
                </div><!-- End .row -->                    
            </div><!-- End .products -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->
