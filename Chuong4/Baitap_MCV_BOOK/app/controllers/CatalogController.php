<?php

class CatalogController
{
    public function index()
    {
        $book =
        new Book();

        $books =
        $book->getApproved();

        $view =
        ROOT_PATH .
        '/app/views/catalog/index.php';

        require
        ROOT_PATH .
        '/app/views/layouts/public.php';
    }

    public function detail()
    {
        $book =
        new Book();
       
        $item =
        $book->findWithAuthor(
            $_GET['id']
        );

        $chapter =
        new Chapter();

        $chapters =
        $chapter->getApprovedByBook(
            $_GET['id']
        );
         $hasAccess = false;

        if(
        isset($_SESSION['user'])
        )
        {
            $hasAccess =
            (new UserBook())
            ->hasAccess(
                $_SESSION['user']['id'],
                $_GET['id']
            );
        }
        $view =
        ROOT_PATH .
        '/app/views/catalog/detail.php';

        require
        ROOT_PATH .
        '/app/views/layouts/public.php';
    }
}