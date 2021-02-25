<?php
/*
* bearbeitet von: Anna-Lisa Merkel
*/

class ErrorsController extends Controller
{

	public function actionError404()
	{
        $errorMessage = 'Unknown error, please check your code!';

        if(isset($_GET['error']))
        {
            switch($_GET['error'])
            {
                case 'nocontroller':
                    $errorMessage = 'Sorry, aber der Kontroller oder in Englisch Controller, der ist weggerannt.';
                    break;
                case 'viewpath':
                    $errorMessage = 'View konnte nicht gefunden werden.';
                    break;
            }
        }

        $this->setParam('errorMessage', $errorMessage);
	}
    
}