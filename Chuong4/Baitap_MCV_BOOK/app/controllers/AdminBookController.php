<?php

class AdminBookController
extends BaseAdminController
{
    public function index()
    {
        $book =
        new Book();

        $books =
        $book->getAll();

        $view =
        ROOT_PATH .
        '/app/views/admin/books/index.php';

        $this->render(
            $view,
            compact('books')
        );
    }

    public function approve()
    {
        $book =
        new Book();

        $book->approve(
            $_GET['id']
        );

        header(
        "Location:index.php?page=admin-books"
        );
    }

    public function reject()
    {
        $book =
        new Book();

        $book->reject(
            $_GET['id']
        );

        header(
        "Location:index.php?page=admin-books"
        );
    }
}