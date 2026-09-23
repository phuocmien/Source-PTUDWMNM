<?php



class AuthorRequestController
extends BaseAdminController
{
    public function index()
    {
       # RoleMiddleware::admin();

        $model =
        new AuthorRequest();

        $requests =
        $model->getAll();

        $view =
        ROOT_PATH .
        '/app/views/admin/author_requests/index.php';


        $this->render(
            $view,
            compact('requests')
        );
    }

    public function approve()
    {
        RoleMiddleware::admin();

        $model =
        new AuthorRequest();

        $model->approve(
            $_GET['id']
        );

        header(
        "Location:index.php?page=author-requests"
        );
    }

    public function reject()
    {
        RoleMiddleware::admin();

        $model =
        new AuthorRequest();

        $model->reject(
            $_GET['id']
        );

        header(
        "Location:index.php?page=author-requests"
        );
    }
}