<?php
$menu = array(
    0 => array(
        'id' => 1,
        'title' => 'Молочные продукты',
        'childs' => array(
            0 => array(
                'id' => 6,
                'title' => 'Молоко',
            ),
            1 => array(
                'id' => 7,
                'title' => 'Сметана',
                'childs' => array(
                    0 => array(
                        'id' => 9,
                        'title' => 'Сметана 15%',
                    ),
                    1 => array(
                        'id' => 10,
                        'title' => 'Сметана 20%',
                    ),
                ),
            ),
            2 => array(
                'id' => 8,
                'title' => 'Сыр',
                'childs' => array(
                    0 => array(
                        'id' => 11,
                        'title' => 'Сыр плавленый',
                    ),
                    1 => array(
                        'id' => 12,
                        'title' => 'Сыр твердый',
                    ),
                ),
            ),
        ),
    ),
    1 => array(
        'id' => 2,
        'title' => 'Хлебо-булочные изделия',
        'childs' => array(
            0 => array(
                'id' => 13,
                'title' => 'Хлеб',
            ),
            1 => array(
                'id' => 14,
                'title' => 'Выпечка',
                'childs' => array(
                    0 => array(
                        'id' => 16,
                        'title' => 'Пирожки',
                        'childs' => array(
                            0 => array(
                                'id' => 20,
                                'title' => 'Пирожки с картошкой'
                            ),
                            1 => array(
                                'id' => 21,
                                'title' => 'Пирожки с капустой'
                            ),
                        ),
                    ),
                    1 => array(
                        'id' => 17,
                        'title' => 'Булочки',
                    ),
                ),
            ),
            2 => array(
                'id' => 15,
                'title' => 'Печенье',
                'childs' => array(
                    0 => array(
                        'id' => 18,
                        'title' => 'Печенье упакованное',
                    ),
                    1 => array(
                        'id' => 19,
                        'title' => 'Печенье развесное',
                    ),
                ),
            ),
        ),
    ),
);

$connected = array();

function build_connected($array, $key = 0, &$result){
    foreach($array as $row){
        $result[$key][] = $row['id'];
        if(!empty($row['childs'])){
            build_connected($row['childs'], $key, $result);
        }
    }
}
foreach ($menu as $menu_row) {
    build_connected($menu_row['childs'], $menu_row['id'], $connected);
}

//var_dump($connected);
$active_menu_id = 0;
if(!empty($_GET['category_id'])){
    if(in_array($_GET['category_id'], array_keys($connected))){
        $active_menu_id = $_GET['category_id'];
    }
    else{
        foreach ($connected as $c_key => $c_value) {
            if(in_array($_GET['category_id'], $c_value)){
                $active_menu_id = $c_key;
                break;
            }
        }
    }
}
?>
<div class="row">
    <div class="col-lg-12 sidebar-menu-block">
        <ul class="nav nav-pills nav-stacked sidebar-menu">
            <?php foreach($menu as $level1): ?>
            <?php $class_in = ($level1['id'] == $active_menu_id) ? ' in' : ''; ?>
            <li role="presentation"><a href="./index.php?category_id=<?=$level1['id'];?>"><?=$level1['title'];?></a></li>
            <?php
            if(!empty($level1['childs'])):
            ?>
                <ul class="nav nav-pills nav-stacked sidebar-menu sidebar-menu-inner collapse<?=$class_in; ?>">
                <?php foreach($level1['childs'] as $level2): ?>
                    <li role="presentation"><a href="./index.php?category_id=<?=$level2['id'];?>"><?=$level2['title'];?></a></li>
                    <?php
                    if(!empty($level2['childs'])):
                    ?>
                        <ul class="nav nav-pills nav-stacked sidebar-menu sidebar-menu-inner collapse<?=$class_in; ?>">
                        <?php foreach($level2['childs'] as $level3): ?>
                            <li role="presentation"><a href="./index.php?category_id=<?=$level3['id'];?>"><?=$level3['title'];?></a></li>
                            <?php
                            if(!empty($level3['childs'])):
                            ?>
                                <ul class="nav nav-pills nav-stacked sidebar-menu sidebar-menu-inner collapse<?=$class_in; ?>">
                                <?php foreach($level3['childs'] as $level4): ?>
                                    <li role="presentation"><a href="./index.php?category_id=<?=$level4['id'];?>"><?=$level4['title'];?></a></li>
                                <?php endforeach; ?>
                                </ul>
                            <?php
                            endif;
                            ?>
                        <?php endforeach; ?>
                        </ul>
                    <?php
                    endif;
                    ?>
                <?php endforeach; ?>
                </ul>
            <?php
            endif;
            ?>
            <?php endforeach; ?>
        </ul>
    </div>
</div>