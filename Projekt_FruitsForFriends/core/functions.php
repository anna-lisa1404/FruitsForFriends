<?php

function getLoggedInUserData()
{
    $where = $_SESSION['username'];
    $data = $GLOBALS['db']->prepare("SELECT id, email, firstname, lastname, gender, birthdate, addresses_id FROM accounts WHERE username = '$where'");
    $data->execute();
    $row = $data->fetch();
    $count = $data->rowCount();

    if ($count > 0)
    {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['gender'] = $row['gender'];
        $_SESSION['birthdate'] = $row['birthdate'];
        $_SESSION['addresses_id'] = $row['addresses_id'];
    }
}

function getLoggedInUserAddress()
{
    $where = $_SESSION['addresses_id'];
    $data = $GLOBALS['db']->prepare("SELECT id, street, number, city, zipCode FROM addresses WHERE id = '$where'");
    $data->execute();
    $row = $data->fetch();
    $count = $data->rowCount();

    if ($count > 0)
    {
        $_SESSION['user_address_id'] = $row['id'];
        $_SESSION['street'] = $row['street'];
        $_SESSION['street_number'] = $row['number'];
        $_SESSION['city'] = $row['city'];
        $_SESSION['zipCode'] = $row['zipCode'];
    }
}

function getSalutation()
{
    $gender = $_SESSION['gender'];

    switch($gender) {
        case "f":
            $salutation = 'Frau';
            break;
        case "m":
            $salutation = 'Herr';
            break;
        default:
            $salutation = '';
    }

    return $salutation;
}

function getRandomProfilePicture() 
{
    $dirPath = IMAGEPATH.'single_fruits/';

    $allPictures = glob($dirPath.'*.{jpg}', GLOB_BRACE);

    $randomPicture = $allPictures[array_rand($allPictures)];

    $picture = '<img src="'.$randomPicture.'" alt="single fruit profile picture">';

    echo $picture;
}

