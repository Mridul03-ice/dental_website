<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "labform";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Retrieve the submitted values
  $id = $_POST["id"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Prepare the update query
  $sql = "UPDATE form SET username = ?, email = ?, password = ? WHERE id = ?";

  // Prepare the statement
  $stmt = $conn->prepare($sql);

  if ($stmt) {
    // Bind the parameters
    $stmt->bind_param("sssi", $username, $email, $password, $id);

    // Execute the statement
    if ($stmt->execute()) {
      header('location: data.php');
      exit;
    } else {
      echo "Error updating user: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
  } else {
    echo "Error preparing statement: " . $conn->error;
  }
}

// Close the connection
$conn->close();
?>