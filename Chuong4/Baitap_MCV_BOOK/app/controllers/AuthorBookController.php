<?php

class AuthorBookController
extends BaseAuthorController
{
    public function index()
    {
        $model =
        new Book();

        $books =
        $model->getByAuthor(
            $_SESSION['user']['id']
        );

        $view =
        ROOT_PATH .
        '/app/views/author/books/index.php';

        $this->render(
            $view,
            compact('books')
        );
    }

    public function create()
    {
        $view =
        ROOT_PATH .
        '/app/views/author/books/create.php';

        $this->render($view);
    }

    public function store()
    {
        $cover = '';

        if(
            isset($_FILES['cover'])
            &&
            $_FILES['cover']['name']
        )
        {
            $cover =
            time()
            .'_'
            .
            $_FILES['cover']['name'];

            move_uploaded_file(

                $_FILES['cover']['tmp_name'],

                ROOT_PATH .
                '/storage/covers/'
                .$cover

            );
        }

        $book =
        new Book();

       $book->create(

            $_SESSION['user']['id'],

            $_POST['title'],

            $_POST['description'],

            $_POST['price'],

            $_POST['duration_months'],

            $cover

        );

        header(
        "Location:index.php?page=author-books"
        );
        exit;
    }
   
}