
<!DOCTYPE html>
<html>
<head>
    <title>Booking Form</title>
</head>
<body>
    <h2>Booking Form</h2>
    <form action="process_booking.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required><br><br>

        <label for="check_in_date">Check-in Date:</label>
        <input type="date" id="check_in_date" name="check_in_date" required><br><br>

        <label for="check_out_date">Check-out Date:</label>
        <input type="date" id="check_out_date" name="check_out_date" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
// Database configuration
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$check_in_date = $_POST['check_in_date'];
$check_out_date = $_POST['check_out_date'];

// Insert the booking data into the database
$sql = "INSERT INTO bookings (name, email, phone, check_in_date, check_out_date)
        VALUES ('$name', '$email', '$phone', '$check_in_date', '$check_out_date')";

if ($conn->query($sql) === TRUE) {
    echo "Booking submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
