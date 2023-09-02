<script src="<?= base_url('assets_pengunjung/')?>assets/js/jquery.min.js"></script>
<script src="<?= base_url('assets_pengunjung/')?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets_pengunjung/')?>assets/js/jquery.hoverIntent.min.js"></script>
<script src="<?= base_url('assets_pengunjung/')?>assets/js/jquery.waypoints.min.js"></script>
<script src="<?= base_url('assets_pengunjung/')?>assets/js/superfish.min.js"></script>
<script src="<?= base_url('assets_pengunjung/')?>assets/js/owl.carousel.min.js"></script>
<script src="<?= base_url('assets_pengunjung/')?>assets/js/jquery.magnific-popup.min.js"></script>
<!-- Main JS File -->
<script src="<?= base_url('assets_pengunjung/')?>assets/js/main.js"></script>

<script type="text/javascript" >
  $(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'Barang Berhasil Ditambahkan Ke Keranjang'
      })
    });
  });
</script>