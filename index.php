<?php

$request = $_SERVER['REDIRECT_URL'];

switch ($request) {
    case '/':
        require __DIR__ . '/header.php';
        require __DIR__ . '/components/hero/hero.php';
        require __DIR__ . '/components/intro/intro.php';
        require __DIR__ . '/footer.php';
        break;
    case '':
        require __DIR__ . '/header.php';
        require __DIR__ . '/components/hero/hero.php';
        require __DIR__ . '/components/intro/intro.php';   
        require __DIR__ . '/footer.php';
        
        break;
    case '/butik':
        require __DIR__ . '/header.php';
        require __DIR__ . '/components/hero/hero.php';
        require __DIR__ . '/components/intro/intro.php';
        require __DIR__ . '/footer.php';
        break;
    case '/service&reparation':
        require __DIR__ . '/header.php';
        require __DIR__ . '/components/hero/hero.php';
        require __DIR__ . '/components/intro/intro.php';
        require __DIR__ . '/footer.php';
        break;
    case '/dackservice':
        require __DIR__ . '/header.php';
        require __DIR__ . '/components/hero/hero.php';
        require __DIR__ . '/components/intro/intro.php';
        require __DIR__ . '/footer.php';
        break;
    case '/bilglas':
        require __DIR__ . '/header.php';
        require __DIR__ . '/components/hero/hero.php';
        require __DIR__ . '/components/intro/intro.php';
        require __DIR__ . '/footer.php';  
        break;
    case '/kontakt':
        require __DIR__ . '/header.php';
        require __DIR__ . '/components/hero/hero.php';
        require __DIR__ . '/components/intro/intro.php';
        require __DIR__ . '/footer.php';  
    break;
    case '/nyhetsblogg':
        require __DIR__ . '/header.php';
        require __DIR__ . '/components/hero/hero.php';
        require __DIR__ . '/components/intro/intro.php';
        require __DIR__ . '/footer.php';   
    break;
    default:
        require __DIR__ . '404.php';
        break;
}


?>

