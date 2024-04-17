<?php

namespace app\models;

require_once "../app/core/Database.php";

use app\core\Database;
use PDO;
use PDOException;

class Comment
{
    use Database;

    public function getAllComments()
    {
        $connection = $this->connect();

        $statement = $connection->prepare("SELECT * FROM ruth_comments");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function saveAComment($title, $description)
    {
        $connection = $this->connect();

        $statement = $connection->prepare("INSERT INTO ruth_comments (title, description) VALUES (:title, :description)");
        $statement->bindParam(':title', $title);
        $statement->bindParam(':description', $description);
        return $statement->execute();
    }

    public function updateAComment($id, $title, $description)
    {
        $connection = $this->connect();

        $statement = $connection->prepare("UPDATE ruth_comments SET title = :title, description = :description WHERE id = :id");
        $statement->bindParam(':id', $id);
        $statement->bindParam(':title', $title);
        $statement->bindParam(':description', $description);
        return $statement->execute();
    }

    public function getCommentById($id)
    {
        $connection = $this->connect();

        $statement = $connection->prepare("SELECT * FROM ruth_comments WHERE id = :id");
        $statement->bindParam(':id', $id);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function deleteAComment($id)
    {
        $connection = $this->connect();

        $statement = $connection->prepare("DELETE FROM ruth_comments WHERE id = :id");
        $statement->bindParam(':id', $id);
        return $statement->execute();
    }
}
