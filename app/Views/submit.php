<?= $this->extend('template') ?>

<?= $this->section('main') ?>
<div class="container">
  <div class="py-5">
    <div class="alert alert-success">
        <strong>Berhasil</strong> order anda akan segera diproses!
        Silahkan Konfirmasi pembayaran Anda ke WhatsApp Admin
        <a href="https://wa.me/082180304553" class="btn btn-success">Hubungi</a>
    </div>
    <div class="mt-5">
      <a href="<?=base_url()?>" class="btn btn-primary">Kembali Berbelanja</a>
    </div>
  </div>
</div>
<?=$this->endSection()?>