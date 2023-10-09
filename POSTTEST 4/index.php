<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kiwi Computer Accessories Store</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
    <?php include('includes/navbar.php'); ?>
    </header>

    <section class="hero-section">
      <div class="hero-content">
        <h1>Welcome to Kiwi Accessories</h1>
        <p>
          Memudahkan Cara Anda Bekerja, Berkomunikasi Dan Berinteraksi Dengan
          Komputer Anda
        </p>
      </div>
    </section>

    <section class="product-showcase">
      <h2>Featured Products</h2>
      <div class="product-slider-container">
        <button id="prev-button">Back</button>
        <div class="product-slider">
          <div class="product-card-container">
            <div class="product-card">
              <img src="assets/produk-1.png" alt="Product 1" />
              <h3>Monsgeek M3</h3>
              <p class="product-description">
                Keyboard Wired Type C Barebone Dengan Mount Bertipe Gasket dan
                Berbahan Aluminium
              </p>
              <p class="product-price">Rp1.200.000</p>
              <a href="#" class="cta-button">Beli</a>
            </div>
          </div>
          <div class="product-card-container">
            <div class="product-card">
              <img src="assets/produk-2.png" alt="Product 2" />
              <h3>Logitech MX Master 3S</h3>
              <p class="product-description">
                Mouse Wireless Dengan Desain Ergonomic
              </p>
              <p class="product-price">Rp1.500.000</p>
              <a href="#" class="cta-button">Beli</a>
            </div>
          </div>
          <div class="product-card-container">
            <div class="product-card">
              <img src="assets/produk-3.png" alt="Product 3" />
              <h3>ThieAudio Monarch Mk.2</h3>
              <p class="product-description">
                Hybrid In Ear Monitor Dengan Konfigurasi 1DD+6BA+2EST
              </p>
              <p class="product-price">Rp19.000.000</p>
              <a href="#" class="cta-button">Beli</a>
            </div>
          </div>
          <div class="product-card-container">
            <div class="product-card">
              <img src="assets/produk-4.png" alt="Product 4" />
              <h3>Mousepad Takodachi</h3>
              <p class="product-description">
                Custom Mousepad Speed Type Bermotif Takodachi
              </p>
              <p class="product-price">Rp200.000</p>
              <a href="#" class="cta-button">Beli</a>
            </div>
          </div>
        </div>

        <button id="next-button">Next</button>
      </div>
    </section>
    <?php include('includes/footer.php'); ?>
    <script src="script.js" ;></script>
  </body>
</html>