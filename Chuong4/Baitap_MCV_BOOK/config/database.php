<?php

class Database
{
    private $host = "localhost";

    private $user = "root";

    private $password = "";

    private $dbname =
    "phuocmien_ebook";

    public function connect()
    {
        $conn =
        new mysqli(

            $this->host,

            $this->user,

            $this->password,

            $this->dbname

        );

        $conn->set_charset(
            "utf8mb4"
        );

        return $conn;
    }
}