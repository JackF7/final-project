<?php

namespace app\models;

require_once '../app/core/config.php';

use PDO;
use PDOException;

class Comment
{
    private $db;

    public function __construct()
    {
        // Attempt to establish the database connection
        try {
            $host = DBHOST;
            $username = DBUSER;
            $password = DBPASS;
            $database = DBNAME;
            
            $this->db = new PDO("mysql:host=$host;dbname=$database", $username, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Return error response if connection fails
            echo json_encode(["success" => false, "message" => "Failed to connect to the database: " . $e->getMessage()]);
            exit(); 
        }
    }

    public function getAllComments()
    {
        $query = "SELECT * FROM ruth1_comments";
        $statement = $this->db->prepare($query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function saveComment($title, $description)
    {
        $query = "INSERT INTO ruth1_comments (title, description) VALUES (:title, :description)";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':title', $title);
        $statement->bindParam(':description', $description);
        return $statement->execute();
    }

}
