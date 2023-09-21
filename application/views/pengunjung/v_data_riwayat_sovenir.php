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
                                         
                                                <td><?= $value->status_pemesanan?></td>
                                               
                                                <td>
                                                <a href="<?= base_url('pengunjung/data_pembayaran/detail_pembayaran_souvenir/' . $value->id_pemesanan_souvenir) ?>" class="btn-custom btn-info btn-sm p-3"><i class="fas fa-eye"></i></a>
                                                
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
