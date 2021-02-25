<!-- bearbeitet von: Anna-Lisa Merkel -->    

    <div class="cart-content">
        <h1>Warenkorb</h1>
        <table>
            <tbody>
                <?php if(empty($products)): ?>
                <tr>
                    <td>Du hast noch nichts in den Warenkorb gelegt.</td>
                </tr>
                <?php else: ?>
                <?php foreach($products as $product): ?>
                <tr>
                    <td class="cart-picture">
                        <img src="<?= getProductPicture($product['name']) ?>" alt="<?= $product['name'] ?>">
                    </td>
                    <td>
                        <p><?=$product['name']?></p>
                    </td>
                    <td>
                        <p><?=$product['price'].'€'?></p>
                    </td>
                    <td>
                        <p><?=$_SESSION['cart'][$product['id']].'x'?></p>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody> 
        </table>
        <hr>
        <div class="subtotal">
            <span class="price"><?='Gesamtpreis: '.$subtotal.'€'?></span>
        </div>
        <br>
        <? if(isset($_SESSION['username'])) : ?>
            <div class="cart-address-field">
                <h2>Adresse:</h2>
                <p> <?= $_SESSION['street'].' '.$_SESSION['street_number'] ?></p>
                <p> <?= $_SESSION['zipCode'] ?></p>
                <p> <?= $_SESSION['city'] ?></p>
            </div>
        <? endif; ?>
        <br>
        <div class="place-order">
            <a href="index.php?c=shop&a=order"><input type="submit" value="bestellen" name="place-order"></a>
        </div>    
    </div>
