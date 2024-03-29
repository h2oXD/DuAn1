<?php
    function homeIndex(){
        $view = "home";
        require PATH_VIEW.'layouts/master.php';
    }

    function Chitiet(){
        $view = "chitiet_sanpham/detail";
        require PATH_VIEW.'layouts/master.php';
    }

    function viewcart(){
        if(!isset($_SESSION['user'])){header("Location:" . BASE_URL ."?act=login"); exit();}
        $view = "cart/view-cart";
        require PATH_VIEW.'layouts/master.php';
    }

    function List_sp(){
        $view = "danhsach_sanpham/list_sp";
        require PATH_VIEW.'layouts/master.php';
    }

    function ship(){
        if(!isset($_SESSION['user'])){header("Location:" . BASE_URL ."?act=login"); exit();}
        $view = "ship/ship-checkout";
        require PATH_VIEW.'layouts/master.php';
    }

    
    function confirm(){
        if(!isset($_SESSION['user'])){header("Location:" . BASE_URL ."?act=login"); exit();}
        $view = "confirmation/confirm";
        require PATH_VIEW.'layouts/master.php';
    }

    


    //
    function Show_Term(){
        $view = "terms/term_home";
        require PATH_VIEW.'layouts/master.php';
    }

    //
    function Show_About(){
        $view = "about/about_show";
        require PATH_VIEW.'layouts/master.php';
    }