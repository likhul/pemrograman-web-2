<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LikhulStore</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <script src="/assets/js/unpkg.com_sweetalert@2.1.2_dist_sweetalert.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        footer {
            background-color: #343a40;
            color: white;
        }
        /* Navbar Styling */
        .navbar {
            background-color: #007bff;
            border-bottom: 3px solid #0056b3;
            transition: all 0.4s ease;
        }
        .navbar:hover {
            background-color: #0056b3;
        }
        .navbar-light .navbar-nav .nav-link {
            color: white;
            font-weight: 600;
            padding: 15px 20px;
            text-transform: uppercase;
            transition: color 0.3s ease, transform 0.3s ease;
        }
        .navbar-light .navbar-nav .nav-link:hover {
            color: #ffdd57;
            background-color: #0056b3;
            border-radius: 5px;
            transform: scale(1.1);
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 30px;
            color: #ffdd57;
            letter-spacing: 2px;
            text-transform: uppercase;
            transition: transform 0.3s ease;
        }
        .navbar-toggler-icon {
            background-color: #ffffff;
        }
        .navbar-brand:hover {
            transform: scale(1.1);
        }
        .container {
            max-width: 1200px;
        }
        .main-content {
            margin-top: 30px;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .nav-link.active {
            color: #ffdd57 !important;
            font-weight: 600;
            background-color: #0056b3;
            border-radius: 5px;
        }
        .navbar-nav {
            animation: slideIn 1s ease-out forwards;
        }

        /* Animasi slide-in navbar */
        @keyframes slideIn {
            from {
                transform: translateY(-100%);
            }
            to {
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('/') ?>">LikhulStore</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?= (current_url() == base_url('/')) ? 'active' : '' ?>" href="<?= base_url('/') ?>">Beranda</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Section Content -->
    <main class="container main-content">
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Footer -->
    <footer class="bg-dark py-4 mt-5">
        <div class="container text-center">
            <p class="mb-0 text-light">Solikhul Hadi &copy; 2024. Semua Hak Dilindungi.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <?php if (session()->getFlashdata('success')) : ?>
    <script>
        swal({
            title: "Informasi",
            text: "<?= session()->getFlashdata('success') ?>",
            icon: "success",
            button: "OK",
        });
    </script>
    <?php endif; ?>
</body>
</html>
