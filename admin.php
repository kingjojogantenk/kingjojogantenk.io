<?php
include('session.php');

$conn = mysqli_connect("localhost", "root", "777888999", "pembelian");
$result = mysqli_query($conn, "SELECT * FROM tehlima");

// Check if the "Pesanan Selesai" button is clicked
if (isset($_POST['delete'])) {
  $id = $_POST['delete'];

  // Delete the row from the table
  $deleteQuery = "DELETE FROM tehlima WHERE id = '$id'";
  mysqli_query($conn, $deleteQuery);

  // Send a response to indicate the deletion is successful
  echo "deleted";
  exit();
}

// Rest of your admin page code goes here...
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Teh Lima</title>
  <link rel="stylesheet" href="admin.css" />
  <link rel="icon" type="image/png" sizes="16x16" href="img/322408890_544633044253087_2707340106307920283_n.jpg" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <!-- Header -->
  <div id="page-container">
    <!-- Header -->

    
    <header>
      <div style="text-align:right;"> 
      <a href="unset.php?logout=true" class="logout-btn">Logout</a>
      </div>
      
      <a href="index.php"><img src="img/322408890_544633044253087_2707340106307920283_n.jpg" alt="logo" width="70"
          height="70" class="rounded-circle" /></a>
          <h1><span class="teh-lima">Welcome, Admin Teh </span> Lima</h1>
        </header>

    <!-- Content Area -->
    <div id="content-wrap">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Jumlah</th>
            <th scope="col">Pesanan</th>
            <th scope="col">Alamat</th>
            <th scope="col">Bukti Pembayaran</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
          <tr>
            <td><?php echo $row["jumlah"]; ?></td>
            <td><?php echo $row["pesanan"]; ?></td>
            <td><?php echo $row["alamat"]; ?></td>
            <td><img src="file/<?php echo $row['bukti']; ?>" style="width: 100px;"></td>
            <td>
              <button type="button" class="btn btn-success delete-btn" data-id="<?php echo $row['id']; ?>">Pesanan Selesai</button>
            </td>
          </tr>
        <?php endwhile; ?>
      </table>
    </div>

    <!-- Footer -->
    <footer>
      <p>&copy; 2023 Teh Lima</p>
    </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function () {
      // Add event listener to the delete button
      $('.delete-btn').click(function () {
        var id = $(this).data('id');

        // Show a confirmation dialog
        Swal.fire({
          title: 'Apakah Anda Yakin Pesanan Sudah Selesai?',
          text: "Pesanan Yang Telah Selesai Tidak Akan Muncul Di Halaman Ini Lagi",
          icon: 'info',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Iya'
        }).then((result) => {
          if (result.isConfirmed) {
            // If confirmed, send an AJAX request to delete the row
            $.ajax({
              url: window.location.href,
              type: 'POST',
              data: { delete: id },
              success: function (response) {
                // If the deletion is successful, remove the row from the table
                if (response === 'deleted') {
                  $(this).closest('tr').remove();
                  Swal.fire(
                    'Pesanan Selesai',
                    'success'
                  ).then(() => {
                    location.reload(); // Reload the page
                  });
                }
              }
            });
          }
        });
      });
    });
  </script>
</body>
</html>