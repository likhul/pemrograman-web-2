<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="card shadow-sm p-4">
        <!-- Update the title color to black -->
        <h1 class="mb-4 text-center text-dark">Pengadaan Buku</h1>

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Judul Buku</th>
                        <th>Sisa Stok</th>
                        <th>Nama Penerbit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($books as $book) : ?>
                        <tr>
                            <td><?= $book['nama_buku']; ?></td>
                            <td><?= $book['stok']; ?></td>
                            <td><?= $book['nama_penerbit']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-end mt-4">
            <a href="<?= base_url('pengadaan/print'); ?>" class="btn btn-primary btn-lg shadow-sm" target="_blank">
                <i class="bi bi-printer me-2"></i> Print Report
            </a>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
