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
		$this->params['title'] = 'Welcome to Fruits For Friends!';
	}

    public function actionProducts()
    {
        $this->params['title'] = 'Our Products!';
    }

    public function actionSmoothiemaker()
    {
        $this->params['title'] = 'Mix your own Smoothie!';
    }

    public function actionBlog()
    {
        $this->params['title'] = 'News about our page!';
    }

    public function actionAboutus()
    {
        $this->params['title'] = 'Get to know us!';
    }

    public function actionPictures()
    {
        $this->params['title'] = 'Some impressions of our work!';
    }

    public function actionCart()
    {
        $this->params['title'] = 'Your Shopping-Cart!';
    }

    // TODO: implement the actual functions for login/registration

	public function actionLogin()
	{
		// store error message
		$errMsg = null;

		// retrieve inputs 
		$username = isset($_POST['username']) ? $_POST['username'] : '';
		$password = isset($_POST['password']) ? $_POST['password'] : '';

		// check user send login field
		if(isset($_POST['submit']))
		{

			// TODO: Validate input first
			// TODO: Check login values with database accounts
			// TODO: Store useful variables into the session like account and also set loggedIn = true
			$db = $GLOBALS['db'];
			
            // TODO: add namespace
			$login = accountsModel::findOne('username = '.$db->quote($username));

			if($login !== null /*&& password_verify($password, $login->passwordHash)*/)
			{
				echo "login success";
			}
			else
			{
				$errMsg = 'Nutzer oder Passwort nicht korrekt.';
			}

			// if there is no error reset mail
			if($errMsg === null)
			{
				$username = '';
			}

		}

		// set param email to prefill login input field
		$this->setParam('username', $username);
		$this->setParam('errMsg', $errMsg);
		$this->setParam('test', 'Hello World!');
	}

    public function actionRegistration()
    {
        $this->params['title'] = 'Sign up to Fruits For Friends!';
    }
}

