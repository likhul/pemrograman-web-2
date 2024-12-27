<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="card shadow-lg p-5 bg-white rounded">
        <!-- Title with Dark Color -->
        <h1 class="mb-4 text-center text-dark">Admin - Tambah Buku</h1>

        <form action="/admin/addBook" method="post">
            <!-- Form Group for Category and Book Name -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <label for="kategori" class="form-label text-muted">Kategori</label>
                    <select name="kategori" class="form-select shadow-sm" required>
                        <option value="B">Bisnis</option>
                        <option value="K">Keilmuan</option>
                        <option value="N">Novel</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="nama_buku" class="form-label text-muted">Nama Buku</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-book"></i></span>
                        <input type="text" name="nama_buku" class="form-control shadow-sm" required>
                    </div>
                </div>
            </div>

            <!-- Form Group for Price and Stock -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <label for="harga" class="form-label text-muted">Harga</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp</span>
                        <input type="number" name="harga" class="form-control shadow-sm" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="stok" class="form-label text-muted">Stok</label>
                    <input type="number" name="stok" class="form-control shadow-sm" required>
                </div>
            </div>

            <!-- Form Group for Publisher -->
            <div class="mb-4">
                <label for="id_penerbit" class="form-label text-muted">Nama Penerbit</label>
                <select name="id_penerbit" class="form-select shadow-sm" required>
                    <?php foreach ($publishers as $publisher) : ?>
                        <option value="<?= $publisher['id_penerbit']; ?>"><?= $publisher['nama']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Submit and Cancel Buttons -->
            <div class="d-flex justify-content-between mb-4">
                <div class="d-grid col-5">
                    <button type="submit" class="btn btn-primary btn-lg shadow-sm transition-effect">
                        <i class="bi bi-plus-circle me-2"></i> Tambah Buku
                    </button>
                </div>
                <div class="d-grid col-5">
                    <a href="/admin" class="btn btn-secondary btn-lg shadow-sm transition-effect">
                        <i class="bi bi-x-circle me-2"></i> Batal
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>

<style>
    /* Transitions on Hover */
    .transition-effect:hover {
        background-color: #007bff;
        border-color: #007bff;
        box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
    }

    .transition-effect:hover {
        background-color: #6c757d;
        border-color: #6c757d;
        box-shadow: 0 0 10px rgba(108, 117, 125, 0.5);
    }

    /* Shadow Effect for Inputs */
    .form-select:focus, .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
    }

    /* Custom Shadow for the Card */
    .card {
        border: none;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    /* Adjust Button Size */
    .btn-lg {
        font-size: 1.125rem;
        padding: 0.5rem 1.25rem;
    }

    /* Custom Space Between Buttons */
    .d-flex {
        gap: 10px;
    }
</style>

<?= $this->endSection() ?>
