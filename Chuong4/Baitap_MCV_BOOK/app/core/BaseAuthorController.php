<?php

class BaseAuthorController
{
    public function __construct()
    {
        RoleMiddleware::author();
    }

    protected function render($view, $data = [])
    {
        extract($data);

        require
        ROOT_PATH .
        '/app/views/layouts/author.php';
    }
}