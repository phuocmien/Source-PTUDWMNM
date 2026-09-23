<?php

class MemberDashboardController
extends BaseMemberController
{
    public function index()
    {
        $view =
        ROOT_PATH .
        '/app/views/member/dashboard/index.php';

        $this->render($view);
    }
}