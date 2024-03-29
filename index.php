<?php
    //Require các file trong commons
    session_start();
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

        'login' => userLoginRegister(),
        'logout' => userLogout(),
        'forget-password' => userForgetPassword(),
        'account_detail' => accountDetail(),
        'account_order' => accountOrder(),
        'account_dashboard' => accountDashboard(),

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


        // Trang điều khoản và dịch vụ
        'show_term' => Show_Term(),

        // Giới thiệu
        'show_about' => Show_About(),
    };

    require_once "commons/disconnect-db.php";
