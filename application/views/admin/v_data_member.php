<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1><?= $title ?></h1>
    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <div class="section-body">
      <div class="card table-responsive">
        <div class="card-body ">
          <table class="table table-hover" id="data_tabel">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Email</th>
                <th>No Telepon</th>
                <th>Alamat</th>
               
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
                foreach ($data_member as $key => $value) :?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $value->nama_member?></td>
                  <td><?= $value->username_member?></td>
                  <td><?= $value->email_member?></td>
                  <td><?= $value->no_hp_member?></td>
                  <td><?= $value->alamat_member?></td>
                  
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</div>
