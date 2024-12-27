<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="card shadow-lg p-5 bg-white rounded">
        <!-- Title with Dark Color -->
        <h1 class="mb-4 text-center text-dark">Admin - Tambah Penerbit</h1>

        <form action="/admin/savePublisher" method="post">
            <!-- Form Group for Publisher Name -->
            <div class="mb-4">
                <label for="nama" class="form-label text-muted">Nama Penerbit</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                    <input type="text" name="nama" class="form-control shadow-sm" required>
                </div>
            </div>

            <!-- Form Group for Address -->
            <div class="mb-4">
                <label for="alamat" class="form-label text-muted">Alamat</label>
                <input type="text" name="alamat" class="form-control shadow-sm" required>
            </div>

            <!-- Form Group for City -->
            <div class="mb-4">
                <label for="kota" class="form-label text-muted">Kota</label>
                <input type="text" name="kota" class="form-control shadow-sm" required>
            </div>

            <!-- Form Group for Phone -->
            <div class="mb-4">
                <label for="telepon" class="form-label text-muted">Telepon</label>
                <input type="text" name="telepon" class="form-control shadow-sm" required>
            </div>

            <!-- Submit Button -->
            <div class="d-grid mb-4">
                <button type="submit" class="btn btn-primary btn-lg shadow-sm transition-effect">
                    <i class="bi bi-plus-circle me-2"></i> Tambah Penerbit
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Additional Styles -->
<style>
    /* Transitions on Hover */
    .transition-effect:hover {
        background-color: #007bff;
        border-color: #007bff;
        box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
    }

    /* Shadow Effect for Inputs */
    .form-control:focus, .form-select:focus {
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
</style>

<?= $this->endSection() ?>
