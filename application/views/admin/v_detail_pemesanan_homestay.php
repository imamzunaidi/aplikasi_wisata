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
                                <input type="text" class="form-control" name = "nama_pemesan" value = "<?= $detail_pemesanan_homestay->nama_pemesan?>" required readonly>
                            </div>
                        </div><!-- End .col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>No Telp Member *</label>
                                <input type="text" class="form-control" name = "no_telp_pemesan" value = "<?= $detail_pemesanan_homestay->no_telp_pemesan?>" required readonly>
                            </div>
                        </div><!-- End .col-md-6 -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email *</label>
                                <input type="text" class="form-control" name = "nama_pemesan" value = "<?= $detail_pemesanan_homestay->email_pemesan?>" required readonly>
                            </div>
                        </div><!-- End .col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>No Telp Member *</label>
                                <input type="text" class="form-control" name = "no_telp_pemesan" value = "<?= $detail_pemesanan_homestay->alamat_member?>" required readonly>
                            </div>
                        </div><!-- End .col-md-6 -->
                    </div>
            
                    <div class="row mt-5">
                        <div class="col-md-12 mt-2">
                            <h5>Data Pesanan</h5>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Check In *</label>
                                <input type="date" class="form-control" name = "check_in" id = "check_in" value = "<?= $detail_pemesanan_homestay->check_in?>"  required readonly>
                            </div>
                        </div><!-- End .col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Check Out *</label>
                                <input type="date" class="form-control" id = "check_out" name = "check_out" value = "<?= $detail_pemesanan_homestay->check_out?>" required readonly>
                            </div>
                        </div><!-- End .col-md-6 -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal Pemesan *</label>
                                <?php $date = date_create($detail_pemesanan_homestay->tanggal_pemesan); ?>
                                <input type="date" class="form-control" id = "check_out" name = "check_out" value = "<?= date_format($date,"Y-m-d")?>" required readonly>
                            </div>
                        </div><!-- End .col-md-6 -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Status Pemesan *</label>
                                <input type="text" class="form-control" id = "check_out" name = "check_out" value = "<?= $detail_pemesanan_homestay->status_pemesanan?>" required readonly>
                            </div>
                        </div><!-- End .col-md-6 -->
                        <div class="col-md-12">
                            <label>Keterangan Tambahan *</label>
                            <textarea name="keterangan_tambahan" value = "<?= $detail_pemesanan_homestay->keterangan_tambahan?>" class = "form-control" id="" cols="30" rows="3" readonly><?= $detail_pemesanan_homestay->keterangan_tambahan?></textarea>
                        </div><!-- End .col-md-6 -->
                    </div><!-- End .row -->

                    <?php if (!empty($data_pembayaran_homestay)){ ?>
                        <div class="row mt-5">
                            <div class="col-md-12 mt-2">
                                <h5>Data Pembayaran</h5>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tagihan</label>
                                    <input type="number" name="pembayaran" id="" class="form-control" value = "<?= $data_pembayaran_homestay->total_harga?>" placeholder="" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Pembayaran</label>
                                    <input type="text" name="pembayaran" id="" class="form-control" value = "<?= $data_pembayaran_homestay->tanggal_pembayaran?>" placeholder="" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Pembayaran</label>
                                    <input type="text" name="pembayaran" id="" class="form-control" value = "<?= $data_pembayaran_homestay->kategori?>" placeholder="" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Bank</label>
                                    <input type="text" name="pembayaran" id="" class="form-control" value = "<?= $data_pembayaran_homestay->nama_bank?>" placeholder="" readonly>
                                </div>
                                
                            </div><!-- End .col-md-6 -->
                            <div class="col-md-6">
                            <div class="form-group">
                                    <label for="">Bukti Bayar</label>
                                    
                                    <img src="<?= base_url()?>assets/img/pembayaran/<?= $data_pembayaran_homestay->bukti_bayar?>" alt="" width ="100%">
                                </div>
                            </div><!-- End .col-md-6 -->
                           
                           <div class="col-md-12 text-right mt-3">
                                <?php if ($data_pembayaran_homestay->status_pemesanan != 'lunas') { ?>
                                    <a href="<?= base_url('admin/data_pemesanan_homestay/konfirmasi/'.$detail_pemesanan_homestay->id_pemesanan_homestay)?>" class = "btn btn-primary">Konfirmasi Pembayaran</a>
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



