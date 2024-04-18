<?php
require_once '../app/core/config.php';
require_once '../app/models/Comments.php';

use app\models\Comment;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id']) && isset($_POST['section'])) {
    $commentModel = new Comment();
    $commentId = $_POST['id'];
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

    $updateResult = $commentModel->updateAComment($tableName, $commentId, $title, $description);

    if ($updateResult) {
        // Redirect to the page where you want to show the updated comment
        header("Location: $section");
        exit();
    } else {
        echo "Failed to update the comment.";
    }
} else {
    echo "Invalid request.";
}
?>
