<?php
session_start();
// Retrieve the submitted email and password
$email = $_POST['email'];
$password = $_POST['password'];

// Perform database connection
$servername = "localhost";
$username = "root";
$password_db = "777888999";
$dbname = "login";

$conn = new mysqli($servername, $username, $password_db, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Perform query to check credentials
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
  $_SESSION['loggedin'] = true;
    // Redirect to admin.php
    header("Location: admin.php");
    exit;
}

// Close the database connection
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="img/322408890_544633044253087_2707340106307920283_n.jpg"
    />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <link href="login.css" rel="stylesheet" />
  </head>
  <body>
    <div class="video-container">
      <video
        autoplay
        muted
        loop
        src="img/Perfect Sunrise at the Beach with Calming Sound of Waves - 4K Ultra HD.mp4"
        type="video/mp4"
      ></video>
    </div>
    <div class="container">
      <div class="card login-form">
        <div class="card-body">
          <h1 class="card-title text-center" style="color: #eaea00">
            L O G I N
          </h1>
          <div class="card-logo text-center">
            <a href="index.php"><img
              src="img/322408890_544633044253087_2707340106307920283_n.jpg"
              alt="logo"
              width="70"
              height="70"
              class="rounded-circle"
            /></a>
          </div>
        </div>

        <div class="card-text">
        <form action="login.php" method="POST">
            <div class="mb-3">
              <label for="email" class="form-label"
                >Email address</label
              >
              <input
                type="email"
                class="form-control"
                name = "email"
                aria-describedby="emailHelp"
              />
            </div>
            <div class="mb-3">
              <label for="passwword" class="form-label"
                >Password</label
              >
              <input
                type="password"
                class="form-control"
                name="password"
              />
            </div>
            <button
              type="submit"
              class="btn btn-primary"
              onclick="redirectToAdmin()"
            >
              Submit
            </button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
