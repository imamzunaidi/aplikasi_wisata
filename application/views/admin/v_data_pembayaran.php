<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $title ?></h1>
    </div>
   
    <?php echo $this->session->flashdata('pesan') ?>
    <div class="section-body">
      <div class="card table-responsive">
        <div class="card-body ">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Data Pembayaran Home Stay</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Data Pembayaran Kuliner</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Data Pembayaran Souvenir</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#souvenir" role="tab" aria-controls="souvenir" aria-selected="false">Data Pembbayaran Karcis</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <table class="table table-hover" id="data_tabel">
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
                           
                        </tr>
                    </thead>
                    <tbody>
                      
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
                                </tr>
                            <?php } ?>
                    </tbody>
                </table>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <table class="table table-hover" id="data_tabel">
                        <thead>
                            <tr class ="text-center">
                                <th>No</th>
                                <th>Pemesanan</th>
                           
                                <th>Nama Bank</th>
                                <th>Pembayaran</th>
                                <th>Kategori</th>
                                <th>Tanggal Pembayaran</th>
                                <th>Status Pembayaran</th>
                                <th>Bukti Bayar</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; 
                            foreach ($data_pembayaran_kuliner as $key => $value) { ?>
                                <tr class ="text-center">
                                    <td><?= $no++?></td>
                                    <td><?= $value->nama_pemesan?></td>
                               
                                    <td><?= $value->nama_bank?></td>
                                    <td>Rp. <?= number_format($value->pembayaran, 2)?></td>
                                    <td><?= $value->kategori?></td>
                                    <td><?= $value->tanggal_pembayaran?></td>
                                    <td><?= $value->status_pemesanan?></td>
                                    <td width = "10%" class ="text-center"><img src="<?= base_url()?>assets/img/pembayaran/<?= $value->bukti_bayar?>" alt="" width ="90%"></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <table class="table table-hover" id="data_tabel">
                        <thead>
                            <tr class ="text-center">
                                <th>No</th>
                                <th>Pemesanan</th>
                                
                                <th>Nama Bank</th>
                                <th>Pembayaran</th>
                                <th>Kategori</th>
                                <th>Tanggal Pembayaran</th>
                                <th>Status Pembayaran</th>
                                <th>Bukti Bayar</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; 
                            foreach ($data_pembayaran_souvenir as $key => $value) { ?>
                                <tr class ="text-center">
                                    <td><?= $no++?></td>
                                    <td><?= $value->nama_pemesan?></td>
                               
                                    <td><?= $value->nama_bank?></td>
                                    <td>Rp. <?= number_format($value->pembayaran, 2)?></td>
                                    <td><?= $value->kategori?></td>
                                    <td><?= $value->tanggal_pembayaran?></td>
                                    <td><?= $value->status_pemesanan?></td>
                                    <td width = "10%" class ="text-center"><img src="<?= base_url()?>assets/img/pembayaran/<?= $value->bukti_bayar?>" alt="" width ="90%"></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="souvenir" role="tabpanel" aria-labelledby="contact-tab">
                <table class="table table-hover" id="data_tabel">
                        <thead>
                            <tr class ="text-center">
                                <th>No</th>
                                <th>Pemesanan</th>
                              
                                <th>Nama Bank</th>
                                <th>Pembayaran</th>
                                <th>Kategori</th>
                                <th>Tanggal Pembayaran</th>
                                <th>Status Pembayaran</th>
                                <th>Bukti Bayar</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; 
                            foreach ($data_pembayaran_karcis as $key => $value) { ?>
                                <tr class ="text-center">
                                    <td><?= $no++?></td>
                                    <td><?= $value->nama_pemesan?></td>
                              
                                    <td><?= $value->nama_bank?></td>
                                    <td>Rp. <?= number_format($value->pembayaran, 2)?></td>
                                    <td><?= $value->kategori?></td>
                                    <td><?= $value->tanggal_pembayaran?></td>
                                    <td><?= $value->status_pemesanan?></td>
                                    <td width = "10%" class ="text-center"><img src="<?= base_url()?>assets/img/pembayaran/<?= $value->bukti_bayar?>" alt="" width ="90%"></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>
</div>



