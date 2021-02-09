<?php
require_once 'config/init.php';

// load needed variables/defines/configs
require_once 'config/init.php';
require_once 'config/database.php';

// load core stuff
require_once COREPATH.'functions.php';
require_once COREPATH.'controller.class.php';
require_once COREPATH.'model.class.php';

// TODO: load all the models


$controllerName = 'pages'; // default controller if noting is set
$actionName = 'startpage'; // default action if nothing is set

// check if a controller is given
if(isset($_GET['c']))
{
    $controllerName = $_GET['c'];
}

// check if an action is given
if(isset($_GET['a']))
{
    $actionName = $_GET['a'];
}

// check controller/class and method exists
if(file_exists(CONTROLLERSPATH.$controllerName.'Controller.php'))
{
    // include the controller file
    require_once CONTROLLERSPATH.$controllerName.'Controller.php';

    // generate the class name of the controller using the name extended by Controller
    // also add the namespace in front
    $className = ucfirst($controllerName).'Controller';

    // generate an instace of the controller using the name, stored in $className
    // it is the same like calling for example: new \dwp\controller\PagesController()
    $controller = new $className($controllerName, $actionName);

    // checking the method is available in the controller class
    // the method looks like: actionIndex()
    $actionMethod = 'action'.ucfirst($actionName);
    if(!method_exists($controller, $actionMethod))
    {
        // TODO: Handle better errors with an Redirect to an error page--
        header('Location: index.php?c=errors&a=error404');
        exit(0);
    }
    else
    {
        // call the action method to do the job
        // so the action cann fill the params for the view which will be used 
        // in the render process later
        $controller->{$actionMethod}();
    }
}
else
{
    // TODO: Handle better errors with an Redirect to an error page--
    header('Location: index.php?c=errors&a=error404');
    exit(0);
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
    <?php 
        include (PAGESPATH.'header.php');
        $controller->render();
        include (PAGESPATH.'footer.php');
    
    /*  include (PAGESPATH.'header.php');
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
            */
            ?>

</body>    
</html>