<?php 
$_GET['category_id'] = 9;
include_once './header.php';
$photo_rand = rand(1, 10);
?>

<div class="row product-info-block">
    <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="row">
            <div class="col-lg-12 product-image-block">
                <a class="fancybox thumbnail" rel="group" href="http://lorempixel.com/output/food-q-c-600-600-<?=$photo_rand;?>.jpg">
                    <img src="http://lorempixel.com/output/food-q-c-250-250-<?=$photo_rand;?>.jpg" alt="Food Image">
                    <span class="glyphicon glyphicon-search product-zoom-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
        <div class="row pc-additional-images">
            <div class="col-xs-12 clearfix">
                <?php for ($i = 1; $i <= 5; $i++): ?>
                <div class="pc-a-i-item">
                    <a class="fancybox thumbnail" rel="group" href="http://lorempixel.com/output/food-q-c-600-600-<?=$i;?>.jpg">
                        <img src="http://lorempixel.com/output/food-q-c-150-150-<?=$i;?>.jpg" alt="Food Image">
                    </a>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-6 product-about-info">
        <div class="row pc-title">
            <div class="col-xs-12">
                <h1 class="product-card-title">Продукт такой-то (мягкая упаковка), 1 кг, ТМ «Возрождение»</h1>
            </div>
        </div>
        <div class="row pc-id">
            <div class="col-xs-12">
                <span class="product-card-id-label">ID:</span>
                <span class="product-card-id-value">543</span>
            </div>
        </div>
        <div class="row pc-price">
            <div class="col-xs-12">
                <div class="product-card-price">17.40 грн/шт</div>
            </div>
        </div>
        <div class="well clearfix product-qty-block">
        <span class="p-qty-price"><span id="pprice_1">17.40</span> x</span>
            <div class="p-qty-num">
                <div class="input-group">
                    <span class="input-group-btn">
                        <button class="btn btn-default ppqminus" type="button" id="ppqminus_1">
                            <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                        </button>
                    </span>
                    <input type="text" class="form-control qty-input" value="1" readonly id="ppqty_1">
                    <span class="input-group-btn">
                        <button class="btn btn-default ppqplus" type="button" id="ppqplus_1">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                        </button>
                    </span>
                </div><!-- /input-group -->
            </div>
            <span class="p-qty-price">= <span id="pcost_1">17.40</span> грн</span>
            <button type="button" onclick="document.location.href='/cart.php';" class="btn btn-success btn-lg pull-right">Купить</button>
        </div>
        <div class="row pc-description">
            <div class="col-xs-12">
                <p>
                    Вода питьевая столовая ТМ «Криниця» сильногазированная на основе природной воды, которая добывается из артезианской скважины №5 глубиной 68 м c. Корнеевка Веселовского р-на Запорожской области. Минерализация воды не превышает 1,0 г/л. Вода полноценного минерального состава. Вода употребляется как для питья так и для приготовления пищи.
                </p>
            </div>
        </div>
    </div>
    <?php /* ?>
    <div class="col-lg-12">
        <textarea class="form-control" rows="3" placeholder="Ваш комментарий к заказу"></textarea>
    </div>
    <?php */ ?>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 product-similar-header">
        <h3 class="lined"><span>С этим товаром чаще всего покупают</span></h3>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 small-product-grid">
        <div class="row">
            <?php for($i = 0; $i < 6; $i++): ?>
            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
                <a href="#" class="thumbnail">
                    <img src="http://lorempixel.com/output/food-q-c-100-100-<?=rand(1, 10);?>.jpg" alt="Food Image">
                </a>
            </div>
            <?php endfor; ?>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
        <button type="button" class="btn btn-success btn-lg">Ещё N товаров</button>
    </div>
</div>

<?php
include_once './footer.php';
?>