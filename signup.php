<?php
// Database connection parameters
$servername = "localhost:3308";
$username = "root";
$password = "";
$database = "user_authentication1"; // assuming you created this database

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process signup form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['signup'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        // Hash the password before storing it in the database (you should use a more secure hashing method)
        $hashed_password = md5($password); // Example: using MD5 hashing
        
        // Perform a SQL query to insert the new user into the database
        $sql = "INSERT INTO users (email, password) VALUES ('$email', '$hashed_password')";
        
        if ($conn->query($sql) === TRUE) {
            // Signup successful
            echo "Signup successful!";
            // Redirect the user to another page or perform further actions
        } else {
            // Signup failed
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
