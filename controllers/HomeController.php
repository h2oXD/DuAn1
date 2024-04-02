<?php
    function homeIndex(){
        $view = "home";
<<<<<<< HEAD
        $categories = getAllCate();
        // debug($categories);
=======
        $categories = Show_All_Categories();
>>>>>>> d46d6c4a31747d6bf2fd5cdfa7bba15a07261690
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