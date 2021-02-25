<?php
/*
* bearbeitet von: Anna-Lisa Merkel, Salma Alkhaiyal
*/

class PagesController extends Controller
{
    public function actionIndex()
    {
        header('Location: index.php?c=pages&a=index');
    }

	// nothing todo in these actions, they only load pages
    public function actionStartpage() {}

    public function actionSmoothiemaker() {}

    public function actionBlog() {}

    public function actionAboutus() {}

	public function actionAccountpage() {}

	public function actionImprint() {}

	public function actionSupport() {}


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
			$db = $GLOBALS['db'];
			
			$account = accounts::findOne('username = '.$db->quote($username).' AND '.'password = '.$db->quote($password));

			if($account !== null)
			{
				// if login was successful, open personal account page
				// user stays logged in until they log out
				$_SESSION['username'] = $username;
				// loads all the data and the address of the user into the session
				getLoggedInUserData();
				getLoggedInUserAddress();
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
					 $errMsg= ("Alle Felder sollen noch ausgefühlt werden!");
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
								 $newAccount = new models($newuserData);
								 $newAccount->insert($lastname, $firstname,$birthdate,$gender,$username,$password,$email);
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

