<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<div class="bg-primary text-white text-center py-5 mb-5" style="background: linear-gradient(135deg, rgba(0, 188, 212, 0.9), rgba(142, 36, 170, 0.9)); position: relative; border-radius: 20px; box-shadow: 0 10px 30px rgba(0, 188, 212, 0.3); transition: all 0.3s ease;">
    <h1 class="display-3 animated fadeInUp" style="z-index: 1; font-family: 'Helvetica Neue', sans-serif; font-weight: 700; letter-spacing: 2px; font-size: 2.5rem;">Selamat Datang di LIKHULSTORE!</h1>
    <p class="lead animated fadeInUp delay-1s" style="z-index: 1; font-size: 1.2rem; font-weight: 500; line-height: 1.6;">Temukan koleksi buku terbaik dengan harga terjangkau. Belanja sekarang dan temukan buku impian Anda!</p>
</div>

<div class="container mt-5">
    <!-- Search Form Card -->
    <div class="card shadow-lg border-0 mb-4 rounded-4 animated fadeInUp" style="animation-delay: 0.5s;">
        <div class="card-body">
            <h5 class="card-title text-center mb-4" style="font-size: 1.6rem; color: #343a40; font-weight: 700; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">
                Cari Buku Favorit Anda
            </h5>
            <form action="<?= base_url('search') ?>" method="post">
                <div class="input-group input-group-lg">
                    <input type="text" class="form-control rounded-pill border-1 shadow-sm" placeholder="Search Nama Buku" name="search_query" required>
                    <button class="btn btn-danger rounded-pill px-4" type="submit">🔍 Cari</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Book Table Card -->
    <div class="card shadow-lg border-0 rounded-4 animated fadeInUp" style="animation-delay: 1s;">
        <div class="card-body">
            <h5 class="card-title mb-4" style="font-size: 1.5rem;">Daftar Buku</h5>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-sm table-striped">
                    <thead class="table-dark">
                        <tr class="text-center">
                            <th>ID Buku</th>
                            <th>Kategori</th>
                            <th>Nama Buku</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Penerbit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($books as $book) : ?>
                            <tr class="text-center">
                                <td style="font-size: 1.1rem;"><?= $book['id_buku']; ?></td>
                                <td style="font-size: 1.1rem;">
                                    <span class="badge bg-secondary"><?= $book['kategori']; ?></span>
                                </td>
                                <td style="font-size: 1.1rem;"><?= $book['nama_buku']; ?></td>
                                <td style="font-size: 1.1rem;">Rp <?= number_format($book['harga'], 0, ',', '.'); ?></td>
                                <td style="font-size: 1.1rem;">
                                    <span class="badge bg-success"><?= $book['stok']; ?> Available</span>
                                </td>
                                <td style="font-size: 1.1rem;"><?= $book['nama']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<!-- Additional CSS -->
<style>
    /* Animations */
    @keyframes fadeIn {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }

    /* Table Styles */
    .table {
        border-radius: 10px;
        border: 1px solid #dee2e6;
        overflow: hidden;
    }

    .table th, .table td {
        vertical-align: middle;
        padding: 12px 16px;
        font-size: 1.1rem;
        border-top: 1px solid #dee2e6;
    }

    .table th {
        background-color: #000;
        color: #fff;
        text-transform: uppercase;
        font-weight: bold;
        font-size: 1.2rem;
    }

    .table tbody tr:hover {
        background-color: #f7f7f7;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s ease;
    }

    .table .badge {
        font-size: 1rem;
        padding: 5px 12px;
    }

    .table .badge.bg-secondary {
        background-color: #6c757d;
    }

    .table .badge.bg-success {
        background-color: #28a745;
    }

    /* Search Input Styles */
    .input-group-lg .form-control {
        font-size: 1.1rem;
    }

    .btn-danger {
        background-color: #ff4d4d;
        border-color: #ff4d4d;
        transition: background-color 0.3s;
    }

    .btn-danger:hover {
        background-color: #e60000;
        border-color: #e60000;
    }

    /* Hero Section Styles */
    .bg-primary {
        background: linear-gradient(135deg, rgba(0, 188, 212, 0.9), rgba(142, 36, 170, 0.9));
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 188, 212, 0.3);
        transition: all 0.3s ease;
    }
</style>
