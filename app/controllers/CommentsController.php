<?php

namespace app\controllers;

use app\models\Comments;

class CommentsController
{
    public function validatePost($inputData) {
        $errors = [];
        $title = $inputData['title'];
        $description = $inputData['description'];

        if ($title) {
            $title = htmlspecialchars($title, ENT_QUOTES|ENT_HTML5, 'UTF-8', true);
            if (strlen($title) < 2) {
                $errors['titleShort'] = 'title is too short';
            }
        } else {
            $errors['titleRequired'] = 'title is required';
        }

        if ($description) {
            $description = htmlspecialchars($description, ENT_QUOTES|ENT_HTML5, 'UTF-8', true);
            if (strlen($description) < 2) {
                $errors['descriptionShort'] = 'description is too short';
            }
        } else {
            $errors['descriptionRequired'] = 'description is required';
        }

        if (count($errors)) {
            http_response_code(400);
            echo json_encode($errors);
            exit();
        }
        return [
            'title' => $title,
            'description' => $description,
        ];
    }

    public function getPosts($id) {
        header("Content-Type: application/json");
        if ($id) {
            $postModel = new Comment();
            $post = $postModel->getPostByAnId($id);
            $posts[] = $post;
        } else {
            $postModel = new Comment();
            $posts = $postModel->getAllPosts();
        }
        echo json_encode($posts);

        exit();
    }

    public function savePost() {
        $inputData = [
            'title' => $_POST['title'] ? $_POST['title'] : false,
            'description' => $_POST['description'] ? $_POST['description'] : false,
        ];
        $postData = $this->validatePost($inputData);

        $postModel = new Comment();
        $savePost = $postModel->saveAPost($postData['title'], $postData['description']);

        http_response_code(200);
        echo json_encode([
            'success' => true
        ]);
        exit();
    }

    public function updatePost($id) {
        if (!$id) {
            http_response_code(404);
            exit();
        }

        //no built-in super global for PUT
        parse_str(file_get_contents('php://input'), $_PUT);

        $inputData = [
            'title' => $_PUT['title'] ? $_PUT['title'] : false,
            'description' => $_PUT['description'] ? $_PUT['description'] : false,
        ];
        $postData = $this->validatePost($inputData);

        $postModel = new Comment();
        $update = $postModel->updateAPost($id, $postData['title'], $postData['description']);
        

        http_response_code(200);
        echo json_encode([
            'success' => true
        ]);
        exit();
    }

    public function deletePost($id) {
        if (!$id) {
            http_response_code(404);
            exit();
        }

        $postModel = new Comment();
        $delete = $postModel->deleteAPost($id);

        http_response_code(200);
        echo json_encode([
            'success' => true
        ]);
        exit();
    }

}