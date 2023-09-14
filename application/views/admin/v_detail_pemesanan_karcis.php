<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $title ?></h1>
    </div>
   
    <?php echo $this->session->flashdata('pesan') ?>
    <div class="section-body">
      <div class="card table-responsive">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 mt-2 mb-3">
                            <h5>Data Pemesan</h5>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama *</label>
                                <input type="text" class="form-control" name = "nama_pemesan" value = "<?= $detail_pemesanan_karcis->nama_pemesan?>" required readonly>
                            </div>
                        </div><!-- End .col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>No Telp Member *</label>
                                <input type="text" class="form-control" name = "no_telp_pemesan" value = "<?= $detail_pemesanan_karcis->no_telp_pemesan?>" required readonly>
                            </div>
                        </div><!-- End .col-md-6 -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email *</label>
                                <input type="text" class="form-control" name = "nama_pemesan" value = "<?= $detail_pemesanan_karcis->email_member?>" required readonly>
                            </div>
                        </div><!-- End .col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>No Telp Member *</label>
                                <input type="text" class="form-control" name = "no_telp_pemesan" value = "<?= $detail_pemesanan_karcis->alamat_member?>" required readonly>
                            </div>
                        </div><!-- End .col-md-6 -->
                    </div>
            
                    <div class="row mt-5">
                        <div class="col-md-12 mt-2">
                            <h5>Data Pesanan</h5>
                        </div>
                       
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal Pemesan *</label>
                                <?php $date = date_create($detail_pemesanan_karcis->tanggal_pemesanan); ?>
                                <input type="date" class="form-control" id = "check_out" name = "check_out" value = "<?= date_format($date,"Y-m-d")?>" required readonly>
                            </div>
                        </div><!-- End .col-md-6 -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Status Pemesan *</label>
                                <input type="text" class="form-control" id = "check_out" name = "check_out" value = "<?= $detail_pemesanan_karcis->status_pemesanan?>" required readonly>
                            </div>
                        </div><!-- End .col-md-6 -->
                        <div class="col-md-12">
                            <label>Keterangan Tambahan *</label>
                            <textarea name="keterangan_tambahan" value = "<?= $detail_pemesanan_karcis->keterangan_tambahan?>" class = "form-control" id="" cols="30" rows="3" readonly><?= $detail_pemesanan_karcis->keterangan_tambahan?></textarea>
                        </div><!-- End .col-md-6 -->
                    </div><!-- End .row -->

                    <div class="row mt-5">
                        <div class="col-md-12 mt-2">
                            <h5>Data karcis</h5>
                        </div>
                       
                        <di class="col-md-12">
                        <table class ="table table-hover">
                            <thead>
                                <tr>
                                    <th class = "text-center">Qty</th>
                                    <th class = "text-center">karcis</th>
                                    <th style="text-align:right">Harga</th>
                                    <th style="text-align:right">Sub Total</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; $total = 0;?>
                                <?php foreach ($data_karcis as $items): 
                                    $total += $items->subtotal;
                                    ?>
                                    <tr>
                                        <td class = "text-center"><?= $items->qty ?></td>
                                        <td class = "text-center" width = "30%"><?php echo $items->nama_karcis; ?></td>
                                        <td style="text-align:right"><?php echo number_format($items->harga_karcis, 0); ?></td>
                                        <td style="text-align:right">Rp. <?php echo number_format($items->subtotal, 0); ?></td>
                                        
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        </di>
                    </div><!-- End .row -->

                   

                    <?php if (!empty($data_pembayaran_karcis)){ ?>
                        <div class="row mt-5">
                            <div class="col-md-12 mt-2">
                                <h5>Data Pembayaran</h5>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tagihan</label>
                                    <input type="number" name="pembayaran" id="" class="form-control" value = "<?= $data_pembayaran_karcis->total_harga?>" placeholder="" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Pembayaran</label>
                                    <input type="text" name="pembayaran" id="" class="form-control" value = "<?= $data_pembayaran_karcis->tanggal_pembayaran?>" placeholder="" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Pembayaran</label>
                                    <input type="text" name="pembayaran" id="" class="form-control" value = "<?= $data_pembayaran_karcis->kategori?>" placeholder="" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Bank</label>
                                    <input type="text" name="pembayaran" id="" class="form-control" value = "<?= $data_pembayaran_karcis->nama_bank?>" placeholder="" readonly>
                                </div>
                                
                            </div><!-- End .col-md-6 -->
                            <div class="col-md-6">
                            <div class="form-group">
                                    <label for="">Bukti Bayar</label>
                                    
                                    <img src="<?= base_url()?>assets/img/pembayaran/<?= $data_pembayaran_karcis->bukti_bayar?>" alt="" width ="100%">
                                </div>
                            </div><!-- End .col-md-6 -->
                           
                           <div class="col-md-12 text-right mt-3">
                                <?php if ($data_pembayaran_karcis->status_pemesanan != 'lunas') { ?>
                                    <a href="<?= base_url('admin/data_pemesanan_karcis/konfirmasi/'.$data_pembayaran_karcis->id_pemesanan_karcis)?>" class = "btn btn-primary">Konfirmasi Pembayaran</a>
                                <?php } ?>
                           </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>
</div>



