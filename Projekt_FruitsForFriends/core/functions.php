<?php

function getRandomProfilePicture() 
{
    $dirPath = IMAGEPATH.'single_fruits/';

    $allPictures = glob($dirPath.'*.{jpg}', GLOB_BRACE);

    $randomPicture = $allPictures[array_rand($allPictures)];

    $picture = '<img src="'.$randomPicture.'" alt="single fruit profile picture">';

    echo $picture;
}

