<?php
require_once '../app/core/config.php'; 

// Check if form data is received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are filled
    if (!empty($_POST['title']) && !empty($_POST['description'])) {
        try {
            // Establish a database connection
            $conn = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Prepare and bind parameters
            $stmt = $conn->prepare("INSERT INTO ruth1_comments (title, description) VALUES (?, ?)");
            $stmt->bindParam(1, $title);
            $stmt->bindParam(2, $description);

            // Set parameters and execute
            $title = $_POST['title'];
            $description = $_POST['description'];
            
            // Attempt to execute the statement
            if ($stmt->execute()) {
                // Close statement
                $stmt->closeCursor();

                // Close database connection
                $conn = null;

                // Return success response
                echo json_encode(["success" => true]);
            } else {
                // Return error response if execution fails
                echo json_encode(["success" => false, "message" => "Failed to insert comment"]);
            }
        } catch (PDOException $e) {
            // Return error response if a PDOException occurs
            echo json_encode(["success" => false, "message" => $e->getMessage()]);
        }
    } else {
        // Return error response if required fields are missing
        echo json_encode(["success" => false, "message" => "All fields are required"]);
    }
} else {
    // Return error response if request method is not POST
    echo json_encode(["success" => false, "message" => "Invalid request method"]);
}