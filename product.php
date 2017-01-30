<?php 
$_GET['category_id'] = 9;
include_once './header.php';
$photo_rand = rand(1, 10);
?>

<div class="row product-info-block">
    <div class="col-lg-4">
        <div class="row">
            <div class="col-lg-12 product-image-block">
                <a class="fancybox thumbnail" rel="group" href="http://lorempixel.com/output/food-q-c-600-600-<?=$photo_rand;?>.jpg">
                    <img src="http://lorempixel.com/output/food-q-c-250-250-<?=$photo_rand;?>.jpg" alt="Food Image">
                    <span class="glyphicon glyphicon-search product-zoom-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
        <div class="row product-tech-info">
            <div class="col-lg-12 text-center">
                <h3><span class="label label-success">17.40 грн</span></h3>
            </div>
            <div class="col-lg-12 text-center">
                <h3><span class="label label-warning">1 кг, 1 шт.</span></h3>
            </div>
            <div class="col-lg-12 text-center">
                <h3><span class="label label-warning">Производитель такой-то</span></h3>
            </div>
            <div class="col-lg-12 text-center">
                <h3><span class="label label-warning">Артикул: 123456</span></h3>
            </div>
        </div>
    </div>
    <div class="col-lg-8 product-about-info">
        <div class="alert alert-info">
            <h1>Продукт такой-то (мягкая упаковка), 1 кг, ТМ «Возрождение»</h1>
        </div>
        <div class="well">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis vel ducimus mollitia sed qui odit provident, sunt dolor totam possimus illum assumenda soluta voluptas facilis earum obcaecati voluptate cum nisi! Soluta explicabo sint commodi? Ducimus tempore ad dignissimos, modi consequuntur illum neque omnis alias nobis eos numquam tenetur, nisi quas.
        </div>
        <div class="alert alert-danger">
            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam vel, mollitia inventore rem eveniet tenetur tempora quas officia quibusdam harum?</h4>
        </div>
        <div class="well clearfix product-qty-block">
            <span class="p-qty-price">17.40 x</span>
            <div class="p-qty-num">
                <div class="input-group">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                        </button>
                    </span>
                    <input type="text" class="form-control qty-input" value="1" readonly>
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                        </button>
                    </span>
                </div><!-- /input-group -->
            </div>
            <span class="p-qty-price">= 17.40 грн</span>
            <button type="button" class="btn btn-success btn-lg pull-right">Купить</button>
        </div>
    </div>
    <div class="col-lg-12">
        <textarea class="form-control" rows="3" placeholder="Ваш комментарий к заказу"></textarea>
    </div>
    <div class="col-lg-12 product-similar-header">
        <h3 class="lined"><span>С этим товаром чаще всего покупают</span></h3>
    </div>
    <div class="col-lg-12 small-product-grid">
        <div class="row">
            <?php for($i = 0; $i < 6; $i++): ?>
            <div class="col-lg-2">
                <a href="#" class="thumbnail">
                    <img src="http://lorempixel.com/output/food-q-c-100-100-<?=rand(1, 10);?>.jpg" alt="Food Image">
                </a>
            </div>
            <?php endfor; ?>
        </div>
    </div>
    <div class="col-lg-12 text-center">
        <button type="button" class="btn btn-success btn-lg">Ещё N товаров</button>
    </div>
</div>

<?php
include_once './footer.php';
?>