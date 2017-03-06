<?php 
include_once './header.php';
$category_title = (!empty($category_info['title'])) ? $category_info['title'] : 'Продукты';
?>

<div class="row">
    <div class="col-lg-12">
        <h3 class="lined"><span><?=$category_title;?></span></h3>
    </div>
</div>
<div class="row products-grid">
<?php
for ($i=1; $i < 24; $i++) { 
?>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
        <div class="thumbnail product-thumbnail" id="pt_<?=$i; ?>">
            <a href="./product.php">
                <img src="http://lorempixel.com/output/food-q-c-250-250-<?=rand(1, 10);?>.jpg" alt="Food Image">
            </a>
            <div class="caption clearfix">
                <h3><a href="./product.php">Product title <?=$i;?></a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, assumenda.</p>
                <div class="row collapse pt-buttons" id="btns_pt_<?=$i; ?>">
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-8">
                        <div class="input-group product-qty-grid-block">
                            <span class="input-group-btn">
                                <button class="btn btn-default pqminus" type="button" id="pqminus_<?=$i;?>">
                                    <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                                </button>
                            </span>
                            <input type="text" class="form-control qty-input" value="1" readonly id="pqty_<?=$i;?>">
                            <span class="input-group-btn">
                                <button class="btn btn-default pqplus" type="button" id="pqplus_<?=$i;?>">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                </button>
                            </span>
                        </div><!-- /input-group -->
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-4">
                        <button class="btn btn-success pull-right grid-buy-btn" onclick="document.location.href='/cart.php';" role="button">Купить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>
</div>

<?php
include_once './footer.php';
?>