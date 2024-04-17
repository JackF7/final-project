<?php

require_once '../app/core/config.php';
require_once '../app/models/Comments.php'; 
use app\models\Comment;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['title']) && isset($_POST['description'])) {

        $commentModel = new Comment();

        $title = htmlspecialchars($_POST['title'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $description = htmlspecialchars($_POST['description'], ENT_QUOTES | ENT_HTML5, 'UTF-8');

        $saveResult = $commentModel->saveAComment($title, $description);

        if ($saveResult) {
     
            header("Location: ruth");
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
