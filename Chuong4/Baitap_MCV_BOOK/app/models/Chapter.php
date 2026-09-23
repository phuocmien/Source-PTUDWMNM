<?php

class Chapter
{
    private $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function getByBook($bookId)
    {
        $stmt = $this->conn->prepare(
            "SELECT *
             FROM chapters
             WHERE book_id=?
             ORDER BY chapter_no"
        );

        $stmt->bind_param(
            "i",
            $bookId
        );

        $stmt->execute();

        return $stmt->get_result();
    }

    public function create(
        $bookId,
        $chapterNo,
        $title,
        $description,
        $pdfFile
    )
    {
        $stmt = $this->conn->prepare(
            "INSERT INTO chapters
            (
                book_id,
                chapter_no,
                title,
                description,
                pdf_file
            )
            VALUES
            (
                ?,
                ?,
                ?,
                ?,
                ?
            )"
        );

        $stmt->bind_param(
            "iisss",
            $bookId,
            $chapterNo,
            $title,
            $description,
            $pdfFile
        );

        return $stmt->execute();
    }

    public function approve($id)
    {
        return $this->conn->query(
            "UPDATE chapters
             SET status='approved'
             WHERE id='$id'"
        );
    }

    public function reject($id)
    {
        return $this->conn->query(
            "UPDATE chapters
             SET status='rejected'
             WHERE id='$id'"
        );
    }
    
    public function find($id)
    {
        $stmt = $this->conn->prepare(
            "SELECT *
            FROM chapters
            WHERE id=?"
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
    public function delete($id)
    {
        $stmt = $this->conn->prepare(
            "DELETE
            FROM chapters
            WHERE id=?"
        );

        $stmt->bind_param(
            "i",
            $id
        );

        return $stmt->execute();
    }
    public function getAll()
    {
        $sql = "

        SELECT

        c.*,

        b.title AS book_title

        FROM chapters c

        LEFT JOIN books b

        ON c.book_id=b.id

        ORDER BY c.id DESC

        ";

        return $this->conn->query($sql);
    }
    public function getApprovedByBook($bookId)
    {
        $stmt = $this->conn->prepare(

        "SELECT *
        FROM chapters
        WHERE book_id=?
        AND status='approved'
        ORDER BY chapter_no"

        );

        $stmt->bind_param(
            "i",
            $bookId
        );

        $stmt->execute();

        return $stmt->get_result();
    }
}