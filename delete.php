<?php
// Retrieve the submitted ID
$id = $_POST['id'];

// Perform database connection
$conn = mysqli_connect("localhost", "root", "777888999", "pembelian");

// Check for connection errors
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Perform the deletion query
$sql = "DELETE FROM tehlima WHERE id = '$id'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
