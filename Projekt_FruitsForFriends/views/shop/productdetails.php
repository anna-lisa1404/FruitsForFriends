<!-- bearbeitet von: Anna-Lisa Merkel -->

<?php $product =loadProductDetails(); ?>

<div class="product-details-wrapper">
    <div class="product-details-picture">
        <img src="<?= getProductPicture($product['name']) ?>" alt="<?=$product['name']?>">
    </div>
    <div class="product-description">
        <h1 class="name"><?=$product['name']?></h1>
        <span class="price"><?='Preis: '.$product['price'].'€'?></span>
        <div class="product-text">
            <p>Hier ist eine Beschreibung, wie gut dieses Getränk schmeckt. Es ist wirklich sehr lecker! Du musst es unbedingt probieren.</p>
            <p>Geschmacksrichtung: <?=$product['taste']?></p>
            <br>

            <div class="ingredient-display">
                <ul class="ingredient-list">
                    <?php foreach(getIngredients() as $ingredient) : ?>
                        <li class="ingredient">
                            <img src="<?= getIngredientPicture($ingredient['description']) ?>" alt="<?=$ingredient['description']?>">
                            <br>
                            <span class="ingredient-amount"><?=$ingredient['description'].': '.$ingredient['amountInPercent'].'%'?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <form action="index.php?c=shop&a=productdetails&id=<?=$product['id']?>" method="post">
            <label for="quantity">Wie viel dürfen es sein?</label>
            <br><br>
            <input type="number" name="quantity" id="quantity" value="1" placeholder="Menge" required>
            <input type="hidden" name="product_id" value="<?=$product['id']?>">
            <input type="submit" name="add_to_cart" value="zum Warenkorb hinzufügen">
        </form>

        <? if(isset($errMsg)) : ?>
            <div class="error-message">
                <?=$errMsg?>
            </div>
        <? endif; ?>
    </div>
</div>