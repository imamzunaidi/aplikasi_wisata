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
                               <?php if ($value->status_pemesanan == 'menunggu konfirmasi') { ?>
                                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#updatedata<?= $value->id_pemesanan_homestay ?>">
                                    <i class="fas fa-edit"></i>
                                  </button>
                               <?php } ?>
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


<?php $no = 1;
foreach ($data_pemesanan_homestay as $key => $value) :?>
<div class="modal fade" id="updatedata<?= $value->id_pemesanan_homestay?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/data_pemesanan_homestay/update') ?>" method="post">
        <div class="modal-body">

          <input type="hidden" name ="id_pemesanan_homestay" value ="<?= $value->id_pemesanan_homestay?>">
   
          <div class="form-group">
            <label for="">Status Pemesanan</label>
            <select name="status_pemesanan" id="" class = "form-control" required>
              <option value="">--Pilih Status--</option>
              <option value="lakukan pembayaran">lakukan pembayaran</option>
              <option value="penuh">penuh</option>
            </select>
          </div>
      
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach; ?>
