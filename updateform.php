<!DOCTYPE html>
<html lang="en">
<head>
<title>Database Data</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
  table,th,td,tr{
    border: solid 2px;
    border-collapse: collapse;
  }
  body{
    background:  #79efff;
  }

  .update,
  .delete {
    padding: 5px 8px;
    font-size: 16px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-right: 10px;
  }

  .update:hover,
  .delete:hover {
    background-color: black;
  }
</style>
</head>
<body>
  <h2 style="font-size:4rem; text-align: center;">Database Data</h2>
    <tbody>
      <!-- PHP code to fetch and display data goes here -->
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

      // Fetch data from the database
      $sql = "SELECT * FROM form";
      $result = $conn->query($sql);

      // Display the fetched data in the table
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo "<form action='update.php' method='POST'>";
          echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
          echo "<input type='text' name='username' value='" . $row["username"] . "'><br>";
          echo "<input type='text' name='email' value='" . $row["email"] . "'><br>";
          echo "<input type='text' name='password' value='" . $row["password"] . "'><br>";
          echo "<input type='submit' value='Update' class='update'>";
          echo "</form>";
          echo "</td>";
          echo "</tr>";
        }
      } else {
        echo "<tr>";
        echo "<td colspan='5'>No data available</td>";
        echo "</tr>";
      }

      $conn->close();
      ?>
    </tbody>
  </table>

  <button value="Go to Home"  action="landingpage.php"></button>
</body>
</html>