





<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pesan Disini</title>
    <link rel="stylesheet" href="input.css" />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="img/322408890_544633044253087_2707340106307920283_n.jpg"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!-- Header -->
    <div id="page-container">
      <!-- Header -->
      <header>
        <a href="index.php"><img
          src="img/322408890_544633044253087_2707340106307920283_n.jpg"
          alt="logo"
          width="70"
          height="70"
          class="rounded-circle"
        />
        </a>
        <h1>Pesan<span class="teh-lima">Disini</span></h1>
      </header>

      <!-- Content Area -->
      <body>
      <form action="process_input.php" method="POST" enctype="multipart/form-data">
          <label for="jumlah">Jumlah:</label>
          <input type="number" id="jumlah" name="jumlah" required /><br /><br />

          <label for="pesanan">Pesanan:</label>
          <input type="text" id="pesanan" name="pesanan" required /><br /><br />

          <label for="alamat">Alamat:</label>
          <input type="text" id="alamat" name="alamat" required /><br /><br />
          
          <label for="bukti">Bukti Pembayaran: </label>
          <input
          type="file"
          id="bukti"
          name="bukti"
          accept="image/*"
          required
          /><br /><br />
  
  <img src="img/WhatsApp Image 2023-06-05 at 17.23.58.jpeg" alt="qr" width="200px">


          <h6>Dana : IQBAL PUTRA ARIANDA</h6> 

          <input type="submit" value="Submit" />
        </form>
      </body>

      <!-- Footer -->
      <footer>
        <p>&copy; 2023 Teh Lima</p>
      </footer>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
