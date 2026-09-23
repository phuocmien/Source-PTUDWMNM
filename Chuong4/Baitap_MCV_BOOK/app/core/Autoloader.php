<?php

class Autoloader
{
    public static function register()
    {
        spl_autoload_register(

            function($class)
            {
                $paths = [

                    ROOT_PATH .
                    '/app/controllers/',

                    ROOT_PATH .
                    '/app/models/',

                    ROOT_PATH .
                    '/app/middleware/',

                    ROOT_PATH .
                    '/app/core/',

                    ROOT_PATH .
                    '/app/services/'
                ];

                foreach(
                    $paths
                    as
                    $path
                )
                {
                    $file =
                    $path .
                    $class .
                    '.php';

                    if(
                        file_exists(
                            $file
                        )
                    )
                    {
                        require_once
                        $file;

                        return;
                    }
                }
            }

        );
    }
}