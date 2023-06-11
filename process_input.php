<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "777888999";
$dbname = "pembelian";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $jumlah = $_POST["jumlah"];
    $pesanan = $_POST["pesanan"];
    $alamat = $_POST["alamat"];
    $bukti = $_FILES["bukti"]["name"];

    // Upload the file
    $file_tmp = $_FILES['bukti']['tmp_name'];
    move_uploaded_file($file_tmp, 'file/' . $bukti);

    // Insert the form data into the database
    $sql = "INSERT INTO tehlima (jumlah, pesanan, alamat, bukti) VALUES ('$jumlah', '$pesanan', '$alamat', '$bukti')";
    if ($conn->query($sql) === TRUE) {
        // Redirect to waiting.php
        header("Location: waiting.php");
        exit();
    } else {
        echo '<script>alert("Error: ' . $sql . '\n' . $conn->error . '");</script>';
    }
}

$conn->close();
?>
