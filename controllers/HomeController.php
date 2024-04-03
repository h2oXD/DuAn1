<?php
    function homeIndex(){
        $view = "home";
        $categories = Show_All_Categories();
        $productsale = Product_Sale();
        $productarrival = Product_Arrival();
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