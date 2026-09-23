<?php

class UserBook
{
    private $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function buy(
        $userId,
        $bookId,
        $durationMonths
    )
    {
        $startDate =
        date('Y-m-d H:i:s');

        $endDate =
        date(
            'Y-m-d H:i:s',
            strtotime(
                "+{$durationMonths} month"
            )
        );

        $stmt =
        $this->conn->prepare(

        "INSERT INTO user_books
        (
            user_id,
            book_id,
            start_date,
            end_date,
            status
        )
        VALUES
        (
            ?,
            ?,
            ?,
            ?,
            'active'
        )"

        );

        $stmt->bind_param(
            "iiss",
            $userId,
            $bookId,
            $startDate,
            $endDate
        );

        return $stmt->execute();
    }

    public function hasAccess(
        $userId,
        $bookId
    )
    {
        $stmt =
        $this->conn->prepare(

        "SELECT id
        FROM user_books
        WHERE user_id=?
        AND book_id=?
        AND status='active'
        AND end_date>=NOW()"

        );

        $stmt->bind_param(
            "ii",
            $userId,
            $bookId
        );

        $stmt->execute();

        return
        $stmt
        ->get_result()
        ->num_rows > 0;
    }
    public function countByUser($userId)
    {
        $stmt = $this->conn->prepare(

        "SELECT COUNT(*) total
        FROM user_books
        WHERE user_id=?
        AND status='active'
        AND end_date>=NOW()"

        );

        $stmt->bind_param(
            "i",
            $userId
        );

        $stmt->execute();

        $result =
        $stmt->get_result()
        ->fetch_assoc();

        return $result['total'];
    }
}