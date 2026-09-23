<?php

class Book
{
    private $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function getAll()
    {
        $sql = "
        SELECT
            b.*,
            u.fullname
        FROM books b
        LEFT JOIN users u
            ON b.author_user_id = u.id
        ORDER BY b.id DESC
        ";

        return $this->conn->query($sql);
    }

    public function getByAuthor($authorId)
    {
        $stmt = $this->conn->prepare(
            "SELECT *
             FROM books
             WHERE author_user_id = ?
             ORDER BY id DESC"
        );

        $stmt->bind_param(
            "i",
            $authorId
        );

        $stmt->execute();

        return $stmt->get_result();
    }

    

    public function approve($id)
    {
        return $this->conn->query(
            "UPDATE books
             SET status='approved'
             WHERE id='$id'"
        );
    }

    public function reject($id)
    {
        return $this->conn->query(
            "UPDATE books
             SET status='rejected'
             WHERE id='$id'"
        );
    }

    public function find($id)
    {
        $stmt = $this->conn->prepare(
            "SELECT *
             FROM books
             WHERE id=?"
        );

        $stmt->bind_param(
            "i",
            $id
        );

        $stmt->execute();

        return $stmt
            ->get_result()
            ->fetch_assoc();
    }

    public function getApproved()
    {
        $sql = "

        SELECT

        b.*,

        u.fullname

        FROM books b

        LEFT JOIN users u

        ON b.author_user_id=u.id

        WHERE b.status='approved'

        ORDER BY b.id DESC

        ";

        return $this->conn->query($sql);
    }
    public function findWithAuthor($id)
    {
        $stmt =
        $this->conn->prepare(

        "SELECT

        b.*,

        u.fullname

        FROM books b

        LEFT JOIN users u

        ON b.author_user_id=u.id

        WHERE b.id=?"

        );

        $stmt->bind_param(
            "i",
            $id
        );

        $stmt->execute();

        return
        $stmt
        ->get_result()
        ->fetch_assoc();
    }
    public function getPending()
    {
        $sql = "

        SELECT
            b.*,
            u.fullname

        FROM books b

        LEFT JOIN users u
        ON b.author_user_id=u.id

        WHERE b.status='pending'

        ORDER BY b.id DESC

        ";

        return $this->conn->query($sql);
    }
    public function create(
        $authorId,
        $title,
        $description,
        $price,
        $durationMonths,
        $coverImage
    )
    {
        $stmt = $this->conn->prepare(

        "INSERT INTO books
        (
            author_user_id,
            title,
            description,
            price,
            duration_months,
            cover_image,
            commission_percent,
            status
        )
        VALUES
        (
            ?,
            ?,
            ?,
            ?,
            ?,
            ?,
            80,
            'pending'
        )"

        );

        $stmt->bind_param(
        "issdis",
        $authorId,
        $title,
        $description,
        $price,
        $durationMonths,
        $coverImage
    );

        return $stmt->execute();
    }
}