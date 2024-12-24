<?= $this->extend('admin/template');?>

<?= $this->section('main');?>
<h2 class="mb-5">transaksi</h2>

<div class="">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th scope="cul">#</th>
                <th scope="cul">nama pelanggan</th>
                <th scope="cul">tanggal</th>
                <th scope="cul">total</th>
                <th scope="cul">status</th>
                <th scope="cul">aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Achmad Reza Dzurryyatul Asy'ari</td>
                <td>9 Desember 2024 09.35 WIB</td>
                <td>Rp.250.000</td>
                <td>
                    <span class="badge bg-warning">pending</span>
                </td>
                <td>
                    <a href="<?= base_url('admin/transaksi/ubah-status')?>" class="btn
                    btn-success">Ubah Status</a>
                    <a href="<?= base_url('admin/transaksi/hapus')?>" class="btn
                    btn-danger">hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?= $this->endSection();?>