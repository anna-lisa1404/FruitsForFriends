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
        // checks which product the user clicked on
       /* if(isset($_GET['id']))
        {
            $stmt = $pdo->prepare
        } */
    }

    public function actionCart() {}
}