<?php
$request = $_SERVER['REDIRECT_URL'];

switch ($request){
    case '':
        $title = "Välkommen till Combil verkstad och butik!";
        $text = "Hos oss kan du handla dina reservdelar och
        även lämna din bil i trygga händer för både service och reparationer. Följ länkarna här ovan för att
        läsa mer om vad vi kan hjälpa er med!";
        require "templates/intro-template.php";
    break;
        case '/':
        $title = "Välkommen till Combil verkstad och butik!";
        $text = "Hos oss kan du handla dina reservdelar och
        även lämna din bil i trygga händer för både service och reparationer. Följ länkarna här ovan för att
        läsa mer om vad vi kan hjälpa er med!";
        require "templates/intro-template.php";
    break;
    case '/butik':
        $title = "Butik";
        $text = "I vår butik hittar du det mesta du behöver för att ta hand om din bil. Vi har bland annat ett
        stort sortiment reservdelar till alla vanliga bilmärken och årsmodeller. Vi har även reservdelar till
        både husbilar och släp. I vår butik kan du också köpa tobak, godis, läskedrycker och
        rengöringsprodukter m.m. Är det något du saknar så beställer vi det gärna åt dig med snabba
        leveranstider och i vår verkstad fixar vi gärna det praktiska arbetet åt dig, i de flesta fall medan du
        väntar. Har du din bil inlämnad och väntar kvar så sätt dig gärna ner med dagens tidning och en kopp
        kaffe. Det bjuder vi på!";
        require "templates/intro-template.php";
    break;
    case '/service&reparation':
        $title = "Vi utför service och reparationer";
        $text = "Här på combil tar vi hand om din bil och ser till att den mår så bra som möjligt!
        Vi utför service och reperationer på nya bilar men även på bilar som har några år på nacken.
        Tveka inte att hör av dig och boka service eller reperation. Arbetet genomförs självklart med garanti!";
        require "templates/intro-template.php";
    break;
    case '/dackservice':
        $title = "Däckservice";
        $text = "På Combil utför vi däckbyten på alla sorters bilar. Ingen bil är för liten eller för
        stor.";
        require "templates/intro-template.php";
    break;
    case '/bilglas':
        $title = "Bilglas";
        $text = "Om du har sprickor eller stenskott på din bil så hjälper vi er med detta.";
        require "templates/intro-template.php";
    break;
    case '/kontakt':
        $title = "Kontakt";
        $text = "Om du har några frågor eller behöver komma i kontakt med oss så går det bra att ringa, 
        mejla eller komma förbi och prata med oss direkt över disken!";
        require "templates/intro-template.php";
    break;
    case '/nyhetsblogg':
        $title = "Nyhetsblogg";
        $text = "Välkommen till våran nyhetsblogg, Här kan du läsa om det senaste som händer hos oss på Combil!";
        require "templates/intro-template.php";
    break;
}
?>