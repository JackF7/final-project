<?php
require_once '../app/core/config.php';

// Database connection parameters
$host = DBHOST;
$username = DBUSER;
$password = DBPASS;
$database = DBNAME;

// Attempt to establish the database connection
$conn = new mysqli($host, $username, $password, $database);

// Check if the connection is successful
if ($conn->connect_error) {
    // Return error response if connection fails
    echo json_encode(["success" => false, "message" => "Failed to connect to the database"]);
    exit(); // Terminate the script
}

// Hardcoded table name
$table = $_GET['$section'];

// Prepare SQL statement to select comments from the ruth1_comments table
$sql = "SELECT * FROM $table";

// Execute SQL query
$result = $conn->query($sql);

if ($result) {
    // Fetch comments as an associative array
    $comments = [];
    while ($row = $result->fetch_assoc()) {
        $comments[] = $row;
    }

    // Close result set
    $result->close();

    // Close connection
    $conn->close();

    // Return comments as JSON response
    echo json_encode($comments);
} else {
    // Return error response if query fails
    echo json_encode(["success" => false, "message" => "Failed to fetch comments"]);
}

?>
