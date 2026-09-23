<?php

require_once
ROOT_PATH .
'/config/database.php';

class AuthorRequest
{
    private $conn;

    public function __construct()
    {
        $db =
        new Database();

        $this->conn =
        $db->connect();
    }

    public function getAll()
    {
        $sql = "

        SELECT

        ar.*,

        u.fullname,

        u.email

        FROM author_requests ar

        LEFT JOIN users u

        ON ar.user_id=u.id

        ORDER BY ar.id DESC

        ";

        return
        $this->conn->query(
            $sql
        );
    }

    public function approve(
        $id
    )
    {
        $request =
        $this->getById($id);

        $user_id =
        $request['user_id'];

        $this->conn->query(

        "UPDATE users
         SET role='author'
         WHERE id='$user_id'"

        );

        return
        $this->conn->query(

        "UPDATE author_requests
         SET status='approved'
         WHERE id='$id'"

        );
    }

    public function reject(
        $id
    )
    {
        return
        $this->conn->query(

        "UPDATE author_requests
         SET status='rejected'
         WHERE id='$id'"

        );
    }

    public function getById($id)
    {
        $result =
        $this->conn->query(

        "SELECT *
         FROM author_requests
         WHERE id='$id'"

        );

        return
        $result->fetch_assoc();
    }
}