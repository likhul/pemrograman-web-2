<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container mt-5" style="background-color: #f8f9fa;"> <!-- Soft background color -->
    <h1 class="mb-4 text-center text-dark">Admin - Kelola Buku dan Penerbit</h1> <!-- Judul berwarna hitam -->

    <!-- Tombol Tambah Buku -->
    <div class="d-flex justify-content-end mb-4">
        <a href="<?= base_url('admin/addBook'); ?>" class="btn btn-primary btn-lg shadow-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah Buku Baru">
            <i class="bi bi-plus-circle me-2"></i>Tambah Buku
        </a>
    </div>

    <!-- Tabel Buku -->
    <h2 class="mb-3 text-secondary">Buku</h2>
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>ID Buku</th>
                            <th>Kategori</th>
                            <th>Nama Buku</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Penerbit</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($books as $book) : ?>
                            <tr>
                                <td><?= $book['id_buku']; ?></td>
                                <td><?= $book['kategori']; ?></td>
                                <td><?= $book['nama_buku']; ?></td>
                                <td>Rp <?= number_format($book['harga'], 0, ',', '.'); ?></td>
                                <td><?= $book['stok']; ?></td>
                                <td><?= $book['nama']; ?></td>
                                <td class="d-flex justify-content-start">
                                    <a href="<?= base_url('/admin/updateBook/' . $book['id_buku']); ?>" class="btn btn-warning btn-sm me-2 shadow-sm" title="Edit">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>
                                    <a href="#" onclick="confirmDelete('<?= $book['id_buku']; ?>')" class="btn btn-danger btn-sm shadow-sm" title="Hapus">
                                        <i class="bi bi-trash"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Tabel Penerbit -->
    <h2 class="mb-3 text-secondary">Penerbit</h2>
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>ID Penerbit</th>
                            <th>Nama Penerbit</th>
                            <th>Alamat</th>
                            <th>Kota</th>
                            <th>Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($publishers as $publisher) : ?>
                            <tr>
                                <td><?= $publisher['id_penerbit']; ?></td>
                                <td><?= $publisher['nama']; ?></td>
                                <td><?= $publisher['alamat']; ?></td>
                                <td><?= $publisher['kota']; ?></td>
                                <td><?= $publisher['telepon']; ?></td>
                                <td class="d-flex justify-content-start">
                                    <a href="<?= base_url('/admin/editPublisher/' . $publisher['id_penerbit']); ?>" class="btn btn-warning btn-sm me-2 shadow-sm" title="Edit">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>
                                    <a href="#" onclick="$('#deletePublisherModal<?= $publisher['id_penerbit']; ?>').modal('show');" class="btn btn-danger btn-sm shadow-sm" title="Hapus">
                                        <i class="bi bi-trash"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Hapus Buku -->
<?php foreach ($books as $book) : ?>
    <div class="modal fade" id="deleteModal<?= $book['id_buku']; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel<?= $book['id_buku']; ?>" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel<?= $book['id_buku']; ?>">Hapus Buku</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus buku "<?= $book['nama_buku']; ?>"?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <a href="#" onclick="confirmDelete('<?= $book['id_buku']; ?>')" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- Modal Hapus Penerbit -->
<?php foreach ($publishers as $publisher) : ?>
    <div class="modal fade" id="deletePublisherModal<?= $publisher['id_penerbit']; ?>" tabindex="-1" role="dialog" aria-labelledby="deletePublisherLabel<?= $publisher['id_penerbit']; ?>" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deletePublisherLabel<?= $publisher['id_penerbit']; ?>">Hapus Penerbit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus penerbit "<?= $publisher['nama']; ?>"?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <a href="#" onclick="confirmDeletePublisher('<?= $publisher['id_penerbit']; ?>')" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- JavaScript untuk SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    // Inisialisasi tooltip
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    function confirmDelete(bookId) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: 'Setelah dihapus, data ini tidak dapat dipulihkan!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Tidak, batalkan',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "/admin/deleteBook/" + bookId;
            } else {
                Swal.fire('Data tidak dihapus!', '', 'info');
            }
        });
    }

    function confirmDeletePublisher(publisherId) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: 'Setelah dihapus, data ini tidak dapat dipulihkan!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Tidak, batalkan',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "/admin/deletePublisher/" + publisherId;
            } else {
                Swal.fire('Data tidak dihapus!', '', 'info');
            }
        });
    }
</script>

<?= $this->endSection() ?>
