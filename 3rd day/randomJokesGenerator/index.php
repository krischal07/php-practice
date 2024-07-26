<?php
    $allJokes = array("What did the horse say after it tripped? Help! Ive fallen and I cant giddyup!" , "Why cant you hear a pterodactyl going to the bathroom? Because the P is silent", " What do you call a well-balanced horse? Stable.", " What do you call an angry carrot? A steamed veggie.");



$rand = rand(0,2);
    
    echo $allJokes[$rand];
?>