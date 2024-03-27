<?php
    //Require các file trong commons
    require_once "commons/env.php";
    require_once "commons/helper.php";
    require_once "commons/connect-db.php";
    require_once "commons/model.php";


    //Require các file trong controllers, models, views
    require_file(PATH_CONTROLLER);
    require_file(PATH_MODEL);

    //Điều hướng
    $act = $_GET['act'] ?? '/';
    match($act){
        '/' => homeIndex(),

        // Danh sách sản phẩm
        'list_sp' => List_sp(),

        // Chi tiết sản phẩm
        'chitiet' => Chitiet(),

        // Giỏ hàng
        'view-cart' => viewcart(),

    };

    require_once "commons/disconnect-db.php";
