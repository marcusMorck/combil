<?php

$storage = [
                [ "title" => "Äntligen har vi öppnat våra nya lokaler!", 
                    "text" => "Den 1 september öppnade vi här på Combil våra dörrar
                    till de nya lokalerna. Med en tillagd yta på 225kvm hoppas
                    vi kunna ta emot ännu fler nöjda kunder. Vi på Combil hoppas att
                    även ni ska trivas i våra nya och fräscha lokaler.",
                ],
                [ "title" => "Utökad verksamhet med bilglas fr.o.m 15 september",
                    "text" => "Nu utökar vi vår verksamhet med ytterligare ett tekniskt område
                    nämligen bilglas. Vi på Combil är naturligtvis stolta över att kunna
                    ge våra kunder ännu mer service. Så om du har något stenskott
                    på rutan så tveka inte att kontakta oss så fixar vi problemet åt dig
                    innan det kanske är försent!"
                ]
            ];
    

for ($i = 0; $i < count($storage); $i++){
    $title = $storage[$i]["title"];
    $text = $storage[$i]["text"];
    
    require "templates/news-post-template.php";
}



?>