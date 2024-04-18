<?php
require_once '../app/core/config.php';
require_once '../app/models/Comments.php';

use app\models\Comment;

// Check if the comment ID and section are provided in the URL
if(isset($_GET['id']) && isset($_GET['section'])) {
    $commentModel = new Comment();
    $commentId = $_GET['id'];
    $section = $_GET['section']; // Retrieve the section parameter
    
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
    
    // Fetch the comment data based on the comment ID
    $comment = $commentModel->getCommentById($tableName, $commentId);
    
    if($comment) {
        // Display the update comment form
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Comment</title>
    <link href="../../assets-bootstrap/css-bootstrap/styles.css" rel="stylesheet">
    <style>
       body {
            text-align: center;
        }  
    </style>
</head>
<body>
    
    <h2>Update Comment</h2>
    <form method="post" action="update_comment.php">
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
    <input type="hidden" name="section" value="<?php echo $_GET['section']; ?>"> <!-- Add the section parameter -->
    <div class="mb-3">
        <label for="title" class="form-label">Title:</label>
        <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($comment['title']); ?>" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description:</label>
        <textarea class="form-control" id="description" name="description" required><?php echo htmlspecialchars($comment['description']); ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit Update</button>
    </form>

</body>
</html>

<?php
    } else {
        echo "Comment not found.";
    }
} else {
    echo "Comment ID or section not provided.";
}
?>
