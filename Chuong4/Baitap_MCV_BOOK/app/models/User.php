<?php


class User
{
    private $conn;

    public function __construct()
    {
        $db =
        new Database();

        $this->conn =
        $db->connect();
    }

    public function findByEmail($email)
{
    $stmt =
    $this->conn->prepare(

        "SELECT *
         FROM users
         WHERE email=?"

    );

    $stmt->bind_param(
        "s",
        $email
    );

    $stmt->execute();

    $result =
    $stmt->get_result();

    return
    $result->fetch_assoc();
}
}