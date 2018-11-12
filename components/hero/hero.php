<?php
    $request = $_SERVER['REDIRECT_URL'];

    function changeHero($c, $t){
        
        }

    switch ($request){
        case '':
            $class = "index";
            $title = "Välkommen till Combil!";
            require "templates/hero-template.php";
        break;
            case '/':
            $class = "index";
            $title = "Välkommen till Combil!";
        require "templates/hero-template.php";
        break;
        case '/butik':
            $class = "shop";
            $title = "Butik";
            require "templates/hero-template.php";
        break;
        case '/service&reparation':
            $class = "service";
            $title = "Service & Reparation";
            require "templates/hero-template.php";
        break;
        case '/dackservice':
            $class = "wheelservice";
            $title = "Däckservice";
            require "templates/hero-template.php";
        break;
        case '/bilglas':
            $class = "carglas";
            $title = "Bilglas";
            require "templates/hero-template.php";
        break;
        case '/kontakt':
            $class = "contact";
            $title = "Kontakt";
            require "templates/hero-template.php";
        break;
        case '/nyhetsblogg':
            $class = "newsblog";
            $title = "Nyhetsblogg";
            require "templates/hero-template.php";
        break;
    }

    /*Function that changes class on hero. Deppending on the url
    function changeHeroClass($url){
        if($url === null){
            $heroClass = "index";
            return $heroClass;
        }
        else if ($url === '/butik' ){
            $heroClass = "shop";
            return $heroClass;
        }
        else if ($url === '/dackservice'){
            $heroClass = "wheelservice";
            return $heroClass;
        }
        else if ($url === '/service&reperation'){
            $heroClass = "service";
            return $heroClass;
        }
    }*/

?>


