<?php

class AuthorChapterController
extends BaseAuthorController
{
    public function index()
    {
        RoleMiddleware::author();

        $chapter =
        new Chapter();

        $chapters =
            $chapter->getByBook(
                $_GET['book_id']
            );

        $book =
        (new Book())
        ->find(
            $_GET['book_id']
        );

        $view =
        ROOT_PATH .
        '/app/views/author/chapters/index.php';

        $this->render(
            $view,
            compact(
                'chapters',
                'book'
            )
        );
    }

    public function create()
    {
        RoleMiddleware::author();

        $book =
        (new Book())
        ->find(
            $_GET['book_id']
        );

        $view =
        ROOT_PATH .
        '/app/views/author/chapters/create.php';

        $this->render(
            $view,
            compact('book')
        );
    }

    public function store()
    {
        RoleMiddleware::author();

        $pdfFile = '';

        if(
            isset($_FILES['pdf_file'])
            &&
            $_FILES['pdf_file']['error']==0
        )
        {
            $pdfFile =
            time().
            '_'.
            $_FILES['pdf_file']['name'];

            move_uploaded_file(
                $_FILES['pdf_file']['tmp_name'],
                ROOT_PATH .
                '/storage/pdf/' .
                $pdfFile
            );
        }

        $chapter =
        new Chapter();

        $chapter->create(
            $_POST['book_id'],
            $_POST['chapter_no'],
            $_POST['title'],
            $_POST['description'],
            $pdfFile
        );

        header(
        "Location:index.php?page=author-chapters&book_id=" .
        $_POST['book_id']
        );
    }
}