<style>
    .product-image1{
        display: block;
        width: 100%;
        height: 194px;
    }
</style>
<?php 
 date_default_timezone_set('Asia/Jakarta');
?>
<main class="main">
    <div class="page-header text-center" style="background: linear-gradient(rgba(20, 20, 31, .7), rgba(20, 20, 31, .2)), url(<?= base_url('assets_pengunjung/')?>assets/images/bg-hero.jpg);">
        <div class="container">
            <h1 class="page-title" style = "color: white;font-weight: 600;"><?= $title?><span  style = "color: white;">Data Pemesanan Pembeli</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <div class="page-content mt-4">
            <div class="products">
               <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php echo $this->session->flashdata('pesan') ?>
                            <table class = "table table-hover">
                                <thead>
                                    <tr class ="text-center">
                                        <th>No</th>
                                        <th>Pemesanan</th>
                                        <th>Home Stay</th>
                                        <th>No Telp</th>
                                        <th>Nama Penerima</th>
                                        <th>Total Harga</th>
                                        <th>Tanggal</th>
                                        <th>Batas</th>
                                        <th>Status Pemesanan</th>
                                       
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                            
                                    <?php $no = 1; 
                                    foreach ($data_pemesanan_homestay as $key => $value) { ?>
                                        <tr class ="text-center">
                                            <td><?= $no++?></td>
                                            <td><?= $value->nama_pemesan?></td>
                                            <td><?= $value->nama_home_stay?></td>
                                            <td><?= $value->no_telp_pemesan?></td>
                                            <td><?= $value->nama_member?></td>
                                            <td><?= $value->total_harga?></td>
                                            <td><?= $value->tanggal_pemesan?></td>
                                            <td><?= $value->batas_pemesanan?></td>
                                            <td>
                                            <?php if (date('Y-m-d H:i:s') >= $value->batas_pemesanan AND $value->status_pemesanan != 'lunas') { ?>
                                            
                                            <?php }else{ ?>
                                                <?= $value->status_pemesanan?></td>
                                            <?php } ?>
                                            <td>
                                                <?php if (date('Y-m-d H:i:s') >= $value->batas_pemesanan AND $value->status_pemesanan != 'lunas') { ?>
                                                 -
                                                <?php }else{ ?>
                                                    <?php if( $value->status_pemesanan == 'menunggu konfirmasi'){ ?>
                                                        <a href="<?= base_url('pengunjung/data_pemesanan_homestay/delete_pemesanan/' . $value->id_pemesanan_homestay) ?>" class="btn-custom btn-danger btn-sm p-3"><i class="fas fa-trash"></i></a>
                                                
                                                    <?php }?>
                                                    <a href="<?= base_url('pengunjung/data_pemesanan_homestay/detail_pemesanan/' . $value->id_pemesanan_homestay) ?>" class="btn-custom btn-info btn-sm p-3"><i class="fas fa-eye"></i></a>
                                                <?php } ?> 
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div><!-- End .row -->                   
               </div>
            </div><!-- End .products -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->
