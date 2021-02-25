<!-- bearbeitet von: Anna-Lisa Merkel -->

<?php include(SHOPPATH.'shopNav.php'); ?>

<div class="products-wrapper">
    <div class="products">
        <ul class="flex-container">
            <?php foreach(loadAllProducts() as $product) : ?>
            <li class="flex-item">
                <a href="index.php?c=shop&a=productdetails&id=<?=$product['id']?>" class="product">
                    <img src="<?= getProductPicture($product['name']) ?>" alt="<?=$product['name']?>">
                    <br>
                    <span class="product-name"><?=$product['name']?></span>
                    <br>
                    <span class="product-price"><?=$product['price'].'€'?></span>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>