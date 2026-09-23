<?php

class BaseAdminController
{
    public function __construct()
    {
        RoleMiddleware::admin();
    }

    protected function render($view, $data = [])
    {
        extract($data);

        require
        ROOT_PATH .
        '/app/views/layouts/admin.php';
    }
}