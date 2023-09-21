<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1><?= $title?></h1>
        </div>

        <div class="section-body">
            <?php 
                if($this->session->userdata('hak_akses') == '1'){?>
                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Hallo !!</strong> Selamat Datang Admin
                    </div>
            <?php } ?>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <a href="<?= base_url('data-pemesanan-souvenir')?>">
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                        <h4>Pemesanan Souvenir</h4>
                        </div>
                        <div class="card-body">
                           <?= $jumlah_pemesanan_souvenir?>
                        </div> </a>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <a href="<?= base_url('data-pemesanan-homestay')?>">
                        <i class="fas fa-bed"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                        <h4>Pemesanan Home Stay</h4>
                        </div>
                        <div class="card-body">
                        <?= $jumlah_pemesanan_home_stay?>
                        </div>
                    </div></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <a href="<?= base_url('data-pemesanan-karcis')?>">
                        <i class="fas fa-money-check"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                        <h4>Pemesanan Karcis</h4>
                        </div>
                        <div class="card-body">
                            <?= $jumlah_pemesanan_karcis?>
                        </div>
                    </div></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <a href="<?= base_url('data-pemesanan-kuliner')?>">
                        <i class="fas fa-hamburger"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                        <h4>Pemesanan Kuliner</h4>
                        </div>
                        <div class="card-body">
                            <?= $jumlah_pemesanan_kuliner?>
                        </div>
                    </div></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>