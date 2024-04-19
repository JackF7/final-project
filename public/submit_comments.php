<?php

require_once '../app/core/config.php';
require_once '../app/models/Comments.php'; 
use app\models\Comment;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['section'])) {
        $commentModel = new Comment();

        $title = htmlspecialchars($_POST['title'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $description = htmlspecialchars($_POST['description'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $section = $_POST['section'];

        $tableName = '';
        // Define the table name based on the section
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
                break;
        }

        // Save the comment using the appropriate table name
        $saveResult = $commentModel->saveAComment($tableName, $title, $description);
 
        if ($saveResult) {
            // Redirect back to the appropriate page
            header("Location: $section");
            exit();
        } else {
            echo "Error: Failed to save the comment.";
        }
    } else {
        echo "Error: Both title and description are required.";
    }
} else {
    echo "Invalid request method";
}