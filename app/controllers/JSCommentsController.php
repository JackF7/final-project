<?php

namespace app\controllers;

use app\models\JSComment;

class JSCommentsController
{
    public function saveComment()
    {
        // Retrieve the title and description from the POST data
        $title = $_POST['title'] ?? '';
        $description = $_POST['description'] ?? '';

        // Validate if title and description are not empty
        if (empty($title) || empty($description)) {
            http_response_code(400);
            echo json_encode(["success" => false, "message" => "Title and description are required"]);
            exit();
        }

        // Create a new instance of the Comment model
        $commentModel = new JSComment();

        // Save the comment
        $success = $commentModel->saveComment($title, $description);

        if ($success) {
            echo json_encode(["success" => true]);
        } else {
            echo json_encode(["success" => false, "message" => "Failed to save comment"]);
        }
        exit();
    }

    public function getComments()
    {
        // Create a new instance of the Comment model
        $commentModel = new JSComment();

        // Retrieve all comments
        $comments = $commentModel->getAllComments();

        // Return the comments as JSON
        echo json_encode($comments);
        exit();
    }

}