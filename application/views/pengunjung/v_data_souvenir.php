<style>
    .product-image1{
        display: block;
        width: 100%;
        height: 194px;
    }
</style>

<main class="main">
    <div class="page-header text-center" style="background: linear-gradient(rgba(20, 20, 31, .7), rgba(20, 20, 31, .2)), url(<?= base_url('assets_pengunjung/')?>assets/images/bg-hero.jpg);">
        <div class="container">
            <h1 class="page-title" style="color: white !important; font-weight: 600; !important">Data <span style = "color: white !important;"><?= $title?></span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <div class="page-content mt-4">
        <div class="container">
                <form action="<?= base_url('pengunjung/data_souvenir/search')?>" method="post">
                    <div class="toolbox-info">
                        <div class="row">
                           <div class="col-md-8">
                                <input type="text" name = "search" class = "form-control" placeholder = "search .. ">
                           </div>
                           <div class="col-md-2">
                                <button type ="submit" class = "btn btn-primary">Search</button>
                           </div>
                           <div class="col-md-2">
                                <a href="<?= base_url('souvenir')?>" class = "btn btn-danger">Reset</a>
                           </div>
                        </div>
                </form>
            </div><!-- End .toolbox -->

            <div class="products mt-2">
                <div class="row">
                    <?php foreach ($data_souvenir as $key => $value) { ?>
                        <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="<?= base_url('assets/img/souvenir/'.$value->gambar_souvenir)?>" alt="Product image" class="product-image1">
                                    </a>
    
                                    <div class="product-action action-icon-top">
                                        <a href="<?= base_url('pengunjung/data_souvenir/detail/'.$value->id_souvenir)?>" class="btn-product" title="Quick view"><span><?= $value->nama_souvenir?></span></a>
                                        <a href="<?= base_url('pengunjung/data_souvenir/detail/'.$value->id_souvenir)?>" class="btn-product" title="Compare"><span>Detail</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->
                                <?php 
                                        echo form_open('pengunjung/souvenir/add_keranjang');
                                        echo form_hidden('id', $value->id_souvenir );
                                        echo form_hidden('qty', 1);
                                        echo form_hidden('price', $value->harga_souvenir);
                                        echo form_hidden('name', $value->nama_souvenir);
                                        echo form_hidden('redirect_page', str_replace('index.php/','', current_url()));
                                    ?>
                                <div class="product-body">
                     
                                    <h3 class="product-title"><a href="<?= base_url('pengunjung/data_souvenir/detail/' . $value->id_souvenir) ?>"><?= $value->nama_souvenir?></a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        Rp. <?= number_format($value->harga_souvenir, 0)?>
                                    </div><!-- End .product-price -->
                                    <button type = "submit" class="swalDefaultSuccess btn btn-outline-primary btn-rounded" style = "width: 100%;">
                                        <i class="fas fa-cart-plus"></i> add to cart
                                    </button>
                                    
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                            <?php echo form_close();?>
                        </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->
                    <?php  }?>
                </div><!-- End .row -->                    
            </div><!-- End .products -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->
