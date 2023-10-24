<div class="page-content">
    <div class="checkout">
        <div class="container mt-5">
           
           
                <div class="row">
                    <div class="col-lg-9">
                        <h2 class="checkout-title">Daftar Karcis</h2><!-- End .checkout-title -->
                        <form action="<?= base_url('pengunjung/data_pemesanan_karcis/add_karcis')?>" method="post">
                            <div class="row">

                                <div class="col-sm-8">
                                    <label>karcis *</label>
                                    <select name="id_karcis" class = "form-control" id="" required>
                                        <option value="">--Pilih karcis--</option>
                                        <?php foreach ($data_karcis as $key => $value) { ?>
                                            <option value="<?= $value->id_karcis?>"><?= $value->nama_karcis?></option>
                                        <?php } ?>
                                    </select>
                                </div><!-- End .col-sm-6 -->

                                <div class="col-sm-4">
                                    <label>Qty *</label>
                                    <input type="text" class="form-control" name = "qty" required>
                                </div><!-- End .col-sm-6 -->
                                <div class="col-sm-12 text-right">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Tambahkan
                                    </button>
                                </div><!-- End .col-sm-6 -->
                            </div>
                        </form>

                        <br>
                        <h2 class="checkout-title">Data karcis</h2><!-- End .checkout-title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <table class ="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class = "text-center">Qty</th>
                                            <th class = "text-center">karcis</th>
                                            <th style="text-align:right">Harga</th>
                                            <th style="text-align:right">Sub Total</th>
                                            <th class = "text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; $total = 0;?>
                                        <?php foreach ($this->cart->contents() as $items): 
                                            $total += $items['subtotal'];
                                            ?>
                                            <tr>
                                                <td class = "text-center"><?= $items['qty'] ?></td>
                                                <td class = "text-center" width = "30%"><?php echo $items['name']; ?></td>
                                                <td style="text-align:right"><?php echo number_format($items['price'], 0); ?></td>
                                                <td style="text-align:right">Rp. <?php echo number_format($items['subtotal'], 0); ?></td>
                                                <td class = "text-center" width = "15%">
                                                    <a href="<?= base_url('pengunjung/data_pemesanan_karcis/delete_karcis/'.$items['rowid'])?>" class="btn-custom btn-danger btn-sm p-3"><i class="icon-close"></i></a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- End .row -->
                        <form action="<?= base_url('pengunjung/data_pemesanan_karcis/insert')?>" method="post">
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

                            <label>Keterangan Tambahan</label>
                            <textarea class="form-control" cols="10" rows="3" name = "keterangan_tambahan" placeholder="Masukkan keterangan tambahanan jika di perlukan"></textarea>
                        </div><!-- End .col-lg-9 -->
                        <aside class="col-lg-3">
                            <div class="summary">
                                <h3 class="summary-title">Your Order</h3><!-- End .summary-title -->
                                <?php foreach ($this->cart->contents() as $items):  
                                    $total += $items['subtotal']; ?>
                                    <input type="hidden" name = "id_karcis[]" value = "<?= $items['id']?>">
                                    <input type="hidden" name = "subtotal[]" value = "<?= $items['subtotal']?>">
                                    <input type="hidden" name = "qty[]" value = "<?= $items['qty']?>">
                                <?php endforeach; ?>
                             
                                <table class="table table-summary">
                                    <thead>
                                        <tr>
                                            <th>karcis</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         
                                    <?php $total1 = 0; foreach ($this->cart->contents() as $items): 
                                            $total1 += $items['subtotal'];
                                        ?>
                                        <?php endforeach; ?>
                                        <tr>
                                            <td>Harga</td>
                                            <td>Rp. <?= number_format($total1, 0)?></td>
                                        </tr>
                                        
                                        <tr class="summary-total">
                                            <td>Total:</td>
                                            <td>Rp. <?= number_format($total1, 0)?></td>
                                        </tr><!-- End .summary-total -->
                                    </tbody>
                                    <input type="hidden" name = "total_harga" value = "<?= $total1?>">
                                </table><!-- End .table table-summary -->
                                <button type="submit" class="btn btn-primary btn-round text-center" style = "width:100%">
                                    <span class="btn-text">Submit Pemesanan</span>
                                    <span class="btn-hover-text">Resume to Submit</span>
                                </button>
                            </div><!-- End .summary -->
                        </aside><!-- End .col-lg-3 -->
                    </form>
                </div><!-- End .row -->
         
        </div><!-- End .container -->
    </div><!-- End .checkout -->
</div><!-- End .page-content -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
