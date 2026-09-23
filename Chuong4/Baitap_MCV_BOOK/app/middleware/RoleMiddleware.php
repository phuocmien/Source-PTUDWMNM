<?php

require_once
ROOT_PATH .
'/app/middleware/AuthMiddleware.php';
class RoleMiddleware
{
    public static function admin()
    {
        AuthMiddleware::check();

        if(
            $_SESSION['user']['role']
            != 'admin'
        )
        {
            die(
                "Access Denied"
            );
        }
    }

    public static function author()
    {
        AuthMiddleware::check();

        if(
            $_SESSION['user']['role']
            != 'author'
        )
        {
            die(
                "Access Denied"
            );
        }
    }

    public static function member()
    {
        AuthMiddleware::check();

        if(
            $_SESSION['user']['role']
            != 'member'
        )
        {
            die(
                "Access Denied"
            );
        }
    }
}