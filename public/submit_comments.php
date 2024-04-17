<?php
require_once '../app/core/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli($DBHOST, $DBUSER, $DBPASS, $DBNAME);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $comment = $_POST['comment'];

    $sql = "INSERT INTO ruth_comments (description) VALUES (?)";
    $statement = $conn->prepare($sql);
    $statement->bind_param("s", $comment);

    if ($statement->execute()) {
        header("Location: ruth.php"); // Redirect back to ruth.php after submission
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $statement->close();
    $conn->close();
} else {
    echo "Invalid request method";
}
?>
