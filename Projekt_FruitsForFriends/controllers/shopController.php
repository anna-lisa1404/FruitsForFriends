<?php
/*
* bearbeitet von: Anna-Lisa Merkel
*/

class ShopController extends Controller 
{
    public function actionProducts() {}

    public function actionAllproducts() {}

    public function actionJuices() {}

    public function actionSmoothies() {}

    public function actionProductdetails() 
    {
        $errMsg = null;
        $productId = null;
        $productQty = null;

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
        $this->setParam('productId', $productId);
        $this->setParam('productQty', $productQty);
    }

    public function actionCart() 
    {
        $productsInCart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
        $products = array();
        $subtotal = 0.00;

        if($productsInCart)
        {
            $db = $GLOBALS['db'];
            $arrayImploded = implode(',', array_fill(0, count($productsInCart), '?'));
            $stmt = $db->prepare('SELECT * FROM drinks WHERE id IN ('. $arrayImploded . ')');
            $stmt->execute(array_keys($productsInCart));
            $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($products as $product)
            {
                $subtotal += (float)$product['price'] * (int)$productsInCart[$product['id']];
            }
        }

        // remove a product from the cart
        if(isset($_POST['remove']) && is_numeric($_POST['remove']) && isset($_SESSION['cart']) && isset($_SESSION['cart'][$_POST['remove']]))
        {
            unset($_SESSION['cart'][$_POST['remove']]);
        }

        // update the quantity pf a product
        if(isset($_POST['update']) && isset($_SESSION['cart']))
        {
            foreach($_POST as $key => $value)
            {
                if (strpos($key, 'productQty') !== false && is_numeric($value))
                {
                    $id = str_replace('productQty-', '', $key);
                    $quantity = $v;

                    if(is_numeric($id) && isset($_SESSION['cart'][$id]) && $quantity > 0)
                    {
                        $_SESSION['cart'][$id] = $quantity;
                    }
                }
            }
        }

        // place an order
        if(isset($_POST['placeorder']) && isset($_SESSION['cart']) && !empty($_SESSION['cart']))
        {
            header('Location: index.php?c=shop&a=placeorder');
        }

        $this->setParam('products', $products);
        $this->setParam('subtotal', $subtotal);
    }

    // when an order is placed, the cart gets emptied
    public function actionOrder() {
        unset($_SESSION['cart']);
    }

}