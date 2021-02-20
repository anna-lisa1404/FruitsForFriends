<?php

// TODO: add namespace again
// namespace fff\controller;

class PagesController extends Controller
{
    public function actionIndex()
    {
        header('Location: index.php?c=pages&a=index');
    }

    public function actionStartpage()
	{

	}

    public function actionProducts()
    {

    }

    public function actionSmoothiemaker()
    {
 
    }

    public function actionBlog()
    {
 
    }

    public function actionAboutus()
    {

    }

    public function actionPictures()
    {

    }

    public function actionCart()
    {

    }

	public function actionAccountpage()
	{

	}

    // TODO: validate Password
	// TODO: redirect to account page
	// TODO: set up all the session stuff
	// TODO: error message
	// Notice: Undefined variable: username in C:\Webprogrammierung\Projekt_FruitsForFriends\controllers\pagesController.php on line 88

	public function actionLogin()
	{
		// if user is already logged in, open personal account page instead of login
		if(isset($_SESSION['username']))
		{
			header('Location: ?c=pages&a=accountpage');
		}

		// store error message
		$errMsg = null;

		// retrieve inputs 
		$username = isset($_POST['username']) ? $_POST['username'] : '';
		$password = isset($_POST['password']) ? $_POST['password'] : '';

		// check user send login field
		if(isset($_POST['submit_login']))
		{
			// TODO: Validate input first
			// TODO: Check login values with database accounts
			// TODO: Store useful variables into the session like account and also set loggedIn = true
			$db = $GLOBALS['db'];
			
            // TODO: add namespace
			$account = accounts::findOne('username = '.$db->quote($username).' AND '.'password = '.$db->quote($password));

			if($account !== null)
			{
				// if login was successful, open personal account page
				// user stays logged in until they log out
				$_SESSION['username'] = $username;
				header('Location: ?c=pages&a=accountpage');
			}
			else
			{
				$errMsg = 'Nutzer oder Passwort nicht korrekt.';
				echo $errMsg;
			}

			// if there is no error reset username
			if($errMsg === null)
			{
				$username = '';
			}

		}

		// set param email to prefill login input field
		$this->setParam('username', $username);
		$this->setParam('errMsg', $errMsg);
	/*	$this->setParam('test', 'Hello World!'); */
	}

    public function actionRegistration()
    {

    }

	public function actionLogout()
	{
		unset($_SESSION['username']);
		session_destroy();
		header('Location: index.php?c=pages&a=login');
	}
}

