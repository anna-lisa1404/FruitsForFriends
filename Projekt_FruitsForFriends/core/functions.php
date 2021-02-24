<?php

// loads the personal data of the currently logged in user into the session
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

// loads the address of the currently logged in user into the session
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

// loads all drinks
function loadAllProducts()
{
    $db = $GLOBALS['db'];
    $data = $db->query("SELECT id, name, price, taste FROM drinks") or die($db->error);

    $products = $data->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}

// loads either smoothies or juices
function loadFilteredProducts($type)
{
    $db = $GLOBALS['db'];
    $data = $db->query("SELECT id, name, price, taste FROM drinks WHERE typeOfDrink = '$type'") or die($db->error);

    $products = $data->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}

function loadProductDetails() {
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $db = $GLOBALS['db'];
        $stmt = $db->query("SELECT * FROM drinks WHERE id = '$id'");

        $product = $stmt->fetch(PDO::FETCH_ASSOC);

        if(!$product)
        {
            exit('Product does not exist!');
        }
        else
        {
            return $product;
        }
    }
    else
    {
        exit('Product does not exist!');
    }
}

// displays the right salutation for the gender or none, if the user chose 'diverse'
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

// displays a random single-fruit picture as an account's profile picture every time the account-page is refreshed
function getRandomProfilePicture() 
{
    $dirPath = IMAGEPATH.'single_fruits/';

    $allPictures = glob($dirPath.'*.{jpg}', GLOB_BRACE);

    $randomPicture = $allPictures[array_rand($allPictures)];

    $picture = '<img src="'.$randomPicture.'" alt="single fruit profile picture">';

    echo $picture;
}

