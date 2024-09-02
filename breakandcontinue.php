<?php

for($start=0;$start<=10;$start++){
    if($start==5){
        continue;
    }elseif($start==8){
        break;
    }

    echo "$start";
    echo "</br>";
}





?>