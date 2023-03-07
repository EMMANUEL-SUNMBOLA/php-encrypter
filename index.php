<?php

$out = "";
    $inp = readline("input for encoding in ascii chr...");
    if(!empty($inp)){
        for ($i=0; $i < strlen($inp); $i++) { 
            $lin = substr($inp,$i);
            $out .= ord($lin) . chr(0+rand(0,225));
        }
        echo $out;
    }else{
        echo "don't leave empty you doughnut";
    }

?>