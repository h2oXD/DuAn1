<?php
    function homeIndex(){
        $view = "home";
        $categories = Show_All_Categories();
        require PATH_VIEW.'layouts/master.php';
    }
    function viewcart(){
        if(!isset($_SESSION['user'])){header("Location:" . BASE_URL ."?act=login"); exit();}
        $view = "cart/view-cart";
        require PATH_VIEW.'layouts/master.php';
    }





    
    function confirm(){
        if(!isset($_SESSION['user'])){header("Location:" . BASE_URL ."?act=login"); exit();}
        $view = "confirmation/confirm";
        require PATH_VIEW.'layouts/master.php';
    }

    //
    function Show_About(){
        $view = "about/about_show";
        require PATH_VIEW.'layouts/master.php';
    }