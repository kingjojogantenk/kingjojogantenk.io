<?php.
$No_Wa = 6282152278855;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="img/322408890_544633044253087_2707340106307920283_n.jpg"
    />
    <title>TEHLIMA</title>

    <!-- fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />
    

    
    
    <!-- feather icon -->
    
    <script src="https://unpkg.com/feather-icons"></script>
    
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- navbar start -->
    <nav class="navbar">
      <a href="#home" class="navbar-logo"> TEH <span>LIMA</span></a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#menu"> Menu </a>
        <a href="#contact"> Lokasi Kami </a>
        <a href="#about"> Tentang Kami</a>
      </div>

      <div class="navbar-extra">
        <a href="input.php" id="shopping-cart"
          ><i data-feather="shopping-cart"></i
        ></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>

      <!-- search start -->
      <div class="search-form">
        <input type="search" id="search-box" placeholder="Search here..." />
        <label for="search-box"><i data-feather="search"></i></label>
      </div>
      <!-- search end -->
      <div class="shopping-cart">
        <div class="cart-item"></div>
        <div class="cart-item"></div>
        <div class="cart-item"></div>
      </div>
    </nav>
    <!-- navbar end -->

    <!-- Hero section -->

    <section class="hero" id="home">
      <div class="video-container">
        <video
          autoplay
          muted
          loop
          src="img/EPIC BARTENDER B-ROLL - Daniel Schiffer Style.mp4"
          type="video/mp4"
        ></video>
      </div>
      <div class="content"></div>
      <main class="conten">
        <h1>Authentic <span>Tea</span> Shop</h1>
        <p>
          Minum es teh kekinian takut mahal? Minum Teh Lima solusinya, rasanya
          istimewa, haus reda, dan enggak bikin kantong menderita.
        </p>
        <a href="login.php" class="cta"> Login</a>
      </main>
    </section>

    <!-- Hero end -->

    <!-- Tentang Kami -->

    <section id="about" class="about">
      <h2>Tentang <span>Kami</span></h2>
      <div class="row">
        <div class="about-img">
          <img src="img/header-bg.jpeg" alt="Tentang Kami" />
        </div>

        <div class="content">
          <h3>Kenapa Memilih Teh Kami?</h3>
          <p>
            <span>Teh Lima</span> menjadi pilihan yang tepat bagi mereka yang
            mengutamakan kualitas dan rasa dalam menikmati teh. Selain itu,
            Tehlima juga tersedia dalam berbagai varian, seperti Java Tea dan
            Milk Tea yang memberikan variasi rasa yang menarik bagi para pecinta
            teh. Oleh karena itu, Tehlima dapat menjadi pilihan yang tepat untuk
            menemani aktivitas sehari-hari atau sebagai hadiah yang istimewa
            bagi orang terdekat.
          </p>
        </div>
      </div>
    </section>

    <!-- tentang kami end -->

    <!-- menu mulai -->
    <section id="menu" class="menu">
      <h2>Menu <span> Kami</span></h2>

      <div class="row">
        <div class="menu-card">
          <a href="input.php" class="menu-card-link"
            ><img src="img/esteh.jpg" alt="esteh" class="menu-card-img"
          /></a>
          <h3 class="menu-card-title">Java Tea</h3>
          <p class="menu-card-price">IDR 7K</p>
          <div class="product-stars">
            <i data-feather="star" class="star"></i>
            <i data-feather="star" class="star"></i>
            <i data-feather="star" class="star"></i>
            <i data-feather="star" class="star"></i>
            <i data-feather="star" class="star"></i>
          </div>

          <a href="input.php"><i data-feather="shopping-cart"></i></a>
        </div>
        <div class="menu-card">
          <a href="input.php" class="menu-card-link"
            ><img src="img/thaiteh.jpg" alt="Java Tea" class="menu-card-img"
          /></a>
          <h3 class="menu-card-title">Thai Tea</h3>
          <p class="menu-card-price">IDR 10K</p>
          <div class="product-stars">
            <i data-feather="star" class="star"></i>
            <i data-feather="star" class="star"></i>
            <i data-feather="star" class="star"></i>
            <i data-feather="star" class="star"></i>
            <i data-feather="star" class="star"></i>
          </div>

          <a href="input.php"><i data-feather="shopping-cart"></i></a>
        </div>
        <div class="menu-card">
          <a href="input.php" class="menu-card-link"
            ><img src="img/tehsusu.jpg" alt="Java Tea" class="menu-card-img"
          /></a>
          <h3 class="menu-card-title">Milk Tea</h3>
          <p class="menu-card-price">IDR 10K</p>
          <div class="product-stars">
            <i data-feather="star" class="star"></i>
            <i data-feather="star" class="star"></i>
            <i data-feather="star" class="star"></i>
            <i data-feather="star" class="star"></i>
            <i data-feather="star" class="star"></i>
          </div>


          <a href="input.php"><i data-feather="shopping-cart"></i></a>
        </div>
      </div>
    </section>
    <!-- menu berakhir -->

    <section id="contact" class="contact">
      <h2><span>Lokasi</span> Kami</h2>
      <p>
        Kalian pasti bertanya tanya lokasi kami dimana kan??, nih mimin kasi
        lokasinya
      </p>

      <div class="row">
        <div class="card">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.816716727289!2d109.31651367487878!3d-0.05137019994812076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d59c84e9c98a9%3A0x53c6ecb7aa894688!2sTehLima!5e0!3m2!1sid!2sid!4v1683964064212!5m2!1sid!2sid"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            class="map"
          ></iframe>
        </div>
      </div>
    </section>
    <!-- Contact Section End -->

    <footer>
      <div class="socials">
        <a href="https://www.instagram.com/tehlima_id/"
          ><i data-feather="instagram"></i
        ></a>
        <a
          href="https://api.whatsapp.com/message/4KTZD64F5ZBYG1?autoload=1&app_absent=0"
          ><i data-feather="linkedin"></i
        ></a>
        <a
          href="https://wa.me/<?php echo $No_Wa ?>?text=Hallo Abang TehLima Mau Tanya nich"
          target="_blank"
          ><i data-feather="send"></i>
        </a>
      </div>
      <footer>
      <div class="credit">
        <p>Copyright &copy;  2023 Teh Lima.</p>
      </div>
    </footer>

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

    <!-- My Javascript -->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/form.js"></script>
    <!-- feather icon -->

    <script>
      feather.replace();
    </script>

    <!-- java script -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
        crossorigin="anonymous"></script>

    <script src="js/script.js"></script>
  </body>
</html>
