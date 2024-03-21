<?php
    session_start();
    //Require các file trong commons
    require_once "../commons/env.php";
    require_once "../commons/helper.php";
    require_once "../commons/connect-db.php";
    require_once "../commons/model.php";
    require_once "./models/Category.php";

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
        
        // CRUD loại hàng
        'categories' => Categories_ListtAll(),
        'category-detail' => Category_ShowOne($_GET['id']),
        'category-create' => Category_Create(),
        'category-update' => Category_Update($_GET['id']),
        'category-delete' => Category_Delete($_GET['id']),

        // CRUD user_addresses
        'user_addresses' => user_addresses_ListtAll(),
        'user_address-detail' => user_address_ShowOne($_GET['id']),
        'user_address-create' => user_address_Create(),
        'user_address-update' => user_address_Update($_GET['id']),
        'user_address-delete' => user_address_Delete($_GET['id']),
        //color
        'colors' => color_ListtAll(),
        'colors-detail' => color_ShowOne($_GET['id']),
        'colors-create' => color_Create(),
        'colors-update' => color_Update($_GET['id']),
        'colors-delete' => color_Delete($_GET['id']),

         // Setting
        'setting-form' => settingShowForm(),
        'setting-save' => settingSave(),
    };


