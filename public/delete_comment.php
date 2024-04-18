<?php

require_once '../app/core/config.php';
require_once '../app/models/Comments.php'; 

use app\models\Comment;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['confirm']) && $_POST['confirm'] === 'yes') {

    // Retrieve comment ID and section from POST data
    $commentId = $_POST['id'];
    $section = $_POST['section'];

    // Create a new instance of the Comment model
    $commentModel = new Comment();

    // Define the table name based on the section
    $tableName = '';
    switch ($section) {
        case 'ruth1':
            $tableName = 'ruth1_comments';
            break;
        case 'ruth2':
            $tableName = 'ruth2_comments';
            break;
        case 'ruth3':
            $tableName = 'ruth3_comments';
            break;
        case 'ruth4':
            $tableName = 'ruth4_comments';
            break;
        case 'sufism-poetry':
            $tableName = 'sufism_comments';
            break;
        default:
            // Handle invalid section
            header("Location: notFound");
            exit();
    }

    // Delete the comment from the database
    $deleteResult = $commentModel->deleteAComment($tableName, $commentId);

    // Check if deletion was successful
    if ($deleteResult) {
        // Redirect to the appropriate page after deletion
        header("Location: $section");
        exit();
    } else {
        // Handle deletion failure
        header("Location: error.php");
        exit();
    }
} else {
    // Redirect back to the previous page or show an error message
    header("Location: error.php");
    exit();
}