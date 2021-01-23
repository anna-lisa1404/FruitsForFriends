<?php
require_once 'config/init.php';

//should be "action" later!!
$page = '';

if(isset($_GET['a']))
{
    $page = $_GET['a'];
}

?>

<DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/style.css" type="text/css">
    <title>Fruits for Friends</title>
</head>
<body>
    <?php   include (PAGESPATH.'header.php');
            switch ($page) {
                case "products":
                    include (PAGESPATH.'products.php');
                break;
                case "smoothiemaker":
                    include (PAGESPATH.'smoothiemaker.php');
                break;
                case "blog":
                    include (PAGESPATH.'blog.php');
                break;
                case "aboutus":
                    include (PAGESPATH.'aboutus.php');
                break;
                case "pictures":
                    include (PAGESPATH.'pictures.php');
                break;
                case "login":
                    include (PAGESPATH.'login.php');
                break;
                case "registration":
                    include (PAGESPATH.'registration.php');
                break;
                case "cart":
                    include (PAGESPATH.'cart.php');
                break;
                default:
                    include (PAGESPATH.'startpage.php');
            }
            include (PAGESPATH.'footer.php');
            ?>

</body>    
</html>