<?php

require_once '../app/core/config.php';
require_once '../app/models/Comments.php'; 

use app\models\Comment;

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id']) && isset($_GET['section'])) {
    $commentModel = new Comment();
    $commentId = $_GET['id'];
    $section = $_GET['section'];

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

    $deleteResult = $commentModel->deleteAComment($tableName, $commentId);

    if ($deleteResult) {
        if (isset($_SERVER['HTTP_REFERER'])) {
            header("Location: " . $_SERVER['HTTP_REFERER']);
        } else {
            header("Location: index.php");
        }
        exit();
    } else {
        echo "Failed to delete the comment.";
    }
} else {
    echo "Invalid request.";
}
