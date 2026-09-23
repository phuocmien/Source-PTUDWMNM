<?php

session_start();

define(
    'ROOT_PATH',
    __DIR__
);

define(
    'BASE_URL',
    '/phuocmien-ebook'
);

define(
    'STORAGE_PATH',
    ROOT_PATH . '/storage'
);
require_once
ROOT_PATH .
'/app/core/Autoloader.php';

Autoloader::register();

require_once
ROOT_PATH .
'/config/database.php';

$page =
$_GET['page']
?? 'login';

switch($page)
{
    case 'login':

        require_once
        ROOT_PATH .
        '/app/controllers/AuthController.php';

        (new AuthController())
        ->login();

        break;
    case 'admin-dashboard':

        require_once
        ROOT_PATH .
        '/app/controllers/DashboardController.php';

        (new DashboardController())
        ->admin();

        break;
    
    case 'author-dashboard':

        require_once
        ROOT_PATH .
        '/app/controllers/DashboardController.php';

        (new DashboardController())
        ->author();

        break;
    
    case 'member-dashboard':

        require_once
        ROOT_PATH .
        '/app/controllers/DashboardController.php';

        (new DashboardController())
        ->member();

        break;
    case 'logout':

        require_once
        ROOT_PATH .
        '/app/controllers/AuthController.php';

        (new AuthController())
        ->logout();

        break;
    case 'author-requests':

        require_once
        ROOT_PATH .
        '/app/controllers/AuthorRequestController.php';

        (new AuthorRequestController())
        ->index();

        break;
    case 'author-approve':

        require_once
        ROOT_PATH .
        '/app/controllers/AuthorRequestController.php';

        (new AuthorRequestController())
        ->approve();

        break;

    case 'author-reject':

        require_once
        ROOT_PATH .
        '/app/controllers/AuthorRequestController.php';

        (new AuthorRequestController())
        ->reject();

        break;
    
    
    case 'catalog':

        (new CatalogController())
        ->index();

        break;

    case 'book-detail':

        (new CatalogController())
        ->detail();

        break;
    case 'admin-books':

        (new AdminBookController())
        ->index();

        break;
        
    case 'book-approve':

        (new AdminBookController())
        ->approve();

        break;
    
    case 'book-reject':

        (new AdminBookController())
        ->reject();

        break;
    case 'author-chapters':

        (new AuthorChapterController())
        ->index();

        break;
    case 'chapter-create':

        (new AuthorChapterController())
        ->create();

        break;
    case 'chapter-store':

        (new AuthorChapterController())
        ->store();

        break;
    case 'author-books':

        (new AuthorBookController())
        ->index();

        break;
    case 'book-create':

        (new AuthorBookController())
        ->create();

        break;
    case 'book-store':

        (new AuthorBookController())
        ->store();

        break;
    case 'admin-chapters':

        (new AdminChapterController())
        ->index();

        break;
    case 'chapter-approve':

        (new AdminChapterController())
        ->approve();

        break;
    case 'chapter-reject':

        (new AdminChapterController())
        ->reject();

        break;
    case 'buy-book':

        (new PurchaseController())
        ->buy();

        break;
    default:

        echo "Page not found";
}