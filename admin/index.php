<?php
    //Require các file trong commons
    require_once "../commons/env.php";
    require_once "../commons/helper.php";
    require_once "../commons/connect-db.php";
    require_once "../commons/model.php";

    //Require các file trong controllers, models, views
    require_file(PATH_CONTROLLER_ADMIN);
    require_file(PATH_MODEL_ADMIN);

    //Điều hướng
    $act = $_GET['act'] ?? '/';
    match($act){
        '/' => dashboard(),

        'users' => userListtAll(),
        'users-detail' => userShowOne($_GET['id']),
        'users-create' => userCreate(),
        'users-update' => userUpdate($_GET['id']),
        'users-delete' => userDelete($_GET['id']),

        //product
        'products' => productListtAll(),
        'products-detail' => productShowOne($_GET['id']),
        'products-create' => productCreate(),
        'products-update' => productUpdate($_GET['id']),
        'products-delete' => productDelete($_GET['id']),
        

    };

