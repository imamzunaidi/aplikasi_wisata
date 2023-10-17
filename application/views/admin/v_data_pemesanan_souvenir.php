<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $title ?></h1>
    </div>
   
    <?php echo $this->session->flashdata('pesan') ?>
    <div class="section-body">
      <div class="card table-responsive">
        <div class="card-body ">
            <table class = "table table-hover table-striped" id = "basic-datatables">
                <thead>
                    <tr class ="text-center">
                        <th>No</th>
                        <th>Pemesanan</th>
                        <th>No Telp</th>
                        <th>Total</th>
                        <th>Tanggal</th>
                        <th>Batas</th>
                        <th>Status Pemesanan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; 
                    foreach ($data_pemesanan_souvenir as $key => $value) { ?>
                        <tr class ="text-center">
                            <td><?= $no++?></td>
                            <td><?= $value->nama_pemesan?></td>
                            <td><?= $value->no_telp_pemesan?></td>
                            <td><?= $value->total_harga?></td>
                            <td><?= $value->tanggal_pemesanan?></td>
                            <td><?= $value->batas_pemesanan?></td>
                            <td><?= $value->status_pemesanan?></td>
                            <td>
                               <a href="<?= base_url('admin/data_pemesanan_souvenir/detail_pemesanan/' . $value->id_pemesanan_souvenir) ?>" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </section>
</div>



