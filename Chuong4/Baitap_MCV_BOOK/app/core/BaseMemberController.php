<?php

class BaseMemberController
{
    public function __construct()
    {
        RoleMiddleware::member();
    }

    protected function render(
        $view,
        $data = []
    )
    {
        extract($data);

        require
        ROOT_PATH .
        '/app/views/layouts/member.php';
    }
}