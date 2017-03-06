<?php 
include_once './header.php';

$products = array(
    0 => array(
        'id' => 1,
        'title' => 'Lorem ipsum dolor',
        'unit' => 'шт.',
        'price' => '23.50',
        'qty' => 1,
        'cost' => '23.50',
    ),
    1 => array(
        'id' => 2,
        'title' => 'Sit amet, consectetur adipisicing elit',
        'unit' => 'шт.',
        'price' => '12.75',
        'qty' => 1,
        'cost' => '12.75',
    ),
    2 => array(
        'id' => 3,
        'title' => 'Consectetur harum dolor',
        'unit' => 'шт.',
        'price' => '123.45',
        'qty' => 1,
        'cost' => '123.45',
    ),
    3 => array(
        'id' => 4,
        'title' => 'Reprehenderit officia cumque laboriosam',
        'unit' => 'шт.',
        'price' => '23.80',
        'qty' => 1,
        'cost' => '23.80',
    ),
);
$cart_total = 0;
?>

<div class="row">
    <div class="col-lg-12">
        <h3 class="lined"><span>Корзина</span></h3>
    </div>
</div>

<div class="row cart-info-block">
    <!-- <div class="col-lg-12 text-center">
        <h4><span class="label label-success">Заказ № 123456</span></h4>
    </div> -->
    <div class="col-lg-12 text-right">
        <button class="btn btn-default">
            <span class="glyphicon glyphicon-print"></span> Печать
        </button>
    </div>
    <div class="col-lg-12 cart-products-table-block">
        <table class="table table-bordered cart-products-table">
            <thead>
                <th>#</th>
                <th>Название</th>
                <th>Ед.</th>
                <th>Цена</th>
                <th class="cart-qty-column">Кол-во товара</th>
                <th>Стоимость</th>
                <th>Удалить</th>
            </thead>
            <tbody>
            <?php foreach($products as $key => $product): ?>
            <tr id="cart_tr_<?=$product['id'];?>">
                <td class="text-center"><?=++$key;?></td>
                <td><?=$product['title']; ?></td>
                <td><?=$product['unit']; ?></td>
                <td><span id="pprice_<?=$product['id'];?>"><?=$product['price']; ?></span> грн</td>
                <td>
                    <div class="input-group product-qty-grid-block">
                        <span class="input-group-btn">
                            <button class="btn btn-default ppqminus" type="button" id="ppqminus_<?=$product['id'];?>">
                                <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                            </button>
                        </span>
                        <input type="text" class="form-control qty-input" value="<?=$product['qty'];?>" readonly id="ppqty_<?=$product['id'];?>">
                        <span class="input-group-btn">
                            <button class="btn btn-default ppqplus" type="button" id="ppqplus_<?=$product['id'];?>">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                            </button>
                        </span>
                    </div><!-- /input-group -->
                </td>
                <td><span class="cart-cost" id="pcost_<?=$product['id'];?>"><?=$product['cost']; ?></span> грн</td>
                <td class="text-center">
                    <button type="button" onclick="removeFromCart(<?=$product['id'];?>)" class="btn btn-danger">&times;</button>
                </td>
            </tr>
            <?php
            $cart_total += $product['cost'];
            ?>
            <?php endforeach; ?>
            <tr>
                <td colspan="7" class="text-right">
                    <span class="text-uppercase">Всего:</span>
                    <span class="cart-total-cost"><span id="cart_total"><?=number_format($cart_total, 2);?></span></span> грн
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="col-lg-12">
        <div class="alert alert-danger">
            <b>Информация о Бесплатной доставке:</b><br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt inventore explicabo provident itaque, nam ipsam nesciunt recusandae magni possimus est earum sed vel atque, quisquam saepe assumenda. Nisi cupiditate ut et, perferendis eos delectus sed eum sit quidem cum facilis suscipit aperiam reprehenderit vel voluptatem quo consequuntur magni neque aut!
        </div>
    </div>
</div>

<div class="row cart-info-block">
    <div class="col-lg-12">
        <div class="well">
            <b>Пояснения по заполнению этой формы:</b>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus ex, quia aliquid aut necessitatibus, repellat error ullam fugit asperiores vero doloribus, eius quos saepe molestiae at odio expedita inventore dolores iste doloremque tenetur officia, veritatis. Incidunt, facilis dicta sed dignissimos dolores consectetur nam sint, quis, perferendis eaque totam tenetur placeat.</p>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <!-- Nav tabs -->
                    <?php /*ul class="nav nav-tabs nav-justified" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#signin" aria-controls="signin" role="tab" data-toggle="tab">Войти в Кабинет</a>
                        </li>
                        <li role="presentation">
                            <a href="#sregister" aria-controls="sregister" role="tab" data-toggle="tab">Краткая регистрация</a>
                        </li>
                        <li role="presentation">
                            <a href="#fregister" aria-controls="fregister" role="tab" data-toggle="tab">Полная регистрация</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <form class="form-horizontal" method="post" action="/thanks.php">
                    <div class="tab-content cart-tab-panels">
                        <div role="tabpanel" class="tab-pane active" id="signin">
                            
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="inputEmail3" placeholder="mail@example.com">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Пароль</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" id="inputPassword3" placeholder="0-9A-Z_a-z">
                            </div>
                          </div>

                        </div>
                        <div role="tabpanel" class="tab-pane" id="sregister">
                            <div class="form-group">
                                <label for="inputEmail4" class="col-sm-2 control-label">Имя</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="inputEmail4" placeholder="Иванов Иван Иванович">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail4" class="col-sm-2 control-label">Телефон</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="inputEmail4" placeholder="380631234567">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail4" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                  <input type="email" class="form-control" id="inputEmail4" placeholder="mail@example.com">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword4" class="col-sm-2 control-label">Пароль</label>
                                <div class="col-sm-10">
                                  <input type="password" class="form-control" id="inputPassword4" placeholder="0-9A-Z_a-z">
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="fregister">
                            <div class="form-group">
                                <label for="inputEmail4" class="col-sm-2 control-label">Имя</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="inputEmail4" placeholder="Иванов Иван Иванович">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail4" class="col-sm-2 control-label">Телефон</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="inputEmail4" placeholder="380631234567">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail4" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                  <input type="email" class="form-control" id="inputEmail4" placeholder="mail@example.com">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword4" class="col-sm-2 control-label">Пароль</label>
                                <div class="col-sm-10">
                                  <input type="password" class="form-control" id="inputPassword4" placeholder="0-9A-Z_a-z">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail4" class="col-sm-2 control-label">Город</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="inputEmail4" placeholder="Запорожье">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail4" class="col-sm-2 control-label">Адрес</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="inputEmail4" placeholder="ул. Заречная, 28/51">
                                </div>
                            </div>
                        </div>
                    </div>
                    </form*/?>

                    <form class="form-horizontal" name="orderForm" method="post" action="/thanks.php">
                        <div class="form-group">
                                <label for="inputName4" class="col-sm-3 control-label">Имя</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="inputName4" placeholder="Иванов Иван Иванович">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPhone4" class="col-sm-3 control-label">Телефон</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" id="inputPhone4" placeholder="380631234567">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail4" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-9">
                                  <input type="email" class="form-control" id="inputEmail4" placeholder="mail@example.com">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress4" class="col-sm-3 control-label">Адрес доставки</label>
                                <div class="col-sm-9">
                                  <textarea class="form-control" id="inputAddress4" rows="3" placeholder="ул. Строителей, 42/53, домофон #53"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress4" class="col-sm-3 control-label">Комментарий к заказу</label>
                                <div class="col-sm-9">
                                  <textarea class="form-control" id="inputAddress4" rows="3" placeholder="Ваш комментарий к этому заказу"></textarea>
                                </div>
                            </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 text-center">
        <button type="button" onclick="document.orderForm.submit();" class="btn btn-success btn-lg text-uppercase">Оформить заказ</button>
    </div>
</div>

<?php
include_once './footer.php';
?>