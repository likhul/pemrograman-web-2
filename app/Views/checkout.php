<?= $this->extend('template')?>

<?= $this->section('main')?>
<div class="container mt-5">
  <h2>Review Order</h2>
  <hr>
  <h5>Bumi Manusia</h5> @1
  <h5>Rp. 45.000</h5>

<h2 class="mt-5">Alamat Pengirim</h2>
<hr>
<h5 >Jl. muaro jambi - muaro bulian KM 16, Sungai Duren.</h5>

<h2 class="mt-5">Metode Bayar</h2>
<hr>
<h5>Tranfer bank</h5>
<h5>BCA James Bond</h5>
<h5>Rek. 112245463</h5>

<div class="mt-4">
  <form action="<?= base_url('submit')?>" method="POST">
<button type="submit" class="btn btn-danger mb-5">Submit Order</button>
</form>
</div>
</div>
<?= $this->endSection()?>