<?php
// Check if the 'id' parameter is provided via GET request
if (isset($_GET['id'])) {
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

    // Get the id from the GET request
    $id = $_GET['id'];

    // Prepare the delete statement
    $sql = "DELETE FROM form WHERE id = $id";

    // Execute the delete statement
    if ($conn->query($sql) === TRUE) {
      header('location:data.php');
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
}
?>