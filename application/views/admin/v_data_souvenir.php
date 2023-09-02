<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $title ?></h1>
    </div>
    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#tambahdata">
      Tambah Data
    </button>
    <?php echo $this->session->flashdata('pesan') ?>
    <div class="section-body">
      <div class="card table-responsive">
        <div class="card-body ">
            <table class = "table table-hover table-striped" id = "basic-datatables">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th class = "text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($data_souvenir as $key => $value) { ?>
                        <tr>
                            <td><?= $no++?></td>

                            <td><?= $value->nama_souvenir?></td>
                            <td>Rp. <?= number_format($value->harga_souvenir)?></td>
                            <td><?= $value->stok_souvenir?></td>
                            <td> <?=(str_word_count("$value->deskripsi_souvenir") > 10 ? substr("$value->deskripsi_souvenir",0,80)." ...." : "$value->deskripsi_souvenir")?></td>
                            <td width = "10%" class ="text-center"><img src="<?= base_url()?>assets/img/souvenir/<?= $value->gambar_souvenir?>" alt="" width ="90%"></td>
                            <td width = "15%" class = "text-center">
                            
                              <button type="button" class = "btn btn-info btn-sm" data-toggle="modal" data-target="#detaildata<?= $value->id_souvenir ?>">
                                <i class = "fas fa-eye"></i>
                              </button>
                              <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#updatedata<?= $value->id_souvenir ?>">
                                <i class="fas fa-edit"></i>
                              </button>
                              <a href="<?= base_url('admin/data_souvenir/delete/' . $value->id_souvenir) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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

<div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/data_souvenir/insert') ?>" method="post" enctype='multipart/form-data'>
        <div class="modal-body">
          <div class="form-group">
            <label for="">Nama </label>
            <input type="text" name="nama_souvenir" id="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Harga</label>
            <input type="number" name="harga_souvenir" id="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Stok</label>
            <input type="number" name="stok_souvenir" id="" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="">Deskripsi</label>
            <textarea name="deskripsi_souvenir" id="" cols="30" rows="10" class = "form-control" required></textarea>
          </div>
          <div class="form-group">
            <label for="">Gambar</label>
            <input type="file" name="gambar" id="" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php $no = 1;
foreach ($data_souvenir  as $key => $value) :?>
<div class="modal fade" id="updatedata<?= $value->id_souvenir?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/data_souvenir/update') ?>" method="post" enctype='multipart/form-data'>
        <div class="modal-body">
            <input type="hidden" name="id_souvenir" id="" class="form-control" value = "<?= $value->id_souvenir ?>">
            <div class="form-group">
              <label for="">Nama </label>
              <input type="text" name="nama_souvenir" id="" class="form-control" required value = "<?= $value->nama_souvenir ?>"> 
            </div>
            <div class="form-group">
              <label for="">Harga</label>
              <input type="number" name="harga_souvenir" id="" class="form-control" required value = "<?= $value->harga_souvenir ?>">
            </div>
            <div class="form-group">
              <label for="">Stok</label>
              <input type="number" name="stok_souvenir" id="" class="form-control" required value = "<?= $value->stok_souvenir ?>">
            </div>
         
            <div class="form-group">
              <label for="">Deskripsi</label>
              <textarea name="deskripsi_souvenir" id="" cols="30" rows="10" class = "form-control" required value = "<?= $value->deskripsi_souvenir ?>"><?= $value->deskripsi_souvenir ?></textarea>
            </div>
            <div class="form-group">
              <label for="">Gambar</label>
              <input type="file" name="gambar" id="" class="form-control" >
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </div>
      </form>
  </div>
</div>

<div class="modal fade" id="detaildata<?= $value->id_souvenir?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12 text-center">
              <img src="<?= base_url()?>assets/img/souvenir/<?= $value->gambar_souvenir?>" alt="" width ="100%">
            </div>
            <br>
            <div class="col-md-6 mt-4">
              <h5><?= $value->nama_souvenir?></h5>
            </div>
            <div class="col-md-6 text-right mt-4">
              <h5>Rp. <?= number_format($value->harga_souvenir)?></h5>
            </div>
            <br>
         
            <div class="col-md-12">
              <h5>Deskripsi</h5>
              <p><?= $value->deskripsi_souvenir ?></p>
            </div>
          </div>
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            
          </div>
        </div>
     
  </div>
</div>
<?php endforeach; ?>

