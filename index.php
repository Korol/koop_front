<?php 
include_once './header.php';
?>

<div class="row products-grid">
<?php
for ($i=0; $i < 18; $i++) { 
?>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
        <div class="thumbnail product-thumbnail" id="pt_<?=$i; ?>">
            <img src="http://lorempixel.com/output/food-q-c-250-250-<?=rand(1, 10);?>.jpg" alt="Food Image">
            <div class="caption clearfix">
                <h3>Product title <?=$i;?></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, assumenda.</p>
                <div class="row collapse pt-buttons" id="btns_pt_<?=$i; ?>">
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-8">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                                </button>
                            </span>
                            <input type="text" class="form-control qty-input" value="1">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                </button>
                            </span>
                        </div><!-- /input-group -->
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-4">
                        <button class="btn btn-success pull-right" role="button">Купить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>
</div>

<div class="row">
    <div class="col-xs-12 pagination-center text-center">
        <nav aria-label="Page navigation">
          <ul class="pagination">
            <li>
              <a href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
              <a href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
    </div>
</div>

<?php
include_once './footer.php';
?>