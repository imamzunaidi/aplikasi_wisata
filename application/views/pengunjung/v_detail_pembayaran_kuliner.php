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
            <h1 class="page-title" style = "color: white;font-weight: 600;"><?= $title?><span  style = "color: white;">Data Pembayaran Pengunjung</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <div class="page-content mt-4">
            <div class="products">
               <div class="container">
                
                <?php echo $this->session->flashdata('pesan') ?>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12 mt-2">
                                        <h5>Data Pemesan</h5>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Nama *</label>
                                        <input type="text" class="form-control" name = "nama_pemesan" value = "<?= $detail_pembayaran_kuliner->nama_pemesan?>" required readonly>
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-6">
                                        <label>No Telp Member *</label>
                                        <input type="text" class="form-control" name = "no_telp_pemesan" value = "<?= $detail_pembayaran_kuliner->no_telp_pemesan?>" required readonly>
                                    </div><!-- End .col-sm-6 -->
                                    <div class="col-sm-6">
                                        <label>Email *</label>
                                        <input type="text" class="form-control" name = "nama_pemesan" value = "<?= $detail_pembayaran_kuliner->email_member?>" required readonly>
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-6">
                                        <label>No Telp Member *</label>
                                        <input type="text" class="form-control" name = "no_telp_pemesan" value = "<?= $detail_pembayaran_kuliner->alamat_member?>" required readonly>
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->
                        
                                <h2 class="checkout-title">Data Kuliner</h2><!-- End .checkout-title -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class ="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class = "text-center">Qty</th>
                                                    <th class = "text-center">Kuliner</th>
                                                    <th style="text-align:right">Harga</th>
                                                    <th style="text-align:right">Sub Total</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; $total = 0;?>
                                                <?php foreach ($detail_pemesanan as $items): 
                                                    $total += $items->subtotal;
                                                    ?>
                                                    <tr>
                                                        <td class = "text-center"><?= $items->qty ?></td>
                                                        <td class = "text-center" width = "30%"><?php echo $items->nama_kuliner; ?></td>
                                                        <td style="text-align:right"><?php echo number_format($items->harga_kuliner, 0); ?></td>
                                                        <td style="text-align:right">Rp. <?php echo number_format($items->subtotal, 0); ?></td>
                                                       
                                                    </tr>
                                                    <?php $i++; ?>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- End .row -->
                            </div>
                            <div class="col-md-4">

                                <h5 class = "mt-2">Bukti Pembayaran</h5>
                                <form action="<?= base_url('pengunjung/Data_pembayaran/pembayaran_homestay')?>" method="post"  enctype="multipart/form-data">
                                    
                                    <div class="form-group">
                                        <label for="">Tagihan</label>
                                        <input type="number" name="pembayaran" id="" class="form-control" value = "<?= $detail_pembayaran_kuliner->total_harga?>" placeholder="" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Pembayaran</label>
                                        <img src="<?= base_url()?>assets/img/pembayaran/<?= $detail_pembayaran_kuliner->bukti_bayar?>" alt="" width ="100%">
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div><!-- End .row -->                   
                </div>
            </div><!-- End .products -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->
