<div class="page-content">
    <div class="checkout">
        <div class="container mt-5">
           
            <form action="<?= base_url('pengunjung/Data_pemesanan_homestay/insert')?>" method = "POST">
                <div class="row">
                    <div class="col-lg-9">
                        <h2 class="checkout-title">Details Pemesanan</h2><!-- End .checkout-title -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Nama *</label>
                                    <input type="text" class="form-control" name = "nama_pemesan" value = "<?= $this->session->userdata('nama_member')?>" required>
                                </div><!-- End .col-sm-6 -->

                                <div class="col-sm-6">
                                    <label>No Telp Member *</label>
                                    <input type="text" class="form-control" name = "no_telp_pemesan" value = "<?= $this->session->userdata('no_hp_member')?>" required>
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .row -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Check In *</label>
                                    <input type="date" class="form-control" name = "check_in" id = "check_in" required>
                                </div><!-- End .col-sm-6 -->

                                <div class="col-sm-6">
                                    <label>Check Out *</label>
                                    <input type="date" class="form-control" id = "check_out" name = "check_out" required>

                                    <input type="hidden" id = "harga" value = "<?= $data_pemesanan_homestay->harga_home_stay?>">
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .row -->

                            <label>Email * </label>
                            <input type="text" class="form-control" name = "email_pemesan" value = "<?= $this->session->userdata('email_member')?>" >

                            <label>Keterangan Tambahan</label>
                            <textarea class="form-control" cols="10" rows="3" name = "keterangan_tambahan" placeholder="Masukkan keterangan tambahanan jika di perlukan"></textarea>
                    </div><!-- End .col-lg-9 -->
                    <aside class="col-lg-3">
                        <div class="summary">
                            <h3 class="summary-title">Your Order</h3><!-- End .summary-title -->

                            <input type="hidden" name = "id_home_stay" value = "<?= $data_pemesanan_homestay->id_home_stay?>">
                            <input type="hidden" id = "value_jumlah_hari" name = "jumlah_hari">
                            <input type="hidden" id = "value_total_harga" name = "total_harga">
                            <table class="table table-summary">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Harga</td>
                                        <td>Rp. <?= number_format($data_pemesanan_homestay->harga_home_stay, 0)?></td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Hari</td>
                                        <td><span id= "jumlah_hari"></span></td>
                                    </tr>
                        
                                    <tr class="summary-total">
                                        <td>Total:</td>
                                        <td>Rp. <span id = "total"></span></td>
                                    </tr><!-- End .summary-total -->
                                </tbody>
                            </table><!-- End .table table-summary -->
                            <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                                <span class="btn-text">Submit Pemesanan</span>
                                <span class="btn-hover-text">Resume to Submit</span>
                            </button>
                        </div><!-- End .summary -->
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </form>
        </div><!-- End .container -->
    </div><!-- End .checkout -->
</div><!-- End .page-content -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
    $("#check_out").on('change', function(){  // 1st way
        var check_in = $("#check_in").val();
        var check_out = $("#check_out").val();
        var harga = $("#harga").val();
        	
        var tanggal1 = new Date(check_in); // new Date() saja akan menghasilkan tanggal sekarang
        var tanggal2 = new Date(check_out); // format tanggal YYYY-MM-DD, tahun-bulan-hari
        
        // set jam menjadi jam 12 malam, atau 00
        tanggal1.setHours(0, 0, 0, 0);
        tanggal2.setHours(0, 0, 0, 0);
        
        var selisih = Math.abs(tanggal1 - tanggal2);
        // Selisih akan dalam millisecond atau mili detik
        
        var hariDalamMillisecond = 1000 * 60 * 60 * 24; // 1000 * 1 menit * 1 jam * 1 hari
        
        var selisihTanggal = Math.round(selisih / hariDalamMillisecond);

        var total = harga * selisihTanggal;

        $('#jumlah_hari').html(selisihTanggal);

        var check_in = $("#value_jumlah_hari").val(selisihTanggal);
        var check_out = $("#value_total_harga").val(total);

        $('#total').html(total);
    });
</script>