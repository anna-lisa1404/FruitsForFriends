<?php include(SHOPPATH.'shopNav.php'); ?>

<div class="products-wrapper">
    <div class="products">
        <?php foreach(loadFilteredProducts('s') as $product) : ?>
        <a href="index.php?c=shop&a=productdetails&id=<?=$product['id']?>" class="product">
            <img src="<?= IMAGEPATH.'decoration_pics/produktfoto.jpg' ?>" alt="<?=$product['name']?>">
            <span class="product-name"><?=$product['name']?></span>
            <span class="product-price"><?=$product['price'].'€'?></span>
        </a>
        <?php endforeach; ?>
    </div>
</div>