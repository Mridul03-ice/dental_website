<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <style>
    /* CSS styles for the form */
    .form-container {
      width: 300px;
      margin: 0 auto;
    }
    .form-group {
      margin-bottom: 10px;
    }
    .form-group label {
      display: block;
      font-weight: bold;
    }
    .form-group input {
      width: 100%;
      padding: 5px;
    }
    .submit-btn {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }
  </style>
  <script>
    // JavaScript code for form validation
    function validateForm() {
      var username = document.forms["registrationForm"]["username"].value;
      var email = document.forms["registrationForm"]["email"].value;
      var password = document.forms["registrationForm"]["password"].value;
      var confirmPassword = document.forms["registrationForm"]["confirmPassword"].value;

      if (username == "" || email == "" || password == "" || confirmPassword == "") {
        alert("All fields must be filled out");
        return false;
      }

      if (password != confirmPassword) {
        alert("Passwords do not match");
        return false;
      }
    }
  </script>
</head>
<body>
  <div class="form-container">
    <h2>Registration Form</h2>
    <form name="registrationForm" action="formsubmit.php" onsubmit="return validateForm()" method="post">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>
      </div>
      <button type="submit" class="submit-btn">Submit</button>
    </form>
  </div>
</body>
</html>
</body>
</html>