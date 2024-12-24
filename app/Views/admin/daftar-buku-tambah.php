<?= $this->extend('admin/template');?>

<?= $this->section('main');?>
<h2 class="mb-5">Tambah Buku</h2>

<div class="w-50">
    <form action="<?= base_url('admin/daftar-buku/tambah')?>" method="POST" 
    enctype="multipart/form-data">
        <div class="mb-3">
            <label for="Judul">judul buku</label>
            <input type="text" class="form-control" name="judul" id="judul">
        </div>
        <div class="mb-3">
            <label for="pengarang">pengarang</label>
            <input type="text" class="form-control" name="pengarang" id="pengarang">
        </div>
        <div class="mb-3">
            <label for="penerbit">penerbit</label>
            <input type="text" class="form-control" name="penerbit" id="penerbit">
        </div>
        <div class="mb-3">
            <label for="tahun">tahun</label>
            <input type="text" class="form-control" name="tahun" id="tahun">
        </div>
        <div class="mb-3">
            <label for="cover">cover</label>
            <input type="file" class="form-control" name="cover" id="cover" class="form-control">
        </div>
        <div class="mb-3">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" name="harga" id="harga">
        </div>
        <div class="mb-3">
            <a href="<?= base_url('admin/daftar-buku')?>" class="btn btn-secondary">kembali</a>
            <button type="submit" class="btn btn-primary">simpan</button>
        </div>
    </form>
</div>

<?= $this->endSection();?>