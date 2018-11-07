<?php
    $request = $_SERVER['REDIRECT_URL'];

    //en funktion med stukturen för hero och som ändrar class

    //Fumktionen börjar med att ta in url:en
    //If sats som beroende av url bestämmer värdet på $heroclass
    //funktionen skriver ut 

    function heroClass($url){
        if ($url === '/butik'){
            $heroClass = "shop";
            return $heroClass;
        }
        else if ($url === '/dackservice'){
            $heroClass = "wheelservice";
            return $heroClass;
        }
    }

    switch ($request){
        case '/butik':
            $class = heroClass($request);
            require "templates/hero-template.php";
        break;
        
        case '/dackservice':
            $class = heroClass($request);
            require "templates/hero-template.php";
        break;
    }


?>
