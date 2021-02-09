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
        $this->params['title'] = 'Log into your account!';
    }

    public function actionRegistration()
    {
        $this->params['title'] = 'Sign up to Fruits For Friends!';
    }
}

