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
                               <a href="<?= base_url('admin/data_pemesanan_homestay/detail_pemesanan/' . $value->id_pemesanan_homestay) ?>" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
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



