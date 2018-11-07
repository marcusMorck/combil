<?php

$request = $_SERVER['REDIRECT_URL'];

switch ($request) {
    case '/':
        require __DIR__ . '/views/index.php';
        break;
    case '':
        require __DIR__ . '/views/index.php';
        break;
    case '/butik':
        require __DIR__ . '/header.php';
        require __DIR__ . '/components/hero.php';
        require __DIR__ . '/footer.php';
        break;
    case '/service&reparation':
        require __DIR__ . '/views/service&reparation.php';  
        break;
    case '/dackservice':
        require __DIR__ . '/header.php';
        require __DIR__ . '/components/hero.php';
        require __DIR__ . '/footer.php';
        break;
    case '/bilglas':
        require __DIR__ . '/views/bilglas.php';  
        break;
    case '/kontakt':
        require __DIR__ . '/views/kontakt.php';  
        break;
    case '/nyhetsblogg':
        require __DIR__ . '/views/nyhetsblogg.php';  
        break;
    default:
        require __DIR__ . '404.php';
        break;
}


?>

