<?php

class ShopController extends Controller 
{
    public function actionProducts() {}

    public function actionAllproducts() {
        $products = loadAllProducts();
    }

    public function actionJuices() {}

    public function actionSmoothies() {}

    public function actionProductdetails() {
        if(isset($_POST['add_to_cart']))
        {
            if(isset($_SESSION['username']))
            {
                
            }
            else
            {
                $errMsg = 'Bitte melde dich erst an für diese Aktion.';
            }
        }
        $this->setParam('errMsg', $errMsg);
    }

    public function actionCart() {}
}