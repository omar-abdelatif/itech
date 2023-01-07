<?php
//! Include Connection
include "../admin-dashboard/config/database.php";
//! Include Header
include "../inc/header.php";
//! Include Nav
include "../inc/nav.php";
//! Include Products
include "../admin-dashboard/core/products/products.php";
$getAllProducts = products();
?>
<section class="products">
    <div class="container">
        <div class="row">
            <div class="col-lg-12"></div>
            <?php foreach ($getAllProducts as $product) : ?>
                <div class="col-lg-3">
                    <div class="product-item">
                        <div class="product-img">
                            <img src="../../assets/imgs/images/products/<?= $product['img'] ?>" width="300" alt="<?= $product['img'] ?>">
                        </div>
                        <div class="product-price">
                            <p>
                                <?= $product['price'] ?>
                                <span class="curency">EGP</span>
                            </p>
                        </div>
                        <div class="product-title">
                            <h1>
                                <?= $product['name'] ?>
                            </h1>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
//! Include Footer
include "../inc/footer.php";
?>