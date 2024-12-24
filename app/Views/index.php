<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Solikhul Hadi</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
   
  <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-end">
                <a href="chart.html" class="btn btn-info">Keranjang belanja <span class="badge text-bg-warning">4</span></a>
            </div>
        </div>
        <div class="row welcome-section mb-5">
          <div class="col-6">
                <h1>Selamat datang di toko online</h1>
                <p>Kami menyediakan buku-buku dari berbagai penerbit </p>
                <a href="#" class="btn btn-success">Lihat Produk</a>
          </div>
          <div class="col-6">
            <h1>Temukan buku favorit anda</h1>
            <Form action="">
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Judul buku">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Pengarang">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Penerbit">
            </div>
            <div class="mb-3">
            <button class="btn btn-primary">Cari</button>
          </div>  
        </form>
        </div>
    </div>

      <div class="container">
      <div class="row m-1 g-4" id="1">
        <h2>Buku Best seller</h2>
        <div class="col-3">
          <div class="card">
            <img src="<?=base_url()?>image/buku1.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">The</h5>
              <p class="card-text">Rp. 20.000</p>
              <a href="#" class="btn btn-primary">Beli Sekarang</a>
            </div>
          </div>
        </div>
        <div class="col-3">
        <div class="card">
          <img src="<?= base_url() ?>/image/172_Days.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">172 Days</h5>
            <p class="card-text">Rp 95.000</p>
            <a href="#" class="btn btn-primary">Beli Sekarang</a>
          </div>
        </div>
        </div>
        <div class="col-3">
          <div class="card">
          <img src="<?= base_url() ?>image/3726 mdpl.jpg" class="card-img-top" alt="...">
           <div class="card-body">
              <h5 class="card-title">3726 Mdpl</h5>
              <p class="card-text">Rp 125.000</p>
              <a href="#" class="btn btn-primary">Beli Sekarang</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
          <img src="<?= base_url() ?>/image/Cantik-Itu-Luka.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Cantik Itu Luka</h5>
              <p class="card-text">175.000</p>
              <a href="#" class="btn btn-primary">Beli Sekarang</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
          <img src="<?= base_url() ?>/image/Gadis_Kretek_.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Gadis Kretek</h5>
              <p class="card-text">Rp 90.000</p>
              <a href="#" class="btn btn-primary">Beli Sekarang</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
          <img src="<?= base_url() ?>/image/laut bercerita.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Laut Bercerita</h5>
              <p class="card-text">Rp 95.000</p>
              <a href="#" class="btn btn-primary">Beli Sekarang</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
          <img src="<?= base_url() ?>/image/matahari.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Matahari</h5>
              <p class="card-text">Rp 65.000</p>
              <a href="#" class="btn btn-primary">Beli Sekarang</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
          <img src="<?= base_url() ?>/image/bulan.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Bulan</h5>
              <p class="card-text">Rp 75.000</p>
              <a href="#" class="btn btn-primary">Beli Sekarang</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="bg-success text text-white py-3 text text-center mt-5">
      <div class="container">
        Copyright 2024. Toko buku online kelas B. All Rights Reserved
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
