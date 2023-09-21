<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $title ?></h1>
    </div>
    <?php echo $this->session->flashdata('pesan') ?>
    <div class="section-body">
      <div class="card table-responsive">
        <div class="card-body ">
            <form action="<?= base_url('admin/data_profile/update')?>" method = "POST"  enctype='multipart/form-data'>
                <div class="row">
                    <div class="col-md-4">
                        <div class="text-center"><h3>Gambar</h3></div>
                        <img src="<?= base_url('assets/img/profile/'.$profile->gambar)?>" alt="" width = "100%">
                        <div class="form-group text-center">
                            <label for="">Upload Gambar</label>
                            <input type="file" class = "form-control" name = "gambar">
                        </div>
                    </div>
                    <div class="col-md-8">
        
                            <div class="form-group">
                            <input type="hidden" name = "id_profile" value = "1">
                            <label for="">Visi</label>
                            <input type="text" name = "visi" class = "form-control" value = "<?= $profile->visi?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Misi</label>
                            <input type="text" name = "misi" class = "form-control" value = "<?= $profile->misi?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name = "email" class = "form-control" value = "<?= $profile->email?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">No Telepon</label>
                            <input type="text" name = "no_hp" class = "form-control" value = "<?= $profile->no_hp?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Facebook</label>
                            <input type="text" name = "facebook" class = "form-control" value = "<?= $profile->facebook?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Instagram</label>
                            <input type="text" name = "instagram" class = "form-control" value = "<?= $profile->instagram?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" name = "alamat" class = "form-control" value = "<?= $profile->alamat?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <textarea name="deskripsi" id="" class = "form-control" value = "<?= $profile->deskripsi?>" cols="30" rows="10" required><?= $profile->deskripsi?></textarea>
                        </div>
                        <div class="text-right">
                            <button type = "submit" class = "btn btn-primary">Update Data</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </section>
</div>
