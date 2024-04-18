<?php

namespace app\models;

require_once "../app/core/Database.php";

use app\core\Database;
use PDO;
use PDOException;

class Comment
{
    use Database;

    public function getAllComments($tableName)
    {
        $connection = $this->connect();

        $statement = $connection->prepare("SELECT * FROM $tableName");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function saveAComment($tableName, $title, $description)
    {
        $connection = $this->connect();

        $statement = $connection->prepare("INSERT INTO $tableName (title, description) VALUES (:title, :description)");
        $statement->bindParam(':title', $title);
        $statement->bindParam(':description', $description);
        return $statement->execute();
    }

    public function updateAComment($tableName, $id, $title, $description)
    {
        $connection = $this->connect();

        $statement = $connection->prepare("UPDATE $tableName SET title = :title, description = :description WHERE id = :id");
        $statement->bindParam(':id', $id);
        $statement->bindParam(':title', $title);
        $statement->bindParam(':description', $description);
        return $statement->execute();
    }

    public function getCommentById($tableName, $id)
    {
        $connection = $this->connect();

        $statement = $connection->prepare("SELECT * FROM $tableName WHERE id = :id");
        $statement->bindParam(':id', $id);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function deleteAComment($tableName, $id)
    {
        $connection = $this->connect();

        $statement = $connection->prepare("DELETE FROM $tableName WHERE id = :id");
        $statement->bindParam(':id', $id);
        return $statement->execute();
    }
}