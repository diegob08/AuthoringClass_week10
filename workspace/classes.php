<?php

    require('Character.php');
    
    $lee = new Character(); //new instance of character class
    
    $lee->name = 'Lee';
    $Lee->role = 'Human';
    $Lee->strength = '10';
    
    echo $lee->$describeMe();
    //go into the $lee object and target the $describe me function
    

    $superboss = new Character();
    $superboss->name = 'killerMike';
    $superboss->role = 'End Boss';
    $superboss->strength = '100';
    echo->$superboss->$describeMe();
?>