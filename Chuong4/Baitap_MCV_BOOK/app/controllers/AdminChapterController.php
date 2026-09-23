<?php

class AdminChapterController
extends BaseAdminController
{
    public function index()
    {
        $chapter =
        new Chapter();

        $chapters =
        $chapter->getAll();

        $view =
        ROOT_PATH .
        '/app/views/admin/chapters/index.php';

        $this->render(
            $view,
            compact('chapters')
        );
    }

    public function approve()
    {
        (new Chapter())
        ->approve(
            $_GET['id']
        );

        header(
        "Location:index.php?page=admin-chapters"
        );
        exit;
    }

    public function reject()
    {
        (new Chapter())
        ->reject(
            $_GET['id']
        );

        header(
        "Location:index.php?page=admin-chapters"
        );
        exit;
    }
}