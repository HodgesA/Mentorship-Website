<?php

// Change these variables to match your database configuration
$host = 'root';
$username = 'root@localhost';
$password = '1191053';
$dbname = 'mentors';

// Connect to the database
$conn = new mysqli($host, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert the form data into the database
$name = $_POST["name"];
$birthday = $_POST["birthday"];
$email = $_POST["email"];
$phone = $_POST["number"];
$reason = $_POST["message"];
$sql = "INSERT INTO mentors (name, birthday, email, phone, reason) VALUES ('$name', '$birthday', '$email', '$phone', '$reason')";
if ($conn->query($sql) === TRUE) {
    echo "New mentor record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();

// Send the email
$to = 'ashodges73@gmail.com';
$subject = "New Mentor submission";
$body = "Name: $name\nBirthday: $birthday\nEmail: $email\nMessage:\n$message Phone: $phone\nExpertise: $reason" ;
mail($to, $subject, $body);

?>


