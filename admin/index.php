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
    if(!isset($_SESSION['user']) && $_SESSION['user']['role'] != 1){header("Location: ".BASE_URL);}
    $act = $_GET['act'] ?? '/';
    match($act){
        '/' => dashboard(),

        'users' => userListtAll(),
        'users-detail' => userShowOne($_GET['id']),
        'users-create' => userCreate(),
        'users-update' => userUpdate($_GET['id']),
        'users-delete' => userDelete($_GET['id']),
        'users-address-detail' => userAddressDetail($_GET['id']),
        
        
        // CRUD loại hàng
        'categories' => Categories_ListtAll(),
        'category-detail' => Category_ShowOne($_GET['id']),
        'category-create' => Category_Create(),
        'category-update' => Category_Update($_GET['id']),
        'category-delete' => Category_Delete($_GET['id']),
        //product
        'products' => productListtAll(),
        'products-detail' => productShowOne($_GET['id']),
        'products-create' => productCreate(),
        'products-update' => productUpdate($_GET['id']),
        'products-delete' => productDelete($_GET['id']),
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

        // CRUD orders
        'orders' => listAllOrder(),
        'order-detail' => orderDetail($_GET['id']),   
        'orderStatus' => orderTrangThai($_GET['id'],$_GET['trangthai']),
        //tag
        'tags' => tagListtAll(),
        'tags-detail' => tagShowOne($_GET['id']),
        'tags-create' => tagCreate(),
        'tags-update' => tagUpdate($_GET['id']),
        'tags-delete' => tagDelete($_GET['id']),
        //brand
        'brands' => brand_ListtAll(),
        'brands-detail' => brand_ShowOne($_GET['id']),
        'brands-create' => brand_Create(),
        'brands-update' => brand_Update($_GET['id']),
        'brands-delete' => brand_Delete($_GET['id']),
        //attribute
        'attribute' => attributeShow($_GET['id']),
        'delete-attribute' => attributeDelete($_GET['id']),
        //size
        'sizes' => sizeListAll(),
    };


