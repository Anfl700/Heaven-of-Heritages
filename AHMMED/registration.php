<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "3360";
$database = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Process login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  // Validate user input (you may also want to add more validation)
  
  // Query the database
  $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = $conn->query($sql);
  
  if ($result->num_rows == 1) {
    // User found, login successful
    echo "Login successful!";
    // Redirect user to a new page or perform other actions
  } else {
    // No user found, display error message
    echo "Invalid username or password";
  }
}

// Close connection
$conn->close();
?>


