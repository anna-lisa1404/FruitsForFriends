<?php

class ShopController extends Controller 
{
    public function actionProducts() {}

    public function actionAllproducts() {
        $products = loadAllProducts();
    }

    public function actionJuices() {}

    public function actionSmoothies() {}

    public function actionProductdetails() {}

    public function actionCart() {}
}