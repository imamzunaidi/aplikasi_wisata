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
                        <th>Max</th>
                        <th>Alamat</th>
                        <th>Deskripsi</th>
                        <th>Status</th>
                        <th>Gambar</th>
                        <th class = "text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($data_homestay as $key => $value) { ?>
                        <tr>
                            <td><?= $no++?></td>

                            <td><?= $value->nama_home_stay?></td>
                            <td>Rp. <?= number_format($value->harga_home_stay)?></td>
                            <td><?= $value->maximal_home_stay?></td>
                            <td><?= $value->alamat_home_stay?></td>
                            <td> <?=(str_word_count("$value->deskripsi_home_stay") > 10 ? substr("$value->deskripsi_home_stay",0,80)." ...." : "$value->deskripsi_home_stay")?></td>
                            <td><?= $value->status_home_stay?></td>
                            <td width = "10%" class ="text-center"><img src="<?= base_url()?>assets/img/homestay/<?= $value->gambar_home_stay?>" alt="" width ="90%"></td>
                            <td width = "15%" class = "text-center">
                            
                              <button type="button" class = "btn btn-info btn-sm" data-toggle="modal" data-target="#detaildata<?= $value->id_home_stay ?>">
                                <i class = "fas fa-eye"></i>
                              </button>
                              <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#updatedata<?= $value->id_home_stay ?>">
                                <i class="fas fa-edit"></i>
                              </button>
                              <a href="<?= base_url('admin/data_homestay/delete/' . $value->id_home_stay) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
      <form action="<?= base_url('admin/data_homestay/insert') ?>" method="post" enctype='multipart/form-data'>
        <div class="modal-body">
          <div class="form-group">
            <label for="">Nama </label>
            <input type="text" name="nama_home_stay" id="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Harga</label>
            <input type="number" name="harga_home_stay" id="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Maximal</label>
            <input type="number" name="maximal_home_stay" id="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Alamat </label>
            <input type="text" name="alamat_home_stay" id="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Deskripsi</label>
            <textarea name="deskripsi_home_stay" id="" cols="30" rows="10" class = "form-control" required></textarea>
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
foreach ($data_homestay  as $key => $value) :?>
<div class="modal fade" id="updatedata<?= $value->id_home_stay?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/data_homestay/update') ?>" method="post" enctype='multipart/form-data'>
        <div class="modal-body">
            <input type="hidden" name="id_home_stay" id="" class="form-control" value = "<?= $value->id_home_stay ?>">
            <div class="form-group">
              <label for="">Nama </label>
              <input type="text" name="nama_home_stay" id="" class="form-control" required value = "<?= $value->nama_home_stay ?>"> 
            </div>
            <div class="form-group">
              <label for="">Harga</label>
              <input type="number" name="harga_home_stay" id="" class="form-control" required value = "<?= $value->harga_home_stay ?>">
            </div>
            <div class="form-group">
              <label for="">Maximal</label>
              <input type="number" name="maximal_home_stay" id="" class="form-control" required value = "<?= $value->maximal_home_stay ?>">
            </div>
            <div class="form-group">
              <label for="">Alamat </label>
              <input type="text" name="alamat_home_stay" id="" class="form-control" required value = "<?= $value->alamat_home_stay ?>">
            </div>
            <div class="form-group">
              <label for="">Status Home Stay </label>
              <select name="status_home_stay" id="" class = "form-control" required>
                <option value = "<?= $value->status_home_stay ?>"><?= $value->status_home_stay ?></option>
                <option value="tersedia">tersedia</option>
                <option value="tidak tersedia">tidak tersedia</option>
              </select>
            </div>
            <div class="form-group">
              <label for="">Deskripsi</label>
              <textarea name="deskripsi_home_stay" id="" cols="30" rows="10" class = "form-control" required value = "<?= $value->deskripsi_home_stay ?>"><?= $value->deskripsi_home_stay ?></textarea>
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

<div class="modal fade" id="detaildata<?= $value->id_home_stay?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <img src="<?= base_url()?>assets/img/homestay/<?= $value->gambar_home_stay?>" alt="" width ="100%">
            </div>
            <br>
            <div class="col-md-6 mt-4">
              <h5><?= $value->nama_home_stay?></h5>
            </div>
            <div class="col-md-6 text-right mt-4">
              <h5>Rp. <?= number_format($value->harga_home_stay)?></h5>
            </div>
            <br>
            <div class="col-md-12 mt-1 mb-2">
              <b>Alamat : </b> <?= $value->alamat_home_stay?> | max : <?= $value->maximal_home_stay?>
            </div>
            <div class="col-md-12">
              <h5>Deskripsi</h5>
              <p><?= $value->deskripsi_home_stay ?></p>
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

