<style>
    .product-image1 {
        display: block;
        width: 100%;
        height: 194px;
    }
</style>

<main class="main">
    <div class="page-header text-center" style="background-image: url('<?= base_url('assets/assets_pembeli/') ?>assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Profile <span> Pembeli</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <div class="page-content mt-4">
        
        <div class="container">
            <?php echo $this->session->flashdata('pesan') ?>
            <form action="<?= base_url('Auth/update_profile') ?>" enctype='multipart/form-data' method="POST">
            <div class="row">
                <div class="col-md-10 offset-1">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="hidden" name="id_member" value="<?= $profile->id_member ?>">
                        <input type="text" name="nama_member" class="form-control" required value="<?= $profile->nama_member ?>">
                    </div>
                  
                    <div class="form-group">
                        <label for="">No Telepon</label>
                        <input type="text" name="no_hp_member" id="" class="form-control" value="<?= $profile->no_hp_member ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat_member" id="" class="form-control" value="<?= $profile->alamat_member ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email_member" id="" class="form-control" value="<?= $profile->email_member ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username_member" id="" class="form-control" value="<?= $profile->username_member ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password_member" id="" class="form-control" required>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
                </form>
            </div>


        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->