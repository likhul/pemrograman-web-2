<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Toko Buku Online</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body>
  <div class="container">
        <div class="row bg-primary-subtle mb-2">
            <div class="col-6">
                <h1>KERANJANG BELANJA</h1>
            </div>
        </div>
        <div class="row mb-4 ">
            <div class="col-12 d-flex justify-content-end">
                <a href="chart.php" class="btn btn-secondary">Keranjang Belanja 
                    <span class="badge text-bg-warning">1</span>
            </a>
            </div>
        </div>
    </div>
    <div class="contsiner m-5">
      <div class="row mb-5 row p-4 bg-secondary-subtle g-3">
        <div class="col-12">
          <div class="row">
            <div class="col-4">
              <img src="<?=base_url()?>image/3726 mdpl.jpg" alt="" width="200px" />
            </div>
            <div class="col-4">
              <span>3726 mdpl</span>
            </div>
            <div class="col-1">
              <span>X1</span>
            </div>
            <div class="col-2">
              <a href="" class="btn btn-danger">Hapus</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-5 row p-4 bg-secondary-subtle g-3">
        <div class="col-12">
          <div class="row">
            <div class="col-4">
              <img src="<?=base_url()?>image/buku1.jpg" alt="" width="200px" />
            </div>
            <div class="col-4">
              <span>The Principles Of Power</span>
            </div>
            <div class="col-1">
              <span>X1</span>
            </div>
            <div class="col-2">
              <a href="" class="btn btn-danger">Hapus</a>
            </div>
          </div>
        </div>
      </div>

      <div class="d-flex justify-content-end">
        <div>
          <h1>Total: Rp. 150.000</h1>
        </div>
      </div>
      <div class="m-3 d-flex justify-content-end">
        <a href="<?=base_url()?>" class="btn btn-primary m-1">Kembali</a>
        <a href="<?=base_url('checkout')?>" class="btn btn-warning m-1">Checkout</a>
      </div>
    </div>
    <footer class="bg-success text text-white py-3 text text-center">
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
