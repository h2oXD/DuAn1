<?php
    //Require các file trong commons
    require_once "commons/env.php";
    require_once "commons/helper.php";
    require_once "commons/connect-db.php";

    //Require các file trong controllers, models, views
    require_file(PATH_CONTROLLER);
    require_file(PATH_MODEL);

    //Điều hướng
    $act = $_GET['act'] ?? '/';
    match($act){
        '/' => homeIndex(),
        
        

    };

    require_once "commons/disconnect-db.php";
