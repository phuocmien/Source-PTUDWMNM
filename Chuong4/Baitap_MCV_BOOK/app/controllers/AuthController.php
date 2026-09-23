<?php



class AuthController
{
    public function login()
    {
        if(
            $_SERVER['REQUEST_METHOD']
            ==
            'POST'
        )
        {
            $email =
            trim(
                $_POST['email']
            );

            $password =
            md5(
                $_POST['password']
            );

            $userModel =
            new User();

            $user =
            $userModel
            ->findByEmail(
                $email
            );

            if(
                $user
                &&
                $user['password']
                ==
                $password
            )
            {
                $_SESSION['user']
                =
                $user;

                switch(
                    $user['role']
                )
                {
                    case 'admin':

                        header(
                        "Location:index.php?page=admin-dashboard"
                        );

                        break;

                    case 'author':

                        header(
                        "Location:index.php?page=author-dashboard"
                        );

                        break;

                    default:

                        header(
                        "Location:index.php?page=member-dashboard"
                        );
                }

                exit;
            }

            $error =
            "Sai email hoặc mật khẩu";
        }

        require
        ROOT_PATH .
        '/app/views/auth/login.php';
    }

    public function logout()
    {
        session_destroy();

        header(
        "Location:index.php?page=login"
        );
    }
}