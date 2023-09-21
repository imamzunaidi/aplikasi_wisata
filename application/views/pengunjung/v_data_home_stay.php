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
                <form action="<?= base_url('pengunjung/data_homestay/search')?>" method="post">
                    <div class="toolbox-info">
                        <div class="row">
                           <div class="col-md-8">
                                <input type="text" name = "search" class = "form-control" placeholder = "search .. ">
                           </div>
                           <div class="col-md-2">
                                <button type ="submit" class = "btn btn-primary">Search</button>
                           </div>
                           <div class="col-md-2">
                                <a href="<?= base_url('home-stay')?>" class = "btn btn-danger">Reset</a>
                           </div>
                        </div>
                </form>
            </div><!-- End .toolbox -->

            <div class="products">
                <div class="row">
                    <?php foreach ($data_homestay as $key => $value) { ?>
                        <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="<?= base_url('assets/img/homestay/'.$value->gambar_home_stay)?>" alt="Product image" class="product-image1">
                                    </a>
    
                                    <div class="product-action action-icon-top">
                        
                                        <a href="<?= base_url('pengunjung/data_homestay/detail/'.$value->id_home_stay)?>" class="btn-product" title="Quick view"><span>Max : <?= $value->maximal_home_stay?></span></a>
                                        <a href="<?= base_url('pengunjung/data_homestay/detail/'.$value->id_home_stay)?>" class="btn-product" title="Compare"><span>Detail</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->
                              
                                <div class="product-body">
                                   
                                    <h3 class="product-title"><a href="<?= base_url('pengunjung/data_homestay/detail_home_stay/' . $value->id_home_stay) ?>"><?= $value->nama_home_stay?></a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        Rp. <?= number_format($value->harga_home_stay, 0)?>
                                    </div><!-- End .product-price -->
                                    <a href="<?= base_url('pengunjung/Data_pemesanan_homestay/pemesanan/'.$value->id_home_stay)?>" class="btn btn-sm btn-primary ml-5 swalDefaultSuccess">Pemesanan</a>
                                    
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->
                    <?php  }?>
                </div><!-- End .row -->                    
            </div><!-- End .products -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->
