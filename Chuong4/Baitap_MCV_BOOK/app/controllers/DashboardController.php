<?php

class DashboardController
{
    public function admin()
    {
        RoleMiddleware::admin();

        $view =
        ROOT_PATH .
        '/app/views/admin/dashboard/index.php';

        require
        ROOT_PATH .
        '/app/views/layouts/admin.php';
    }

    public function author()
    {
        RoleMiddleware::author();

        $view =
        ROOT_PATH .
        '/app/views/author/dashboard/index.php';

        require
        ROOT_PATH .
        '/app/views/layouts/author.php';
    }
    public function member()
    {
        RoleMiddleware::member();

        $userBook =
        new UserBook();

        $bookCount =
        $userBook->countByUser(
            $_SESSION['user']['id']
        );

        $view =
        ROOT_PATH .
        '/app/views/member/dashboard/index.php';

        require
        ROOT_PATH .
        '/app/views/layouts/member.php';
    }
    
}