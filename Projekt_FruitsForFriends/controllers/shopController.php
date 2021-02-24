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
        $errMsg = null;

        if(isset($_POST['add_to_cart']))
        {
            // user has to be logged in to add products to their cart
            if(isset($_SESSION['username']))
            {
                $db = $GLOBALS['db'];
                $productId = $_POST['product_id'];
                $productQty = $_POST['quantity'];

                $stmt = $db->query("SELECT * FROM drinks WHERE id = '$productId'");

                $addedProduct = $stmt->fetch(PDO::FETCH_ASSOC);

                if($addedProduct !== null)
                {
                    if(isset($_SESSION['cart']) && is_array($_SESSION['cart']))
                    {
                        // check if product is already in cart
                        if(array_key_exists($productId, $_SESSION['cart']))
                        {
                            // if so, just add quantity
                            $_SESSION['cart'][$productId] += $productQty;
                        }
                        else
                        {
                            // else add product to the cart
                            $_SESSION['cart'][$productId] = $productQty;
                        }
                    }
                    else
                    {
                        // add first product to cart, if cart was empty until now
                        $_SESSION['cart'] = array($productId => $productQty);
                    }
                }
                header('Location: index.php?c=shop&a=cart');
                
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