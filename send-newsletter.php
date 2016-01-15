<?php
    $lines = file("newsletter-emails.txt");//file into an array
    for($i = 0;i < count($lines);$i++){
        $lines[$i] = substr($lines[$i],strlen($lines[$i]-2));
    }
?>