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
        
        // CRUD loại hàng
        'Catagories' => Categories_ListtAll(),
        'Catagories-detail' => Catagory_ShowOne($_GET['id']),
        'Catagories-create' => Category_Create(),
        'Catagories-update' => Category_Update($_GET['id']),
        'Catagories-delete' => Category_Delete($_GET['id']),
    };

