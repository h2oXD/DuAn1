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

        // Shipping
        'ship-checkout' => ship(),

        // Confirm
        'confirm' => confirm(),

        // Quản lí tài khoản
        'account_dashboard' => Account_Dashboard(),
        'login_register' => Login_Register(),
        'account_order' => Account_Order(),
        'account_edit' => Account_Edit(),

        // Trang điều khoản và dịch vụ
        'show_term' => Show_Term(),

        // Giới thiệu
        'show_about' => Show_About(),
    };

    require_once "commons/disconnect-db.php";
