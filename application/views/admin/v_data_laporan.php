<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $title ?></h1>
    </div>
    <!-- <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#tambahdata">
      Tambah Data
    </button> -->
    <?php echo $this->session->flashdata('pesan') ?>
    <div class="section-body">
      <div class="card table-responsive">
        <div class="card-body ">
            <table class="table table-hover" id="data_tabel">
                <thead>
                    <tr class ="text-center">
                        <th>No</th>
                        <th>Nama Bank</th>
                        <th>Kategori</th>
                        <th>Tanggal Pembayaran</th>
                        <th>Bukti Bayar</th>
                        <th class = "text-right">Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;  $total = 0;
                    foreach ($laporan as $key => $value) { 
                      $total += $value->pembayaran;
                      ?>
                        <tr class ="text-center">
                            <td><?= $no++?></td>
                            <td><?= $value->nama_bank?></td>
                            <td><?= $value->kategori?></td>
                            <td><?= $value->tanggal_pembayaran?></td>
                            <td width = "10%" class ="text-center"><img src="<?= base_url()?>assets/img/pembayaran/<?= $value->bukti_bayar?>" alt="" width ="90%"></td>
                            <td class = "text-right">Rp. <?= number_format($value->pembayaran, 2)?></td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td class = "text-center" colspan = "5">Total</td>
                        <td class = "text-right">Rp. <?= number_format($total, 2)?></td>
                    </tr>
                </tfoot>
            </table>
        </div>
      </div>
    </div>
  </section>
</div>
