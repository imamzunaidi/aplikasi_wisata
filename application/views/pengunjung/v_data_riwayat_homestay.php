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
                                        <th>Home Stay</th>
                                        <th>No Telp</th>
                                        <th>Nama Penerima</th>
                                        <th>Total Harga</th>
                                        <th>Tanggal</th>
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
                                            <td><?= $value->status_pemesanan?></td>
                                            <td>
                                                <a href="<?= base_url('pengunjung/Data_riwayat_homestay/detail_pembayaran_homestay/' . $value->id_pemesanan_homestay) ?>" class="btn-custom btn-info btn-sm p-3"><i class="fas fa-eye"></i></a>
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
