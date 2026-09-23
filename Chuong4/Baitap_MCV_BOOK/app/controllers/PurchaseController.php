<?php

class PurchaseController
{
    public function buy()
    {
        RoleMiddleware::member();

        $book =
        (new Book())
        ->find(
            $_GET['id']
        );

        $userBook =
        new UserBook();

        $userBook->buy(
            $_SESSION['user']['id'],
            $book['id'],
            $book['duration_months']
        );

        header(
        "Location:index.php?page=book-detail&id="
        .$book['id']
        );

        exit;
    }
}