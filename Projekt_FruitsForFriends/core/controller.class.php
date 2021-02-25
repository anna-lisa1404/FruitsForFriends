<?php
/*
* bearbeitet von: Anna-Lisa Merkel
*/

// TODO: add namespace again
// namespace fff\core;

class Controller
{
    protected $controller = null;
    protected $action = null;
    protected $currentUser = null;

    protected $params = [];

    public function __construct($controller, $action)
	{
		$this->controller = $controller;
		$this->action = $action;
	}

	// renders the correct view
	public function render()
	{
		// generate the view path
		$viewPath = VIEWSPATH.$this->controller.DIRECTORY_SEPARATOR.$this->action.'.php';

		// check if the file exists
		if(!file_exists($viewPath))
		{
			header('Location: index.php?c=errors&a=error404');
    		exit(0);
		}

		// extract the params array to get all needed variables for the view
		extract($this->params);

		// includes the right view
		include $viewPath;
	}

		/**
	 * Setter for params, which will be used for the render method
	 * @param  String $key   Key in the param array
	 * @param  Mixed  $value Key value
	 */
	protected function setParam($key, $value = null)
	{
		$this->params[$key] = $value;
	}


	public function redirect($url)
	{
		header('Location: '.$url);
        exit(0);
	}

	public function __destruct()
	{
		$this->controller = null;
		$this->action = null;
		$this->params = null;
	}
}

