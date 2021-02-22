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
				$_SESSION['account']  = $account;
				header('Location: ?c=pages&a=accountpage');
			}
			else
			{
				$errMsg = 'Nutzer oder Passwort nicht korrekt.';
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
		 // store error message
		 $errMsg = null;
		 $success = false;
		 $db = $GLOBALS['db'];
	   
		 // check user send register field
 
		 if(isset($_POST['submit']))
		 {
			 $lastname =  $_POST['lastname'] ?? null;
			 $firstname  =  $_POST['firstname'] ?? null;
			 $birthdate = $_POST['birthdate'] ?? null;
			 $Gender = $_POST['gender'] ?? null;
			 $username = $_POST['username'] ?? null;
			 $password = $_POST['password'] ?? null;
			 $passwordRepeat = $_POST['passwordrepeat'] ?? null;
			 $email = $_POST['email'] ?? null;
			 
			 if (empty($_POST['lastname']) 
				 || empty($_POST['firstname']) 
				 || empty($_POST['lastname'])
				 || empty($_POST['birthdate'])
				 || empty($_POST['gender'])
				 || empty($_POST['username'])
				 || empty($_POST['passwordRepeat'])
				 || empty($_POST['email']) )
					
				 {
					 viewError("Alle Felder sollen noch ausgefühlt werden!");
				 }
		 
				 else{
						 if(strlen ($_POST['lastname']) > 50)
						 {
							 $errMsg['lastname'] = 'Der Nachname entspricht nicht den Richtlinien, bitte geben Sie maximale 50 Zeichen an.';
							 echo $errMsg;
 
						 }
 
						 if(strlen($_POST['firstname']) > 50)
						 {
							 $errMsg['vorname'] = 'Der Vorname entspricht nicht den Richtlinien, bitte geben Sie  maximale 50 Zeichen an.';
							 echo $errMsg;
							 
						 }
 
						 if(strlen($_POST['username']) > 30)
						 {
							 $errMsg['username'] = 'Der username entspricht nicht den Richtlinien, bitte geben Sie maximale 30 Zeichen an.';
							 echo $errMsg;
							 
						 }
 
						 if(!preg_match('/^[a-zA-Z0-9]+$/',$_POST['username']))
						 {
							 $errMsg = 'Der Benutzername sollte keine Sonderzeichen enthalten';
							 echo $errMsg;
						 }

						 if (empty($password)){
							 $errMsg = "Bitte Passwort eingeben.";
						 } else if (preg_match("/[a-z]/", $password)
								&& preg_match("/[A-Z]/", $password)
								&& preg_match("/[0-9]/", $password)) {
							 $errMsg = "Das Passwort muss Kleinbuchstaben, Großbuchstaben und Zahlen enthalten.";
							 echo $errMsg;
							} else if (strlen($password) < 8) {
							 $errMsg = "Das Passwort muss mindestens 8 Zeichen lang sein.";
							 echo $errMsg;
							}  
 
						 if(($_POST['password']) !== ($_POST['passwordRepeat']))
						 {
							 $errMsg("Die Passwörte stimmen nicht überein");
							 echo $errMsg;
						 }
 
						 if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
						 {
							 $errMsg['email'] = 'Ungültiges E-Mail-Format.';
							 echo $errMsg;
						 }
				 
						 if(count($errMsg) === 0)
						 {
							 try{
								 $newAccuontData =array(
									 'lastname' => $lastname,
									 'firstname' => $firstname,
									 'birthdate' => $birthdate,
									 'username' => $username,
									 'password' => $password,
									 'email' => $email,
								 );
								 $newAccount = new \app\models($newaccountData);
								 $newAccount->insert($errMsg);
								 $success = true;
							 }
							 catch(\Exeption $exeptionError)
							 {
								 $success = false;
								 $errMsg['exeptionError'] = 'Beim DB Update ist etwas schief gelaufen.';
								 echo $errMsg;
							 }
						 }
					 }
		 
			  
		 $this->setparam('errMsg', $errMsg);
		 $this->setparam('success', $success);
	 }
 
 
    }

	public function actionLogout()
	{
		unset($_SESSION['username']);
		session_destroy();
		header('Location: index.php?c=pages&a=login');
	}
}

