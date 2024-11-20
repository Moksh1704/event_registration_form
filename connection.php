<?php
// Set up MySQL connection parameters
$servername = "localhost";  // Assuming MySQL server is running locally
$username = "root";         // Default username for XAMPP MySQL
$password = "";             // Default password (blank) for XAMPP MySQL
$dbname = "event_management";  // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];


// Prepare SQL statement to insert data into the database
$sql = "INSERT INTO registrations (first_name, last_name, email, phone, address, city, state, zip) 
        VALUES ('$first_name', '$last_name', '$email', '$phone', '$address', '$city', '$state', '$zip')";

// Execute SQL statement and check for success
if ($conn->query($sql) === TRUE) {
    echo "Registration successful";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close MySQL connection
$conn->close();
?>