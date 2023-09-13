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
            <h1 class="page-title" style = "color: white;font-weight: 600;"><?= $title?><span  style = "color: white;">Seluruh Data Pembayaran</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <div class="page-content mt-4">
            <div class="products">
               <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Data Pembayaran</h4>
                        <?php echo $this->session->flashdata('pesan') ?>
                        <ul class="nav nav-tabs nav-tabs-bg" id="tabs-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab-1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Pembayaran Home Stay</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Pembayaran Kuliner</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Pembayaran Sovenir</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-4-tab" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">Pembayaran Karcis</a>
                            </li>
                        </ul>
                        <div class="tab-content tab-content-border" id="tab-content-1">
                            <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1-tab">
                                <table class = "table table-hover">
                                    <thead>
                                        <tr class ="text-center">
                                            <th>No</th>
                                            <th>Pemesanan</th>
                                            <th>Home Stay</th>
                                            <th>Nama Bank</th>
                                            <th>Pembayaran</th>
                                            <th>Kategori</th>
                                            <th>Tanggal Pembayaran</th>
                                            <th>Status Pembayaran</th>
                                            <th>Bukti Bayar</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php $no = 1; 
                                            foreach ($data_pembayaran_homestay as $key => $value) { ?>
                                                <tr class ="text-center">
                                                    <td><?= $no++?></td>
                                                    <td><?= $value->nama_pemesan?></td>
                                                    <td><?= $value->nama_home_stay?></td>
                                                    <td><?= $value->nama_bank?></td>
                                                    <td>Rp. <?= number_format($value->pembayaran, 2)?></td>
                                                    <td><?= $value->kategori?></td>
                                                    <td><?= $value->tanggal_pembayaran?></td>
                                                    <td><?= $value->status_pemesanan?></td>
                                                    <td width = "10%" class ="text-center"><img src="<?= base_url()?>assets/img/pembayaran/<?= $value->bukti_bayar?>" alt="" width ="90%"></td>
                                                    <td>
                                                        <a href="<?= base_url('pengunjung/data_pembayaran/detail_pembayaran_homestay/' . $value->id_pembayaran) ?>" class="btn-custom btn-info btn-sm p-3"><i class="fas fa-eye"></i></a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2-tab">
                                <table class = "table table-hover">
                                    <thead>
                                        <tr class ="text-center">
                                            <th>No</th>
                                            <th>Pemesanan</th>
                                            <th>Keterangan</th>
                                            <th>Nama Bank</th>
                                            <th>Pembayaran</th>
                                            <th>Kategori</th>
                                            <th>Tanggal Pembayaran</th>
                                            <th>Status Pembayaran</th>
                                            <th>Bukti Bayar</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php $no = 1; 
                                            foreach ($data_pembayaran_kuliner as $key => $value) { ?>
                                                <tr class ="text-center">
                                                    <td><?= $no++?></td>
                                                    <td><?= $value->nama_pemesan?></td>
                                                    <td><?= $value->kategori?></td>
                                                    <td><?= $value->nama_bank?></td>
                                                    <td>Rp. <?= number_format($value->pembayaran, 2)?></td>
                                                    <td><?= $value->kategori?></td>
                                                    <td><?= $value->tanggal_pembayaran?></td>
                                                    <td><?= $value->status_pemesanan?></td>
                                                    <td width = "10%" class ="text-center"><img src="<?= base_url()?>assets/img/pembayaran/<?= $value->bukti_bayar?>" alt="" width ="90%"></td>
                                                    <td>
                                                        <a href="<?= base_url('pengunjung/data_pembayaran/detail_pembayaran_kuliner/' . $value->id_pembayaran) ?>" class="btn-custom btn-info btn-sm p-3"><i class="fas fa-eye"></i></a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3-tab">
                            <table class = "table table-hover">
                                    <thead>
                                        <tr class ="text-center">
                                            <th>No</th>
                                            <th>Pemesanan</th>
                                            <th>Keterangan</th>
                                            <th>Nama Bank</th>
                                            <th>Pembayaran</th>
                                            <th>Kategori</th>
                                            <th>Tanggal Pembayaran</th>
                                            <th>Status Pembayaran</th>
                                            <th>Bukti Bayar</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php $no = 1; 
                                            foreach ($data_pembayaran_souvenir as $key => $value) { ?>
                                                <tr class ="text-center">
                                                    <td><?= $no++?></td>
                                                    <td><?= $value->nama_pemesan?></td>
                                                    <td><?= $value->kategori?></td>
                                                    <td><?= $value->nama_bank?></td>
                                                    <td>Rp. <?= number_format($value->pembayaran, 2)?></td>
                                                    <td><?= $value->kategori?></td>
                                                    <td><?= $value->tanggal_pembayaran?></td>
                                                    <td><?= $value->status_pemesanan?></td>
                                                    <td width = "10%" class ="text-center"><img src="<?= base_url()?>assets/img/pembayaran/<?= $value->bukti_bayar?>" alt="" width ="90%"></td>
                                                    <td>
                                                        <a href="<?= base_url('pengunjung/data_pembayaran/detail_pembayaran_souvenir/' . $value->id_pembayaran) ?>" class="btn-custom btn-info btn-sm p-3"><i class="fas fa-eye"></i></a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab-4-tab">
                            <table class = "table table-hover">
                                    <thead>
                                        <tr class ="text-center">
                                            <th>No</th>
                                            <th>Pemesanan</th>
                                            <th>Keterangan</th>
                                            <th>Nama Bank</th>
                                            <th>Pembayaran</th>
                                            <th>Kategori</th>
                                            <th>Tanggal Pembayaran</th>
                                            <th>Status Pembayaran</th>
                                            <th>Bukti Bayar</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php $no = 1; 
                                            foreach ($data_pembayaran_karcis as $key => $value) { ?>
                                                <tr class ="text-center">
                                                    <td><?= $no++?></td>
                                                    <td><?= $value->nama_pemesan?></td>
                                                    <td><?= $value->kategori?></td>
                                                    <td><?= $value->nama_bank?></td>
                                                    <td>Rp. <?= number_format($value->pembayaran, 2)?></td>
                                                    <td><?= $value->kategori?></td>
                                                    <td><?= $value->tanggal_pembayaran?></td>
                                                    <td><?= $value->status_pemesanan?></td>
                                                    <td width = "10%" class ="text-center"><img src="<?= base_url()?>assets/img/pembayaran/<?= $value->bukti_bayar?>" alt="" width ="90%"></td>
                                                    <td>
                                                        <a href="<?= base_url('pengunjung/data_pembayaran/detail_pembayaran_karcis/' . $value->id_pembayaran) ?>" class="btn-custom btn-info btn-sm p-3"><i class="fas fa-eye"></i></a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!-- .End .tab-pane -->
                        </div><!-- End .tab-content -->
                
                        
                           
                        </div>
                    </div><!-- End .row -->                   
               </div>
            </div><!-- End .products -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->
