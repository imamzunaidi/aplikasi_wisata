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
            <h1 class="page-title" style = "color: white;font-weight: 600;"><?= $title?><span  style = "color: white;">Data Pemesanan Pembeli</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <div class="page-content mt-4">
        <div class="products">
            <div class="container">
                <a href="<?= base_url('pengunjung/data_pemesanan_souvenir/pemesanan')?>" class = "btn btn-primary btn-rounded">Pemesanan</a>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <?php echo $this->session->flashdata('pesan') ?>
                            <table class = "table table-hover">
                                <thead>
                                    <tr class ="text-center">
                                        <th>No</th>
                                        <th>Pemesanan</th>
                                        <th>No Telp</th>
                                        <th>Total</th>
                                        <th>Tanggal</th>
                                        <th>Batas Pemesanan</th>
                                        <th>Status Pemesanan</th>
                                       
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php $no = 1; 
                                        foreach ($data_pemesanan_souvenir as $key => $value) { ?>
                                            <tr class ="text-center">
                                                <td><?= $no++?></td>
                                                <td><?= $value->nama_pemesan?></td>
                                                <td><?= $value->no_telp_pemesan?></td>
                                                <td><?= $value->total_harga?></td>
                                                <td><?= $value->tanggal_pemesanan?></td>
                                                <td><?= $value->batas_pemesanan?></td>
                                                <td>
                                                    <?php if (date('Y-m-d H:i:s') >= $value->batas_pemesanan AND $value->status_pemesanan != 'lunas') { ?>
                                                        Kadaluarsa
                                                    <?php }else{ ?>
                                                        <?= $value->status_pemesanan?>
                                                    <?php } ?>
                                                </td>
                                               
                                                <td>
                                                    <?php if (date('Y-m-d H:i:s') >= $value->batas_pemesanan AND $value->status_pemesanan != 'lunas') { ?>
                                                    -
                                                    <?php }else{ ?>
                                                        <?php if( $value->status_pemesanan == 'lakukan pembayaran'){ ?>
                                                            <a href="<?= base_url('pengunjung/data_pemesanan_souvenir/detail_pemesanan/' . $value->id_pemesanan_souvenir) ?>" class="btn-custom btn-info btn-sm p-3"><i class="fas fa-eye"></i></a>
                                                            <a href="<?= base_url('pengunjung/data_pemesanan_souvenir/delete_pemesanan/' . $value->id_pemesanan_souvenir) ?>" class="btn-custom btn-danger btn-sm p-3"><i class="fas fa-trash"></i></a>
                                                            <!-- <a href="<?= base_url('pengunjung/data_pemesanan_souvenir/pembayaran/' . $value->id_pemesanan_souvenir)?>" class="btn-custom btn-success btn-sm p-3"><i class="fas fa-hand-holding-usd"></i></i></a> -->
                                                        <?php }else if( $value->status_pemesanan != 'menunggu konfirmasi'){ ?>
                                                            <a href="<?= base_url('pengunjung/data_pemesanan_souvenir/detail_pemesanan/' . $value->id_pemesanan_souvenir) ?>" class="btn-custom btn-info btn-sm p-3"><i class="fas fa-eye"></i></a>
                                                        <?php } ?>
                                                    <?php } ?> 
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div><!-- End .row -->                   
               </div>
            </div><!-- End .products -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->
